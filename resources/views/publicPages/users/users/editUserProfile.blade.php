{{-- This file if the user wants to edit his Data --}}
@extends('publicPages.layouts.main')

@section('publicPagesContent')
    <div class="container-fluid g-0">
        <div class="row justify-content-center g-0">
            <div class="col-12 text-center g-0">
                <img
                    src="{{asset('publicPages/images/big-logo.svg')}}"
                    alt="logo"
                    class="mb-3 img-fluid"
                />
            </div>
        </div>
        <!-- Edite Profile Users Start  -->
        <div class="container-fluid">
            <div class="row">
                <button
                    class="nxt-btn btn mb-2 mx-0 btn-dark text-white rounded-0 py-2 w-100 fw-bold"
                >
                    User Profile
                </button>
            </div>

            <div class="row py-5 px-md-5 px-1 g-0" id="user">
                <form>
                    <div class="row gy-5 ">
                        <div class="col-12">
                            <label
                                for="firstName"
                                class="form-label mb-3 text-primary fw-bold fs-3"
                            >First Name*</label>
                            <input
                                type="text"
                                class="col-6 form-control border border-dark border-3 rounded-4 py-4 ps-5 fs-4"
                                id="firstName"
                                name="firstName"
                                placeholder="First Name"
                            />
                        </div>
                        <div class="col-12">
                            <label
                                for="secondName"
                                class="form-label mb-3 text-primary fw-bold fs-3"
                            >Second Name*</label
                            >
                            <input
                                type="text"
                                class="col-6 form-control border border-dark border-3 rounded-4 py-4 ps-5 fs-4"
                                id="secondName"
                                name="secondName"
                                placeholder="Second Name"
                            />
                        </div>
                        <div class="col-12">
                            <label
                                for="email"
                                class="form-label mb-3 text-primary fw-bold fs-3"
                            >Email*</label
                            >
                            <input
                                type="email"
                                class="form-control border border-dark border-3 rounded-4 py-4 ps-5 fs-4"
                                id="email"
                                name="email"
                                placeholder="Email Address"
                            />
                        </div>
                        <div class="col-12">
                            <label
                                for="phone"
                                class="form-label mb-3 text-primary fw-bold fs-3"
                            >Phone Number</label
                            >
                            <input
                                type="text"
                                class="form-control border border-dark border-3 rounded-4 py-4 ps-5 fs-4"
                                id="phone"
                                name="phone"
                                placeholder="Phone Number"
                            />
                        </div>
                        <div class="col-12">
                            <label
                                for="country"
                                class="form-label mb-3 text-primary fw-bold fs-3"
                            >Gender*</label>
                            <select class="form-select text-muted border border-dark border-3 rounded-4 py-4 ps-5 fs-4"
                                    id="country"
                                    name="gender" aria-label="Default select example">
                                <option selected>Please Select</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select>
                            <small class="ps-5 fs-4 text-muted">Please Selecte your gender</small>
                        </div>
                        <div class="col-12">
                            <label
                                for="position"
                                class="form-label mb-3 text-primary fw-bold fs-3"
                            >Position*</label
                            >
                            <input
                                type="text"
                                class="form-control border border-dark border-3 rounded-4 py-4 ps-5 fs-4"
                                id="position"
                                name="position"
                                placeholder="Position"
                            />
                        </div>
                        <div class="col-12">
                            <h2 class="text-primary fw-bold ms-4 fs-3">Profile Picture</h2>
                            <h6 class="ms-4 text-muted">Please include an image</h6>
                            <label
                                class="btn btn-outline-dark fw-bold ms-3 px-3 py-3 fs-4 rounded-4"
                            >
                                <input type="file" class="d-none" placeholder=""/>
                                Upload Image
                            </label>

                            <h6 class="ms-4 mt-2 text-muted">PNG, JPG (5 MB)</h6>
                        </div>

                        <div class="col-md-12 d-flex py-4 w-100">
                            <button
                                type="submit"
                                class="btn btn-primary text-light fs-5 fw-semibold rounded-4 py-3 px-5 m-auto"
                            >
                                Edit Account
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

        <!-- Edite Profile Users End  -->
    </div>
@endsection