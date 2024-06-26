<form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
    @csrf
</form>
<nav class="container-fluid navbar fw-semibold p-0 m-0 mb-3">
    <!--Top-nav start-->
    <div id="top-nav" class="container-fluid bg-primary">
        <div
            class="container-fluid d-flex justify-content-between align-items-center"
        >
            <div
                id="date-trend"
                class="d-flex justify-content-center align-items-center"
            >
                <!-- Left Side: Today's Date -->
                <div
                    id="currentDate"
                    class="navbar-brand text-white me-5 pe-3"
                ></div>
                <!-- Center: News, Trends, and Animated Text -->
                <div
                    class="trend-animated-txt d-flex justify-content-center align-items-center"
                >
                    <a
                        id="trend"
                        href="#"
                        class="nav-link text-white bg-dark text-center p-3"
                    >News and Trends</a
                    >
                    <div class="text-animation text-white pb-4 ms-3">
                        <div>HR Magazine News and Trends</div>
                        <div>Ladies in HR News</div>
                        <div>HR Training and Development News</div>
                        <div>HR Industry Trends and Insights</div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <a class="fs-5 fw-semibold nav-link text-white">
                    @auth
                        {{Auth::user()->firstName}} {{Auth::user()->secondName}}
                    @endauth
                </a>
                <!-- Account Dropdown --showing in large screens and tablets on top-->
                <div class="dropdown" id="account-icon-top">
                    <a
                        class="nav-link px-2"
                        href="#"
                        role="button"
                        id="accountDropdown"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        <img
                            src="{{asset('publicPages/images/account.svg')}}"
                            alt="account"
                            class="bi bi-person-circle"
                        />
                    </a>
                    <ul
                        class="dropdown-menu dropdown-menu-dark dropdown-menu-end"
                        aria-labelledby="accountDropdown"
                    >
                        @guest
                            <li>
                                <a class="dropdown-item text-white" href="{{ route('login') }}">Login</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-white" href="{{route('register')}}">Register</a>
                            </li>
                        @else
                            @can('viewAdminDashboard')
                                <li>
                                    <a class="dropdown-item text-white" href="{{route('admin.admins.index')}}">Admin
                                        Dashboard</a>
                                </li>
                            @else
                                <li>
                                    <a class="dropdown-item text-white" href="{{route('profile')}}">Profile</a>
                                </li>
                            @endcan
                            <li>
                                <a class="dropdown-item text-white"
                                   href="javascript:document.getElementById('logout-form').submit();">Logout</a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Top-nav Ends-->
    <!-- Mid Nav Start -->
    <div id="mid-nav" class="container-fluid bg-white">
        <div class="container-fluid">
            <div class="row justify-content-between align-items-center">
                <!-- Logo Section -->
                <div class="col-12 col-md-auto mb-3 mb-md-0">
                    <a
                        href="#"
                        class="navbar-brand d-flex justify-content-center justify-content-md-start"
                    >
                        <img
                            src="{{asset('publicPages/images/logo-s.png')}}"
                            alt="Logo"
                            class="d-inline-block align-text-top"
                        />
                    </a>
                </div>
                <!-- Contact and Social Icons Section -->
                <div
                    id="social-icon-container"
                    class="col-12 col-md-auto"
                    style="margin-right: 2vw"
                >
                    <div class="text-center">
                        <p>Contact Us</p>
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="icon-circle me-2">
                                <img
                                    src="{{asset('publicPages/images/facebook.svg')}}"
                                    class="icon"
                                    alt="facebook"
                                />
                            </div>
                            <div class="icon-circle me-2">
                                <img
                                    src="{{asset('publicPages/images/twitter.svg')}}"
                                    class="icon"
                                    alt="twitter"
                                />
                            </div>
                            <div class="icon-circle me-2">
                                <img src="{{asset('publicPages/images/youtube.svg')}}" alt="youtube"/>
                            </div>
                            <div class="icon-circle me-2">
                                <img
                                    src="{{asset('publicPages/images/insta.svg')}}"
                                    class="icon"
                                    alt="instagram"
                                />
                            </div>
                            <div class="icon-circle me-2">
                                <img
                                    src="{{asset('publicPages/images/link.svg')}}"
                                    class="icon"
                                    alt="linkedin"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Mid Nav Ends-->
    <!--Bottom Nav starts-->
    <div class="container-fluid d-flex flex-nowrap bg-primary py-2">
        <div class="navbar navbar-expand-md">
            <!-- navbar toggler -->
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavbar"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- end navbar toggler -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item me-3">
                        <a class="nav-link text-white" href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown me-3">
                        <a
                            class="nav-link text-white dropdown-toggle"
                            href="#"
                            id="navbarDropdownArticles"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            Articles
                        </a>
                        <ul
                            class="dropdown-menu dropdown-menu-dark"
                            aria-labelledby="navbarDropdownArticles"
                        >
                            <li>
                                <a class="dropdown-item text-white" href="{{ route('articles.industryInsights1') }}"
                                >Industry News and Updates</a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item text-white" href="{{ route('articles.industryInsights2') }}"
                                >Trends and Insights</a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item text-white" href="{{ route('articles.industryInsights3') }}"
                                >Global HR Perspectives</a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item text-white" href="{{ route('articles.professionalDevelopment2') }}#expert-interviews"
                                >Expert Interviews</a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item text-white" href="{{ route('articles.professionalDevelopment2') }}#professional-spotlights"
                                >Professionals Spotlights</a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item text-white" href="{{ route('articles.professionalDevelopment3') }}"
                                >Training and Development</a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item text-white" href="{{ route('articles.professionalDevelopment3') }}#authors">Authors</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown me-3">
                        <a
                            class="nav-link text-white dropdown-toggle"
                            href="{{ route('articles.ladiesInHR') }}"
                            id="navbarDropdownLadiesInHR"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            Ladies in HR
                        </a>
                        <ul
                            class="dropdown-menu dropdown-menu-dark"
                            aria-labelledby="navbarDropdownLadiesInHR"
                        >
                            <li>
                                <a class="dropdown-item text-white" href="{{ route('articles.ladiesInHR') }}#ladies-interviews"
                                >Ladies Interviews</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-white" href="{{ route('articles.ladiesInHR') }}#case-studies"
                                >Case Studies</a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item text-white" href="{{ route('articles.ladiesInHR') }}#journey-to-exellence"
                                >Journey to Excellence</a
                                >
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown me-3">
                        <a
                            class="nav-link text-white dropdown-toggle"
                            href=""
                            id="navbarDropdownWorkplaceCulture"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            Workplace Culture
                        </a>
                        <ul
                            class="dropdown-menu dropdown-menu-dark"
                            aria-labelledby="navbarDropdownWorkplaceCulture"
                        >
                            <li>
                                <a class="dropdown-item text-white" href="{{ route('articles.workPlaceCultureAndWellBeing') }}#workplace-culture"
                                >Workplace Culture</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-white" href="{{ route('articles.workPlaceCultureAndWellBeing') }}#wellness-programs"
                                >Wellness Programs</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-white" href="{{ route('articles.workPlaceCultureAndWellBeing') }}#mental-health-in-workplace"
                                >Mental Health in the Workplace</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-white" href="{{ route('articles.workPlaceCultureAndWellBeing') }}#DEI"
                                >Diversity, Equity and Inclusion (DEI)</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown me-3">
                        <a
                            class="nav-link text-white dropdown-toggle"
                            href="#"
                            id="navbarDropdownEvents"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            Events
                        </a>
                        <ul
                            class="dropdown-menu dropdown-menu-dark"
                            aria-labelledby="navbarDropdownEvents"
                        >
                            <li>
                                <a class="dropdown-item text-white" href="{{route('event.allEvents')}}"
                                >Upcoming Events</a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item text-white" href="{{route('event.eventCalender')}}"
                                >Event Calendar</a
                                >
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link text-white" href="{{ route('contactUs') }}">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown me-3">
                        <a
                            class="nav-link text-white dropdown-toggle"
                            href="#"
                            id="navbarDropdownCareers"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            Careers
                        </a>
                        <ul
                            class="dropdown-menu dropdown-menu-dark"
                            aria-labelledby="navbarDropdownCareers"
                        >
                            <li>
                                <a class="dropdown-item text-white" href="{{ route('jobs.browseJobs') }}"
                                >Browse Jobs</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-white" href="#"
                                >For Employers</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="d-flex align-self-start justify-content-between">
            <!-- Account Dropdown --showing on mobiles on bottom-->
            <div class="dropdown" id="account-icon-bottom">
                <a
                    class="nav-link px-2"
                    href="#"
                    role="button"
                    id="accountDropdown"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                >
                    <img
                        src="{{asset('publicPages/images/account.svg')}}"
                        alt="account"
                        class="bi mt-2 bi-person-circle"
                    />
                </a>
                <ul
                    class="dropdown-menu dropdown-menu-dark dropdown-menu-end"
                    aria-labelledby="accountDropdown"
                >
                    @guest
                        <li>
                            <a class="dropdown-item text-white" href="{{ route('login') }}">Login</a>
                        </li>
                        <li>
                            <a class="dropdown-item text-white" href="{{route('register')}}">Register</a>
                        </li>
                    @else
                        @can('viewAdminDashboard')
                            <li>
                                <a class="dropdown-item text-white" href="{{route('admin.admins.index')}}">Admin
                                    Dashboard</a>
                            </li>
                        @else
                            <li>
                                <a class="dropdown-item text-white" href="{{route('profile')}}">Profile</a>
                            </li>
                        @endcan
                        <li>
                            <a class="dropdown-item text-white"
                               href="javascript:document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
    <!--Bottom NavBar Ends-->
</nav>
