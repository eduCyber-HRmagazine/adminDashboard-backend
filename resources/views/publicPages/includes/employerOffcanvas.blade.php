<div class="col-xl-4 col-md-0 col-sm-0 bg-primary">
    <div class="navbar navbar-expand-xl">
        <div class="card-block text-center text-white">
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasScrolling"
                aria-controls="offcanvasScrolling"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div
                class="offcanvas offcanvas-start bg-primary text-center text-white"
                tabindex="-1"
                data-bs-scroll="true"
                id="offcanvasScrolling"
                aria-labelledby="offcanvasScrollingLabel"
            >
                <div class="offcanvas-header float-end">
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="offcanvas"
                        aria-label="Close"
                    ></button>
                </div>
                <img
                    src="{{asset('assets/images/users/' . $user->image)}}"
                    class="img-fluid rounded-circle m-4"
                    alt="User-Profile-Image"
                />
                <a
                    href="{{route('employers.show', $user->slug)}}"
                    class="text-decoration-none mx-auto fw-bold fs-1 offcanvas-item pb-2 d-block"
                >Profile</a>
                <a
                    href="{{route('jobs.jobsPosted')}}"
                    class="text-decoration-none mx-auto fw-bold fs-1 offcanvas-item pb-2 d-block"
                >Posted Jobs</a>
                <a
                    href="{{route('jobs.create')}}"
                    class="text-decoration-none mx-auto fw-bold fs-1 offcanvas-item pb-2 d-block"
                >Post Job</a>
                @auth
                @can('isOwner', ['userId' => $user?->id])
                    <a
                    href="javascript:document.getElementById('logout-form').submit();"
                    class="text-decoration-none mx-auto fw-bold fs-1 offcanvas-item pb-2 d-block"
                    >Logout</a>

                @endcan
                @endauth
            </div>
        </div>
    </div>
</div>
