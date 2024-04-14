<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index(Request $request)
    // {

   
    // $slug = $request->get('slug');
    // $email = $request->get('email');
    // $active = $request->has('status') && $request->get('status') === 'active';
    // $blocked = $request->has('status') && $request->get('status') === 'blocked';

    // $query = Admin::query()
    //     ->with('userAdmin')
    //     ->leftJoin('users', 'users.id', '=', 'admins.user_id');

    // if ($slug) {
    //     $query->where('users.slug', $slug);
    // }

    // if ($email) {
    //     $query->where('users.email', $email);
    // }

    // if ($active) {
    //     $query->where('users.active', 1);
    // }

    // if ($blocked) {
    //     $query->where('users.active', 0);
    // }

    // // $query->where('users.position', 'admin'); // Filter for admin position
    // $admins = $query->select('admins.*')->paginate(25)->appends(['slug' => $slug, 'email' => $email]);

        
    //     return view('Admin.user.admin.allAdmin', compact('admins'));
    // }

    public function index(Request $request)
{
  $admins = $this->searchWith($request);

  return view('Admin.user.admin.allAdmin', compact('admins'));
}


private function searchWith(Request $request)
{
    $slug = $request->get('slug');
    $email = $request->get('email');
    $active = $request->has('status') && $request->get('status') === 'active';
    $blocked = $request->has('status') && $request->get('status') === 'blocked';

        $query = Admin::query()
            ->with('userAdmin')
            ->leftJoin('users', 'users.id', '=', 'admins.user_id');

    if ($slug) {
        $query->where('users.slug', $slug);
    }

        if ($email) {
            $query->where('users.email', $email);
        }

        if ($active) {
            $query->where('users.active', 1);
        }

        if ($blocked) {
            $query->where('users.active', 0);
        }

    return $query->select('admins.*')->paginate(25)->appends(['slug' => $slug, 'email' => $email]);
}
        

        
        
        
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $admins = Admin::all();
  
        return view('Admin.user.admin.addAdmin',compact('admins'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    
    {
        // dd($request);
        $data=$request->except(['_token']);
        $data['password']=Hash::make($request['password']);
        $user=User::create($data);
        if($user->position != 'user'){
            // dd($user->position);
            $admin= new Admin();
            $admin->user_id = $user->id;
            $admin->save();
        }
        return redirect()->route('admin.admins.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }


    }

   

