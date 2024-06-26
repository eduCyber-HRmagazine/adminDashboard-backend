@extends('publicPages.layouts.main')

@section('publicPagesContent')
    <!-- start of content -->
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-lg-7 bg-dark pb-5">
                <div class="py-5"></div>
                <div
                    id="carouselExampleCaptions"
                    class="carousel slide mx-lg-4"
                    data-bs-ride="carousel"
                >
                    <div class="carousel-indicators">
                        <button
                            type="button"
                            data-bs-target="#carouselExampleCaptions"
                            data-bs-slide-to="0"
                            class="active"
                            aria-current="true"
                            aria-label="Slide 1"
                        ></button>
                        <button
                            type="button"
                            data-bs-target="#carouselExampleCaptions"
                            data-bs-slide-to="1"
                            aria-label="Slide 2"
                        ></button>
                        <button
                            type="button"
                            data-bs-target="#carouselExampleCaptions"
                            data-bs-slide-to="2"
                            aria-label="Slide 3"
                        ></button>
                        <button
                            type="button"
                            data-bs-target="#carouselExampleCaptions"
                            data-bs-slide-to="3"
                            aria-label="Slide 4"
                        ></button>
                    </div>
                    <div class="carousel-inner rounded-3 border-light">

                        <div class="carousel-item active">



                            <div class="card">
                                <img
                                    src="{{asset('publicPages/images/carousel-1.jpg')}}"
                                    class="card-img-top"
                                    alt="..."
                                />
                                <div class="card-body bg-white text-dark text-start px-3">
                                    <p class="fw-semibold">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Neque, pellentesque dictum posuere id diam rutrum.

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card">
                                <img
                                    src="{{asset('publicPages/images/carousel-1.jpg')}}"
                                    class="card-img-top"
                                    alt="..."
                                />
                                <div class="card-body bg-white text-dark text-start px-3">
                                    <p class="fw-semibold">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Neque, pellentesque dictum posuere id diam rutrum.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <img
                                    src="{{asset('publicPages/images/carousel-1.jpg')}}"
                                    class="card-img-top"
                                    alt="..."
                                />
                                <div class="card-body bg-white text-dark text-start px-3">
                                    <p class="fw-semibold">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Neque, pellentesque dictum posuere id diam rutrum.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <img
                                    src="{{asset('publicPages/images/carousel-1.jpg')}}"
                                    class="card-img-top"
                                    alt="..."
                                />
                                <div class="card-body bg-white text-dark text-start px-3">
                                    <p class="fw-semibold">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Neque, pellentesque dictum posuere id diam rutrum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button
                        class="carousel-control-prev"
                        type="button"
                        data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev"
                    >
                <span
                    class="carousel-control-prev-icon"
                    aria-hidden="true"
                ></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button
                        class="carousel-control-next"
                        type="button"
                        data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next"
                    >
                <span
                    class="carousel-control-next-icon"
                    aria-hidden="true"
                ></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-5 bg-white ps-5 pb-3">
                <h3 class="fw-bold fs-2 mb-4 mt-3 pt-3 pb-2">
                    Latest new articles
                </h3>
                <div class="overflow-hidden" style="height: 533px">
                    <div class="animation px-2 py-3 rounded-1">
                       @foreach ($news as $new)


                        <div
                            class="card border-0 bg-white border-primary"
                            onmouseover="stopAnimation()"
                            onmouseout="resumeAnimation()">

                            <div class="row g-0">
                                <div
                                    class="col-3 d-flex flex-column justify-content-center"
                                >
                                    <div
                                        class="position-relative overflow-hidden"
                                        style="height: 66px"
                                    >
                                        <img
                                            src="{{asset('assets/images/articles/' . $new->image)}}"
                                            class="rounded-start image-center"
                                            alt="..."
                                        />
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="card-body">
                                        <p
                                            class="card-text me-1 d-flex flex-column justify-content-between"
                                        >
                          <span class="text-dark">
                            {{Str::limit($new->content, 100)}}....
                          </span>
                                            <a
                                                href="{{route('articleSingle', [$new->articleCategory->slug, $new->slug])}}"
                                                class="btn btn-danger text-white rounded-5 end-0 align-self-end"
                                            >Read more</a
                                            >
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>


                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg-5 bg-dark text-white ps-5 pb-3 rounded-4">
                <h3 class="fw-bold fs-2 mb-4 mt-3 pt-3 pb-2">
                    Recommended articles
                </h3>

                <div
                    class="overflow-hidden"
                    style="
                height: 533px;
                touch-action: none;
                overscroll-behavior: contain;
              "
                >
                    <div class="animation px-2 py-3 rounded-1">
                        @foreach ($recommends as $recommend)


                        <div
                            class="card border-0 bg-dark"
                            onmouseover="stopAnimation()"
                            onmouseout="resumeAnimation()">

                            <div class="row g-0">

                                <div
                                    class="col-3 d-flex flex-column justify-content-center"
                                >
                                    <div
                                        class="position-relative overflow-hidden"
                                        style="height: 66px"
                                    >
                                        <img
                                            src="{{asset('assets/images/articles/' . $recommend->image)}}"
                                            class="rounded-start image-center"
                                            alt="..."
                                        />
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="card-body">
                                        <p
                                            class="card-text me-1 d-flex flex-column justify-content-between"
                                        >
                          <span class="text-white">
                            {{Str::limit($recommend->content, 100)}}....
                          </span>
                                            <a
                                                href="{{route('articleSingle', [$recommend->articleCategory->slug, $recommend->slug])}}"
                                                class="btn btn-danger text-white rounded-5 end-0 align-self-end"
                                            >Read more</a
                                            >
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-7 bg-light pb-5">
                <div class="py-5"></div>
                <div class="card mx-lg-4 border-dark rounded-4">
                    <div
                        style="
                  position: relative;
                  width: 100%;
                  padding-bottom: 56.25%;
                  height: 0;
                  overflow: hidden;
                "
                    >
                        <iframe
                            src="https://www.youtube.com/embed/pb5SF20Kd8M?si=auvE_Mpj1VxCsr0H"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen
                            class="card-img-top"
                            height="453"
                        ></iframe>
                    </div>
                    <div class="card-body bg-dark text-white text-start px-3">
                        <p class="fw-semibold">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Neque, pellentesque dictum posuere id diam rutrum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-primary mb-3">
            @foreach ($professionalsSpotlights->take(1) as $article)


            <div class="card border-0 bg-primary">
                <div class="row g-0 justify-content-between">
                    <div class="col-lg-9 col-md-8 order-md-1 order-sm-2">
                        <div class="card-body ps-3">
                            <h3 class="card-title fw-bold fs-2 py-3">
                                Professional Advice
                            </h3>
                            <p class="text-white fs-4">
                                {{Str::limit($article->content, 200)}}....
                                <a href="{{route('articleSingle', [$article->articleCategory->slug, $article->slug])}}" class="text-white text-decoration-none fw-bold">
                                    Read more</a
                                >
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 order-md-2 order-sm-1">
                        <div
                            class="position-relative overflow-hidden"
                            style="aspect-ratio: 1"
                        >
                            <img
                                src="{{asset('assets/images/users/' . $article->author->userAuthor->image)}}"
                                alt="Profile picture"
                                class="image-center rounded-circle p-3"
                            />
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

       @include('publicPages.includes.upcomingEvents')
    </div>
    <!--end of content-->
@endsection
