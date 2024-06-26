<?php use Carbon\Carbon;

?>
@extends('publicPages.layouts.main')

@section('publicPagesContent')
    <div class="container-fluid bg-light pt-3 px-lg-5 px-md-3 px-2">
        <div class="row bg-dark px-lg-5 px-md-3 px-1 py-4 mb-3">
            <h3 class="fw-bold fs-2 text-white py-4">Upcoming event Page</h3>
            <div
                class="position-relative overflow-hidden mx-auto mb-3"
                style="height: 695px"
            >
                <img
                    src="{{asset('assets/images/events/' . $events[0]->image)}}"
                    class="rounded image-center"
                    alt="{{$events[0]->title}}"
                />
            </div>
        </div>
        <div class="row bg-light mb-3 flex-nowrap overflow-auto mt-5">
            <div class="row g-0">
                <div class="col">
                    <h2 class="fw-bold mt-5 ms-3">{{$events[0]->title}}</h2>
                    <div class="row align-items-center">
                        <div class="col-auto ms-2">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="32"
                                height="32"
                                fill="currentColor"
                                class="bi bi-calendar-date-fill mt-4"
                                viewBox="0 0 16 16"
                            >
                                <path
                                    d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zm5.402 9.746c.625 0 1.184-.484 1.184-1.18 0-.832-.527-1.23-1.16-1.23-.586 0-1.168.387-1.168 1.21 0 .817.543 1.2 1.144 1.2"
                                />
                                <path
                                    d="M16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2m-6.664-1.21c-1.11 0-1.656-.767-1.703-1.407h.683c.043.37.387.82 1.051.82.844 0 1.301-.848 1.305-2.164h-.027c-.153.414-.637.79-1.383.79-.852 0-1.676-.61-1.676-1.77 0-1.137.871-1.809 1.797-1.809 1.172 0 1.953.734 1.953 2.668 0 1.805-.742 2.871-2 2.871zm-2.89-5.435v5.332H5.77V8.079h-.012c-.29.156-.883.52-1.258.777V8.16a13 13 0 0 1 1.313-.805h.632z"
                                />
                            </svg>
                        </div>
                        <div class="col mt-4">
                            <p class="mb-0 fw-bold text-danger">
                                {{ date_format(date_create($events[0]->fromDate),'M d Y')}} -
                                {{ date_format(date_create($events[0]->toDate),'M d Y')}}
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-auto ms-2">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="32"
                                height="32"
                                fill="currentColor"
                                class="bi bi-geo-alt-fill mt-4"
                                viewBox="0 0 16 16"
                            >
                                <path
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"
                                />
                            </svg>
                        </div>
                        <div class="col mt-4">
                            <p class="mb-0 fw-bold text-danger">
                                {{$events[0]->streetNo}},{{$events[0]->streetName}},{{$events[0]->city}}
                                , {{$events[0]->country}}

                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <p class="fw-bold py-2 px-3">
                        {{$events[0]->description}}
                    </p>
                </div>
                <!--cards Caousel-->
                <div class="row bg-light my-3 pb-3">
                    <div class="col-12 bg-light px-4 pt-3 text-dark">
                        <h3 class="fw-bold fs-2">Journey to Excellence</h3>
                    </div>
                    <div class="col-12">
                        <!-- Bootstrap Carousel -->
                        <div
                            id="cardCarousel"
                            class="carousel slide"
                            data-bs-ride="carousel"
                        >
                            <!-- The slideshow/carousel -->
                            <div class="carousel-inner">
                                @foreach($journeyToExcellences as $article)
                                <div class="carousel-item {{$loop->first? 'active':''}}">
                                    <div
                                        class="card bg-light text-dark mx-auto my-1 border-0"
                                    >
                                        <div
                                            class="row align-items-center mx-md-2 justify-content-center"
                                        >
                                            <!-- Card Content -->
                                            <div class="col-md-3 col-12">
                                                <div
                                                    class="position-relative overflow-hidden"
                                                    style="max-width: 218px; aspect-ratio: 1"
                                                >
                                                    <img
                                                        src="{{asset('assets/images/users/'.$article->author->userAuthor->image)}}"
                                                        class="rounded-circle border-light image-center"
                                                        alt="Profile Image"
                                                    />
                                                </div>
                                            </div>
                                            <div class="card-body col-md-9 col-12">
                                                <div>
                                                    <h5 class="card-title fw-bold fs-3">
                                                        {{$article->author->userAuthor->firstName}} {{$article->author->userAuthor->secondName}}
                                                    </h5>
                                                    <p class="carousel-p card-text fw-medium fs-5">
                                                        {{Str::limit($article->content, 300)}}
                                                        <a href="{{ route('articleSingle', ['category' => $article->articleCategory->slug, 'article' => $article->slug]) }}" class="fw-bold text-dark text-decoration-none">Read more</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- Left and right controls/icons with inline styling for custom arrow appearance -->
                                <button
                                    class="carousel-control-prev"
                                    type="button"
                                    data-bs-target="#cardCarousel"
                                    data-bs-slide="prev"
                                >
                                    <img
                                        src="{{asset('publicPages/images/prev-arrow-black-circle.svg')}}"
                                        alt="Previous"
                                        class="carousel-control-prev-icon"
                                    />
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button
                                    class="carousel-control-next"
                                    type="button"
                                    data-bs-target="#cardCarousel"
                                    data-bs-slide="next"
                                >
                                    <img
                                        src="{{asset('publicPages/images/next-arrow-black-circle.svg')}}"
                                        alt="Next"
                                        class="carousel-control-next-icon"
                                    />
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of card carousel-->

                <!--Start of events agenda-->

                <div class="d-flex justify-content-center align-items-center my-5">
              <span
                  class="d-inline-flex justify-content-center align-items-center bg-dark"
                  style="width: 80%; height: 1px"
              ></span>
                </div>
                <div class="container">
                    <div
                        class="text-center bg-primary text-white py-4 mt-5 mb-0 fs-2 fw-bold"
                    >
                        events Agenda
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered border-dark text-center">
                            <col style="width: 25%"/>
                            <col style="width: 12.5%"/>
                            <col style="width: 12.5%"/>
                            <col style="width: 25%"/>
                            @php
                                $currentDayNumber = 0;
                            @endphp
                            @foreach ($events as $event)
                                @if($currentDayNumber != $event->dayNumber)
                                    @php
                                        $currentDayNumber = $event->dayNumber;
                                    @endphp
                                    <thead>
                                    <tr>
                                        <th colspan="4" class="bg-white fs-2 fw-bold">Day {{$event->dayNumber}}</th>
                                    </tr>
                                    <tr class="fs-2">
                                        <th class="bg-primary" rowspan="2">Agenda</th>
                                        <th colspan="2">Time</th>
                                        <th rowspan="2">Speakers</th>
                                    </tr>
                                    </thead>
                                    <tbody class="fs-3 fw-medium">
                                    <tr>
                                        <td class="bg-primary"></td>
                                        <td>From</td>
                                        <td>To</td>
                                        <td></td>
                                    </tr>

                                    @endif
                                    <tr>
                                        <td class="bg-primary">{{$event->topic}}</td>
                                        <td>{{Carbon::createFromFormat('H:i:s', $event->fromTime)->format('g:i A')}} </td>
                                        <td>{{Carbon::createFromFormat('H:i:s', $event->toTime)->format('g:i A')}} </td>
                                        <td>{{$event->speaker}} </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                        </table>
                    </div>
                </div>
                <div class="container pb-5">
                    <div
                        class="text-center bg-primary text-white py-4 mt-5 mb-0 fs-2 fw-bold"
                    >
                        events Location
                    </div>
                    <div class="d-flex justify-content-center">
                        <iframe
                            src="{{$event->googleMapLink}}"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
