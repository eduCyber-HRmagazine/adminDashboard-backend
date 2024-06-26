<!-- Footer Start -->
<footer class="bg-primary mt-3" class="footer d-flex flex-column">
    <div class="p-5 container-fluid">
        <div class="row justify-content-between g-0">
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <div class="img-container text-center">
                    <img src="{{asset('publicPages/images/logo.png')}}" alt="Logo"/>
                </div>
                <!-- <p class="fs-1">HRs Magazin</p> -->
                <p class="font-italic text-light fw-light">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Neque,
                    pellentesque dictum posuere id diam rutrum.
                </p>
                <!-- Social links -->
                <div class="d-flex justify-content-center">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <div class="icon-circle me-2">
                                <img
                                    src="{{asset('publicPages/images/facebook.svg')}}"
                                    class="icon"
                                    alt="facebook"
                                />
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="icon-circle me-2">
                                <img
                                    src="{{asset('publicPages/images/twitter.svg')}}"
                                    class="icon"
                                    alt="twitter"
                                />
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="icon-circle me-2">
                                <img src="{{asset('publicPages/images/youtube.svg')}}" alt="youtube"/>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="icon-circle me-2">
                                <img
                                    src="{{asset('publicPages/images/instagram.svg')}}"
                                    class="icon"
                                    alt="instagram"
                                />
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="icon-circle me-2">
                                <img
                                    src="{{asset('publicPages/images/linkedin.svg')}}"
                                    class="icon"
                                    alt="linkedin"
                                />
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--Two colums of links div-->
            <div
                class="col-lg-5 mb-4 mb-lg-0 d-flex justify-content-between align-items-center"
            >
                <div class="col-lg-6 mb-lg-0 fw-semibold">
                    <ul class="list-unstyled mb-0 text-center">
                        <li class="mb-5">
                            <a
                                href="#"
                                class="text-light link-underline link-underline-opacity-0"
                            >Articles</a
                            >
                        </li>
                        <li class="mb-5">
                            <a
                                href="#"
                                class="text-light link-underline link-underline-opacity-0"
                            >Workplace Culture</a
                            >
                        </li>
                        <li class="mb-5">
                            <a
                                href="#"
                                class="text-light link-underline link-underline-opacity-0"
                            >Ladies in HR</a
                            >
                        </li>
                        <li class="mb-5">
                            <a
                                href="{{ route('about') }}"
                                class="text-light link-underline link-underline-opacity-0"
                            >About us</a
                            >
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 mb-lg-0 fw-semibold">
                    <ul class="list-unstyled mb-0 text-center">
                        <li class="mb-5">
                            <a
                                href="#"
                                class="text-light link-underline link-underline-opacity-0"
                            >Events</a
                            >
                        </li>
                        <li class="mb-5">
                            <a
                                href="#"
                                class="text-light link-underline link-underline-opacity-0"
                            >Community</a
                            >
                        </li>
                        <li class="mb-5">
                            <a
                                href="#"
                                class="text-light link-underline link-underline-opacity-0"
                            >Careers</a
                            >
                        </li>
                        <li class="mb-5">
                            <a
                                href="{{ route('contactUs') }}"
                                class="text-light link-underline link-underline-opacity-0"
                            >Contact us</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Third Column: Subscription Form -->
            <div
                class="col-lg-4 col-md-6 text-white text-center bg-dark rounded-4 py-4 px-5"
            >
                <h6 class="text-uppercase mb-4 oran-font fs-4">Stay In Touch</h6>
                <p class="small mb-4">
                    To be updated with all the latest news, offers and special
                    announcements.
                </p>
                <form class="d-flex flex-column align-items-center">
                    <input
                        type="email"
                        class="form-control mb-4 rounded-pill border-danger w-75 centered-placeholder"
                        placeholder="Your email address"
                    />
                    <!-- Adjusted button with Bootstrap classes and custom class for elliptical shape -->
                    <button
                        type="submit"
                        class="btn btn-lg btn-primary text-white rounded-pill px-4 oran-font fs-4"
                    >
                        Send
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- Copyrights -->
    <div class="bg-dark">
        <div class="container">
            <div class="row text-light">
                <div class="col-md-6">
                    <div class="copyright-menu in">
                        <ul
                            class="d-flex flex-row list-unstyled mt-3 justify-content-start"
                        >
                            <li class="me-5">
                                <a
                                    href="#"
                                    class="text-light link-underline link-underline-opacity-0"
                                >Privacy Policy</a
                                >
                            </li>
                            <li class="mx-4">
                                <a
                                    href="#"
                                    class="text-light link-underline link-underline-opacity-0"
                                >Terms & Conditions</a
                                >
                            </li>

                            <li class="mx-5">
                                <a
                                    href="#"
                                    class="text-light link-underline link-underline-opacity-0"
                                >Sitmap</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Col -->

                <div
                    class="col-md-6 text-light d-flex justify-content-end align-items-center me-0"
                >
                <span
                >© Copyright 2024 HRs Magazin
                  <span>|</span>
                  <span>Registered in Egypt No. 02120366</span>
                </span>
                </div>
                <!-- End col -->
            </div>
            <!-- End Row -->
        </div>
    </div>
</footer>
<!-- Footer End -->
