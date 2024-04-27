@extends('publicPages.layouts.main')

@section('publicPagesContent')
    <!-- start of content -->
    <div class="container-fluid">
        <!--the video player-->
        <div class="row bg-light px-md-3 px-1 py-4">
            <h3 class="fw-bold fs-card-xl mb-3">Ladies Interviews</h3>
            <div class="col">
                <div class="card bg-light text-white mx-md-3 border-light">
                    <div class="ratio ratio-16x9">
                        <!-- Default Image -->
                        <img
                            src="{{asset('publicPages/images/ladies-interview.svg')}}"
                            alt="Default Video Image"
                            class="embed-cover"
                        />
                        <!-- Iframe for Video -->
                        <iframe
                            src="https://www.youtube.com/embed/7S0Lj4scspU?list=PL7h7VRXAvXNpehO1CPzEPdNEJNqItu6HM&enablejsapi=1"
                            class="youtube-video embed-cover"
                            style="display: none"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                        >
                        </iframe>

                        <!-- Custom Play Button -->
                        <button
                            type="button"
                            class="btn position-absolute top-50 start-50 translate-middle"
                            aria-label="Play Video"
                            onclick="playVideo()"
                        >
                            <img
                                src="{{asset('publicPages/images/video-play-btn.svg')}}"
                                alt="Play Video"
                                class="embed-cover-btn"
                            />
                        </button>
                    </div>

                    <!-- <div
                  class="gradient position-absolute start-0 top-0 w-100 h-100"
                    ></div>-->
                    <div class="card-img-overlay overflow-auto responsive-card">
                        <h5 class="card-title fs-card-xl">HRs Expert Interviews</h5>
                        <p class="fw-semibold fs-card-l">Thursday Dec 12 2023</p>
                        <p class="fw-semibold fs-card-md">Amged S. El-Hawrani</p>
                        <p class="fs-card-sm open-font fw-semibold">
                            Lorem ipsum dolor sit amet consectetur. Pellentesque faucibus
                            mi feugiat tristique purus penatibus mauris nam libero. Non
                            aliquam varius at amet lorem lobortis netus vulputate. Semper
                            purus turpis vitae nunc urna sodales mauris. Vulputate sit est
                            pharetra velit eget.....<a
                                href="#"
                                class="fw-bold text-decoration-none text-white"
                            >Read more</a
                            >
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div
            class="row slide_group overflow-hidden px-md-5 px-lg-0 g-0 py-3 bg-dark"
        >
            <div class="d-flex flex-nowrap overflow-auto">
                <!-- First card -->
                <div class="col-12 col-md-8 py-3 px-4 slide_custom sliderWrapper">
                    <div class="card mb-3 bg-dark border-0">
                        <div
                            class="row g-0 align-items-center justify-content-center"
                        >
                            <div
                                class="col-md-4 overflow-hidden position-relative"
                                style="height: 170px"
                            >
                                <div class="ratio ratio-16x9">
                                    <!-- Default Image -->
                                    <img
                                        src="{{asset('publicPages/images/sm-video1-p8.jpg')}}"
                                        alt="Default Video Image"
                                        class="embed-cover"
                                    />
                                    <!-- Iframe for Video -->
                                    <iframe
                                        src="https://www.youtube.com/embed/7S0Lj4scspU?list=PL7h7VRXAvXNpehO1CPzEPdNEJNqItu6HM&enablejsapi=1"
                                        class="youtube-video embed-cover"
                                        style="display: none"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen
                                    >
                                    </iframe>

                                    <!-- Custom Play Button -->
                                    <button
                                        type="button"
                                        class="btn position-absolute top-50 start-50 translate-middle"
                                        aria-label="Play Video"
                                        onclick="playVideo()"
                                    >
                                        <img
                                            src="{{asset('publicPages/images/video-play-btn.svg')}}"
                                            alt="Play Video"
                                            class="embed-cover-btn"
                                        />
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title text-primary fw-bold fs-5 hs">
                                        HRs Expert Interviews
                                    </h5>
                                    <p class="card-text fs-6 text-white ps">
                                        Thursday Dec 12 2023
                                    </p>
                                    <p class="fw-semibold text-white fs-7 ps">
                                        Amged S. El-Hawrani
                                    </p>
                                    <p class="card-text fs-7 text-white ps">
                                        Lorem ipsum dolor sit amet consectetur. Pellentesque
                                        faucibus mi feugiat tristique purus penatibus mauris
                                        nam libero. Non aliquam varius at amet lorem lobortis
                                        netus vulputate. Semper purus turpis vitae nunc urna
                                        sodales mauris.....<a
                                            href="#"
                                            class="fw-semibold text-white text-decoration-none"
                                        >Read more</a
                                        >
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Second card -->
                <div class="col-12 col-md-8 py-3 px-4 slide_custom sliderWrapper">
                    <div class="card mb-3 bg-dark border-0">
                        <div
                            class="row g-0 align-items-center justify-content-center"
                        >
                            <div
                                class="col-md-4 overflow-hidden position-relative"
                                style="height: 170px"
                            >
                                <div class="ratio ratio-16x9">
                                    <!-- Default Image -->
                                    <img
                                        src="{{asset('publicPages/images/sm-video2-p8.jpg')}}"
                                        alt="Default Video Image"
                                        class="embed-cover"
                                    />
                                    <!-- Iframe for Video -->
                                    <iframe
                                        src="https://www.youtube.com/embed/7S0Lj4scspU?list=PL7h7VRXAvXNpehO1CPzEPdNEJNqItu6HM&enablejsapi=1"
                                        class="youtube-video embed-cover"
                                        style="display: none"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen
                                    >
                                    </iframe>

                                    <!-- Custom Play Button -->
                                    <button
                                        type="button"
                                        class="btn position-absolute top-50 start-50 translate-middle"
                                        aria-label="Play Video"
                                        onclick="playVideo()"
                                    >
                                        <img
                                            src="{{asset('publicPages/images/video-play-btn.svg')}}"
                                            alt="Play Video"
                                            class="embed-cover-btn"
                                        />
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title text-primary fw-bold fs-5 hs">
                                        HRs Expert Interviews
                                    </h5>
                                    <p class="card-text fs-6 text-white ps">
                                        Thursday Dec 12 2023
                                    </p>
                                    <p class="fw-semibold text-white fs-7 ps">
                                        Amged S. El-Hawrani
                                    </p>
                                    <p class="card-text fs-7 text-white ps">
                                        Lorem ipsum dolor sit amet consectetur. Pellentesque
                                        faucibus mi feugiat tristique purus penatibus mauris
                                        nam libero. Non aliquam varius at amet lorem lobortis
                                        netus vulputate. Semper purus turpis vitae nunc urna
                                        sodales mauris.....<a
                                            href="#"
                                            class="fw-semibold text-white text-decoration-none"
                                        >Read more</a
                                        >
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Third card -->
                <div class="col-12 col-md-8 py-3 px-4 slide_custom sliderWrapper">
                    <div class="card mb-3 bg-dark border-0">
                        <div
                            class="row g-0 align-items-center justify-content-center"
                        >
                            <div
                                class="col-md-4 overflow-hidden position-relative"
                                style="height: 170px"
                            >
                                <div class="ratio ratio-16x9">
                                    <!-- Default Image -->
                                    <img
                                        src="{{asset('publicPages/images/sm-video3-p8.jpg')}}"
                                        alt="Default Video Image"
                                        class="embed-cover"
                                    />
                                    <!-- Iframe for Video -->
                                    <iframe
                                        src="https://www.youtube.com/embed/7S0Lj4scspU?list=PL7h7VRXAvXNpehO1CPzEPdNEJNqItu6HM&enablejsapi=1"
                                        class="youtube-video embed-cover"
                                        style="display: none"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen
                                    >
                                    </iframe>

                                    <!-- Custom Play Button -->
                                    <button
                                        type="button"
                                        class="btn position-absolute top-50 start-50 translate-middle"
                                        aria-label="Play Video"
                                        onclick="playVideo()"
                                    >
                                        <img
                                            src="{{asset('publicPages/images/video-play-btn.svg')}}"
                                            alt="Play Video"
                                            class="embed-cover-btn"
                                        />
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title text-primary fw-bold fs-5 hs">
                                        HRs Expert interviews
                                    </h5>
                                    <p class="card-text fs-6 text-white ps">
                                        Thursday Dec 12 2023
                                    </p>
                                    <p class="fw-semibold text-white fs-7 ps">
                                        Amged S. El-Hawrani
                                    </p>
                                    <p class="card-text fs-7 text-white ps">
                                        Lorem ipsum dolor sit amet consectetur. Pellentesque
                                        faucibus mi feugiat tristique purus penatibus mauris
                                        nam libero. Non aliquam varius at amet lorem lobortis
                                        netus vulputate. Semper purus turpis vitae nunc urna
                                        sodales mauris.....<a
                                            href="#"
                                            class="fw-semibold text-white text-decoration-none"
                                        >Read more</a
                                        >
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fourth card -->
                <div class="col-12 col-md-8 py-3 px-4 slide_custom sliderWrapper">
                    <div class="card mb-3 bg-dark border-0">
                        <div
                            class="row g-0 align-items-center justify-content-center"
                        >
                            <div
                                class="col-md-4 overflow-hidden position-relative"
                                style="height: 170px"
                            >
                                <div class="ratio ratio-16x9">
                                    <!-- Default Image -->
                                    <img
                                        src="{{asset('publicPages/images/sm-video-4-p8.jpg')}}"
                                        alt="Default Video Image"
                                        class="embed-cover"
                                    />
                                    <!-- Iframe for Video -->
                                    <iframe
                                        src="https://www.youtube.com/embed/7S0Lj4scspU?list=PL7h7VRXAvXNpehO1CPzEPdNEJNqItu6HM&enablejsapi=1"
                                        class="youtube-video embed-cover"
                                        style="display: none"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen
                                    >
                                    </iframe>

                                    <!-- Custom Play Button -->
                                    <button
                                        type="button"
                                        class="btn position-absolute top-50 start-50 translate-middle"
                                        aria-label="Play Video"
                                        onclick="playVideo()"
                                    >
                                        <img
                                            src="{{asset('publicPages/images/video-play-btn.svg')}}"
                                            alt="Play Video"
                                            class="embed-cover-btn"
                                        />
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title text-primary fw-bold fs-5 hs">
                                        HRs Expert Interviews
                                    </h5>
                                    <p class="card-text fs-6 text-white ps">
                                        Thursday Dec 12 2023
                                    </p>
                                    <p class="fw-semibold text-white fs-7 ps">
                                        Amged S. El-Hawrani
                                    </p>
                                    <p class="card-text fs-7 text-white ps">
                                        Lorem ipsum dolor sit amet consectetur. Pellentesque
                                        faucibus mi feugiat tristique purus penatibus mauris
                                        nam libero. Non aliquam varius at amet lorem lobortis
                                        netus vulputate. Semper purus turpis vitae nunc urna
                                        sodales mauris.....<a
                                            href="#"
                                            class="fw-semibold text-white text-decoration-none"
                                        >Read more</a
                                        >
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
            </div>
            <div class="arrow-container d-flex justify-content-between">
                <a class="previous_btn"
                ><img
                        src="{{asset('publicPages/images/Arrow_left.svg')}}"
                        alt="arrow img left"
                    /></a>
                <a class="next_btn"
                ><img
                        src="{{asset('publicPages/images/Arrow_right.svg')}}"
                        alt="arrow img right"
                    /></a>
            </div>
        </div>

        <!--cards Caousel-->
        <div class="row bg-white my-3 pb-3">
            <div class="col-12 bg-white px-4 pt-3 text-dark">
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
                        <div class="carousel-item active">
                            <div class="card bg-white text-dark mx-auto my-1 border-0">
                                <div
                                    class="row align-items-center mx-2 justify-content-center"
                                >
                                    <!-- Card Content -->
                                    <div class="col-md-3">
                                        <div
                                            class="position-relative overflow-hidden"
                                            style="max-width: 218px; aspect-ratio: 1"
                                        >
                                            <img
                                                src="{{asset('publicPages/images/avatar1-p8.svg')}}"
                                                class="rounded-circle border-light image-center"
                                                alt="Profile Image"
                                            />
                                        </div>
                                    </div>
                                    <div class="card-body col-md-8">
                                        <div>
                                            <h5 class="card-title fw-bold fs-3">
                                                HRs Journey to Excellence
                                            </h5>
                                            <p class="card-text fw-semibold fs-4">
                                                Thursday Dec 12 2023
                                            </p>
                                            <p class="card-text fw-semibold fs-4">
                                                Nadia S. El-Hawrani
                                            </p>
                                            <p class="carousel-p card-text fw-medium fs-5">
                                                Lorem ipsum dolor sit amet consectetur. Pellentesque
                                                faucibus mi feugiat tristique purus penatibus mauris
                                                nam libero....
                                                <a
                                                    href="#"
                                                    class="fw-bold text-dark text-decoration-none"
                                                >Read more</a
                                                >
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card bg-white text-dark mx-auto my-1 border-0">
                                <div
                                    class="row align-items-center mx-2 justify-content-center"
                                >
                                    <!-- Card Content -->
                                    <div class="col-md-3">
                                        <div
                                            class="position-relative overflow-hidden"
                                            style="max-width: 218px; aspect-ratio: 1"
                                        >
                                            <img
                                                src="{{asset('publicPages/images/team 5.png')}}"
                                                class="rounded-circle border-light image-center"
                                                alt="Profile Image"
                                            />
                                        </div>
                                    </div>
                                    <div class="card-body col-md-8">
                                        <div>
                                            <h5 class="card-title fw-bold fs-3">
                                                HRs Journey to Excellence
                                            </h5>
                                            <p class="card-text fw-semibold fs-4">
                                                Thursday Dec 12 2023
                                            </p>
                                            <p class="card-text fw-semibold fs-4">
                                                Nadia S. El-Hawrani
                                            </p>
                                            <p class="carousel-p card-text fw-medium fs-5">
                                                Lorem ipsum dolor sit amet consectetur. Pellentesque
                                                faucibus mi feugiat tristique purus penatibus mauris
                                                nam libero....
                                                <a
                                                    href="#"
                                                    class="fw-bold text-dark text-decoration-none"
                                                >Read more</a
                                                >
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card bg-white text-dark mx-auto my-1 border-0">
                                <div
                                    class="row align-items-center mx-2 justify-content-center"
                                >
                                    <!-- Card Content -->
                                    <div class="col-md-3">
                                        <div
                                            class="position-relative overflow-hidden"
                                            style="max-width: 218px; aspect-ratio: 1"
                                        >
                                            <img
                                                src="{{asset('publicPages/images/avatar3-p8.jpg')}}"
                                                class="rounded-circle border-light image-center"
                                                alt="Profile Image"
                                            />
                                        </div>
                                    </div>
                                    <div class="card-body col-md-8">
                                        <div>
                                            <h5 class="card-title fw-bold fs-3">
                                                HRs Journey to Excellence
                                            </h5>
                                            <p class="card-text fw-semibold fs-4">
                                                Thursday Dec 12 2023
                                            </p>
                                            <p class="card-text fw-semibold fs-4">
                                                Nadia S. El-Hawrani
                                            </p>
                                            <p class="carousel-p card-text fw-medium fs-5">
                                                Lorem ipsum dolor sit amet consectetur. Pellentesque
                                                faucibus mi feugiat tristique purus penatibus mauris
                                                nam libero....
                                                <a
                                                    href="#"
                                                    class="fw-bold text-dark text-decoration-none"
                                                >Read more</a
                                                >
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card bg-white text-dark mx-auto my-1 border-0">
                                <div
                                    class="row align-items-center mx-2 justify-content-center"
                                >
                                    <!-- Card Content -->
                                    <div class="col-md-3">
                                        <div
                                            class="position-relative overflow-hidden"
                                            style="max-width: 218px; aspect-ratio: 1"
                                        >
                                            <img
                                                src="{{asset('publicPages/images/team 3.png')}}"
                                                class="rounded-circle border-light image-center"
                                                alt="Profile Image"
                                            />
                                        </div>
                                    </div>
                                    <div class="card-body col-md-8">
                                        <div>
                                            <h5 class="card-title fw-bold fs-3">
                                                HRs Journey to Excellence
                                            </h5>
                                            <p class="card-text fw-semibold fs-4">
                                                Thursday Dec 12 2023
                                            </p>
                                            <p class="card-text fw-semibold fs-4">
                                                Nadia S. El-Hawrani
                                            </p>
                                            <p class="carousel-p card-text fw-medium fs-5">
                                                Lorem ipsum dolor sit amet consectetur. Pellentesque
                                                faucibus mi feugiat tristique purus penatibus mauris
                                                nam libero....
                                                <a
                                                    href="#"
                                                    class="fw-bold text-dark text-decoration-none"
                                                >Read more</a
                                                >
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        <!--column of article Cards section -->
        <div class="row bg-dark">
            <div class="col-12 bg-primary p-5 text-white">
                <h3 class="fw-bold fs-2">HR Case Studies</h3>
            </div>
            <!--cards list-->
            <div class="col-12">
                <div>
                    <div>
                        <div class="card bg-white text-dark mx-auto mx-lg-5 my-3">
                            <div
                                class="row align-items-center gx-5 mx-2 justify-content-center"
                            >
                                <!-- Card Content -->
                                <div class="col-md-3">
                                    <div
                                        class="position-relative overflow-hidden"
                                        style="max-width: 218px; aspect-ratio: 1"
                                    >
                                        <img
                                            src="{{asset('publicPages/images/cv1.png')}}"
                                            class="rounded-circle border-light image-center"
                                            alt="Profile Image"
                                        />
                                    </div>
                                </div>
                                <div class="card-body col-md-8">
                                    <div>
                                        <h5 class="card-title fw-bold fs-3">HR Case Studies</h5>
                                        <p class="card-text fw-semibold fs-4">
                                            Thursday Dec 12 2023
                                        </p>
                                        <p class="card-text fw-semibold fs-4">
                                            Nadia S. El-Hawrani
                                        </p>
                                        <p class="carousel-p card-text fw-medium fs-5">
                                            Lorem ipsum dolor sit amet consectetur. Pellentesque
                                            faucibus mi feugiat tristique purus penatibus mauris
                                            nam libero....
                                            <a
                                                href="#"
                                                class="fw-bold text-dark text-decoration-none"
                                            >Read more</a
                                            >
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-white text-dark mx-auto mx-lg-5 my-3">
                            <div
                                class="row align-items-center gx-5 mx-2 justify-content-center"
                            >
                                <!-- Card Content -->
                                <div class="col-md-3">
                                    <div
                                        class="position-relative overflow-hidden"
                                        style="max-width: 218px; aspect-ratio: 1"
                                    >
                                        <img
                                            src="{{asset('publicPages/images/cv2.svg')}}"
                                            class="rounded-circle border-light image-center"
                                            alt="Profile Image"
                                        />
                                    </div>
                                </div>
                                <div class="card-body col-md-8">
                                    <div>
                                        <h5 class="card-title fw-bold fs-3">HR Case Studies</h5>
                                        <p class="card-text fw-semibold fs-4">
                                            Thursday Dec 12 2023
                                        </p>
                                        <p class="card-text fw-semibold fs-4">
                                            Nadia S. El-Hawrani
                                        </p>
                                        <p class="carousel-p card-text fw-medium fs-5">
                                            Lorem ipsum dolor sit amet consectetur. Pellentesque
                                            faucibus mi feugiat tristique purus penatibus mauris
                                            nam libero....
                                            <a
                                                href="#"
                                                class="fw-bold text-dark text-decoration-none"
                                            >Read more</a
                                            >
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-white text-dark mx-auto mx-lg-5 my-3">
                            <div
                                class="row align-items-center gx-5 mx-2 justify-content-center"
                            >
                                <!-- Card Content -->
                                <div class="col-md-3">
                                    <div
                                        class="position-relative overflow-hidden"
                                        style="max-width: 218px; aspect-ratio: 1"
                                    >
                                        <img
                                            src="{{asset('publicPages/images/cv3.svg')}}"
                                            class="rounded-circle border-light image-center"
                                            alt="Profile Image"
                                        />
                                    </div>
                                </div>
                                <div class="card-body col-md-8">
                                    <div>
                                        <h5 class="card-title fw-bold fs-3">HR Case Studies</h5>
                                        <p class="card-text fw-semibold fs-4">
                                            Thursday Dec 12 2023
                                        </p>
                                        <p class="card-text fw-semibold fs-4">
                                            Nadia S. El-Hawrani
                                        </p>
                                        <p class="carousel-p card-text fw-medium fs-5">
                                            Lorem ipsum dolor sit amet consectetur. Pellentesque
                                            faucibus mi feugiat tristique purus penatibus mauris
                                            nam libero....
                                            <a
                                                href="#"
                                                class="fw-bold text-dark text-decoration-none"
                                            >Read more</a
                                            >
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-white text-dark mx-auto mx-lg-5 my-3">
                            <div
                                class="row align-items-center gx-5 mx-2 justify-content-center"
                            >
                                <!-- Card Content -->
                                <div class="col-md-3">
                                    <div
                                        class="position-relative overflow-hidden"
                                        style="max-width: 218px; aspect-ratio: 1"
                                    >
                                        <img
                                            src="{{asset('publicPages/images/author22.png')}}"
                                            class="rounded-circle border-light image-center"
                                            alt="Profile Image"
                                        />
                                    </div>
                                </div>
                                <div class="card-body col-md-8">
                                    <div>
                                        <h5 class="card-title fw-bold fs-3">HR Case Studies</h5>
                                        <p class="card-text fw-semibold fs-4">
                                            Thursday Dec 12 2023
                                        </p>
                                        <p class="card-text fw-semibold fs-4">
                                            Nadia S. El-Hawrani
                                        </p>
                                        <p class="carousel-p card-text fw-medium fs-5">
                                            Lorem ipsum dolor sit amet consectetur. Pellentesque
                                            faucibus mi feugiat tristique purus penatibus mauris
                                            nam libero....
                                            <a
                                                href="#"
                                                class="fw-bold text-dark text-decoration-none"
                                            >Read more</a
                                            >
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-white text-dark mx-auto mx-lg-5 my-3">
                            <div
                                class="row align-items-center gx-5 mx-2 justify-content-center"
                            >
                                <!-- Card Content -->
                                <div class="col-md-3">
                                    <div
                                        class="position-relative overflow-hidden"
                                        style="max-width: 218px; aspect-ratio: 1"
                                    >
                                        <img
                                            src="{{asset('publicPages/images/author.png')}}"
                                            class="rounded-circle border-light image-center"
                                            alt="Profile Image"
                                        />
                                    </div>
                                </div>
                                <div class="card-body col-md-8">
                                    <div>
                                        <h5 class="card-title fw-bold fs-3">HR Case Studies</h5>
                                        <p class="card-text fw-semibold fs-4">
                                            Thursday Dec 12 2023
                                        </p>
                                        <p class="card-text fw-semibold fs-4">
                                            Nadia S. El-Hawrani
                                        </p>
                                        <p class="carousel-p card-text fw-medium fs-5">
                                            Lorem ipsum dolor sit amet consectetur. Pellentesque
                                            faucibus mi feugiat tristique purus penatibus mauris
                                            nam libero....
                                            <a
                                                href="#"
                                                class="fw-bold text-dark text-decoration-none"
                                            >Read more</a
                                            >
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-white text-dark mx-auto mx-lg-5 my-3">
                            <div
                                class="row align-items-center gx-5 mx-2 justify-content-center"
                            >
                                <!-- Card Content -->
                                <div class="col-md-3">
                                    <div
                                        class="position-relative overflow-hidden"
                                        style="max-width: 218px; aspect-ratio: 1"
                                    >
                                        <img
                                            src="{{asset('publicPages/images/GlobalHRPerspectives3.jpg')}}"
                                            class="rounded-circle border-light image-center"
                                            alt="Profile Image"
                                        />
                                    </div>
                                </div>
                                <div class="card-body col-md-8">
                                    <div>
                                        <h5 class="card-title fw-bold fs-3">HR Case Studies</h5>
                                        <p class="card-text fw-semibold fs-4">
                                            Thursday Dec 12 2023
                                        </p>
                                        <p class="card-text fw-semibold fs-4">
                                            Nadia S. El-Hawrani
                                        </p>
                                        <p class="carousel-p card-text fw-medium fs-5">
                                            Lorem ipsum dolor sit amet consectetur. Pellentesque
                                            faucibus mi feugiat tristique purus penatibus mauris
                                            nam libero....
                                            <a
                                                href="#"
                                                class="fw-bold text-dark text-decoration-none"
                                            >Read more</a
                                            >
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-white text-dark mx-auto mx-lg-5 my-3">
                            <div
                                class="row align-items-center gx-5 mx-2 justify-content-center"
                            >
                                <!-- Card Content -->
                                <div class="col-md-3">
                                    <div
                                        class="position-relative overflow-hidden"
                                        style="max-width: 218px; aspect-ratio: 1"
                                    >
                                        <img
                                            src="{{asset('publicPages/images/st77.png')}}"
                                            class="rounded-circle border-light image-center"
                                            alt="Profile Image"
                                        />
                                    </div>
                                </div>
                                <div class="card-body col-md-8">
                                    <div>
                                        <h5 class="card-title fw-bold fs-3">HR Case Studies</h5>
                                        <p class="card-text fw-semibold fs-4">
                                            Thursday Dec 12 2023
                                        </p>
                                        <p class="card-text fw-semibold fs-4">
                                            Nadia S. El-Hawrani
                                        </p>
                                        <p class="carousel-p card-text fw-medium fs-5">
                                            Lorem ipsum dolor sit amet consectetur. Pellentesque
                                            faucibus mi feugiat tristique purus penatibus mauris
                                            nam libero....
                                            <a
                                                href="#"
                                                class="fw-bold text-dark text-decoration-none"
                                            >Read more</a
                                            >
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end of card list-->
        </div>
        <!--end of col of article cards section-->
    </div>
@endsection