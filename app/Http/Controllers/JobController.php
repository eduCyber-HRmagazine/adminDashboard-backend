<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Traits\Common;
use App\Models\Employer;
use App\Models\JobDetail;
use App\Models\JobSeeker;
use App\Enums\CareerLevel;
use App\Models\JobApplied;
use App\Models\JobCategory;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\StoreJobsRequest;
use App\Http\Requests\UpdateJobsRequest;
use Illuminate\Validation\UnauthorizedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;

class JobController extends Controller
{
    use Common;

    function index()
    {
        try {
            $employer = Employer::where('user_id', Auth::user()->id)->first();

            if (!$employer) {
                throw new ResourceNotFoundException("Not Found");
            }

            $user = User::where('id', Auth::user()->id)->first();
            $jobs = JobDetail::where("employer_id", $employer->id)->get();

            $jobApplied = DB::table('job_applieds')
                ->join('job_details', 'job_applieds.jobDetail_id', '=', 'job_details.id')
                ->join('job_seekers', 'job_applieds.jobSeeker_id', '=', 'job_seekers.id')
                ->where("job_details.employer_id", $employer->id)
                ->join('users', 'job_seekers.user_id', '=', 'users.id')->get();

            return view('publicPages.jobs.jobsPosted', compact('jobs', "jobApplied", 'user'));
        } catch (\Throwable $exception) {
            return redirect()
                ->route('index')
                ->with(['messages' => json_encode(['error' => ['Error: ' . $exception->getMessage()]])]);
        }
    }

    function create()
    {
        $jobCategory = JobCategory::get();
        $levels = CareerLevel::cases();

        return view("publicPages.jobs.postJob", compact('jobCategory', "levels"));
    }

    function store(StoreJobsRequest $request)
    {
        try {
            $data = $this->prepareData($request);
            JobDetail::create($data);
            return redirect()
                ->route('jobs.jobsPosted')
                ->with(['messages' => json_encode(['success' => ['Jobs created Successfully']])]);
        } catch (\Throwable $exception) {
            return redirect()
                ->route('jobs.jobsPosted')
                ->with(['messages' => json_encode(['error' => ['Error creating Job: ' . $exception->getMessage()]])]);
        }

    }

    function show($slug)
    {
        try {
            $jobDetails = JobDetail::where("slug", $slug)->first();
            if (!$jobDetails) {
                throw new ResourceNotFoundException('Job is not found');
            }
            return view('publicPages.jobs.jobDetails', compact('jobDetails'));
        } catch (\Throwable $exception) {
            return redirect()
                ->back()
                ->with(['messages' => json_encode(['error' => [' Job: ' . $exception->getMessage()]])]);
        }

    }

    function edit($slug)
    {
        try {
            $job = JobDetail::where("slug", $slug)->first();
            if (!$job) {
                throw new ResourceNotFoundException('Job is not found');
            }
            if (Gate::denies('isOwner', ['userId' => $job->Employer->user_id])) {
                throw new UnauthorizedException("Unauthorized");
            }
            $levels = CareerLevel::cases();
            $jobCategory = JobCategory::get();
            return view("publicPages.jobs.editJobs", compact("levels", "jobCategory", "job"));
        } catch (\Throwable $exception) {
            return redirect()
                ->back()
                ->with(['messages' => json_encode(['error' => [' Job: ' . $exception->getMessage()]])]);
        }
    }

    function update(UpdateJobsRequest $request, $slug)
    {
        try {
            $job = JobDetail::where("slug", $slug)->first();
            if (!$job) {
                throw new ResourceNotFoundException('Job is not found');
            }
            if (Gate::denies('isOwner', ['userId' => $job->Employer->user_id])) {
                throw new UnauthorizedException("Unauthorized");
            }

            $data = $this->prepareData($request);
            $job->update($data);
            return redirect()
                ->route('jobs.jobsPosted')
                ->with(['messages' => json_encode(['success' => ['job update Successfully']])]);
        } catch (\Throwable $exception) {
            return redirect()
                ->back()
                ->with(['messages' => json_encode(['error' => [' Job: ' . $exception->getMessage()]])]);
        }

    }

    function browseJobs()
    {
        $request = Request();
        $jobs = $this->search($request);
        $jobs = $jobs
            ->whereDate('job_details.deadline', '>=', Carbon::now()->format('Y-m-d'))
            ->select(['*', 'job_details.slug as jobSlug'])
            ->get();

        $categories = JobCategory::get();

        return view('publicPages.jobs.browseJobs', compact('jobs', 'categories'));
    }

    function jobApply($id)
    {
        try {
            $jobSeeker = JobSeeker::where('user_id', Auth::user()->id)->first();

            if (!$jobSeeker) {
                throw new ResourceNotFoundException("Not User");
            }

            $jobApply = JobApplied::where('jobDetail_id', $id)->where('jobSeeker_id', $jobSeeker->id)->first();
            if ($jobApply) {
                return redirect()
                    ->back()
                    ->with(['messages' => json_encode(['success' => ['job Apply Done Before']])]);
            }
            DB::table('job_applieds')->insert([
                'jobDetail_id' => $id,
                'jobSeeker_id' => $jobSeeker->id,
            ]);
            return redirect()
                ->back()
                ->with(['messages' => json_encode(['success' => ['job Apply Successfully']])]);
        } catch (\Throwable $exception) {
            return redirect()
                ->back()
                ->with(['messages' => json_encode(['error' => [' Apply: ' . $exception->getMessage()]])]);
        }

    }

    function search($request)
    {
        $jobs = DB::table('job_details')
            ->join('job_categories', 'job_categories.id', '=', 'job_details.category_id');

        if ($search = $request->search) {
            $jobs->where('job_details.title', "LIKE", "%$search%");
        }
        if ($search = $request->optcheckbox) {

            foreach ($search as $sr) {
                if ($sr == "All") {
                    break;
                }
                $jobs->orWhere("job_details.city", "LIKE", "%$sr%");
            }
        }
        if ($search = $request->optcheckbox2) {

            foreach ($search as $cat) {
                if ($cat == "All") {
                    break;
                }
                $jobs->orWhere("job_categories.category", "LIKE", "%$cat%");
            }
        }
        return $jobs;
    }

    function prepareData($request)
    {
        $employer = Employer::where('user_id', Auth::user()->id)->first();
        if (!$employer) {
            throw new ResourceNotFoundException("Not Found");
        }
        $data = $request->except('_token');
        if (isset($data['image'])) {
            $data['image'] = $this->uploadFile($data['image'], 'assets/images/jobs');
        } else {
            $data["image"] = $data['oldimage'];
        }
        $data["employer_id"] = $employer->id;
        return $data;
    }


}

