@extends('layout.master')
@section('title','Add Data')
@section('content')

<style>
    .gradient-custom {
        /* fallback for old browsers */
        background: #f093fb;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
    }

    .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
    }

    .card-registration .select-arrow {
        top: 13px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <section>

                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card-header">
                            Add New Student
                        </div>

                        @if (Session::has('post_created'))

                            <div class="alert alert-success" role="alert">
                                {{Session::get('post_created')}}
                            </div>

                        @endif

                        <div class="card-body">

                            <form action="{{route('post.addsubmit')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="text" id="firstName" name="first_name"
                                                   class="form-control form-control-lg" />
                                            <label class="form-label" for="firstName">First Name</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="text" id="lastName" name="last_name" class="form-control form-control-lg" />
                                            <label class="form-label" for="lastName">Last Name</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 d-flex align-items-center">

                                        <div class="form-outline datepicker w-100">
                                            <input type="date" name="dob" class="form-control form-control-lg"
                                                   id="birthdayDate" />
                                            <label for="birthdayDate" class="form-label">Birthday</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <h6 class="mb-2 pb-1">Gender: </h6>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender"
                                                   id="femaleGender" value="Female" checked />
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender"
                                                   id="maleGender" value="Male" />
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender"
                                                   id="otherGender" value="Other" />
                                            <label class="form-check-label" for="otherGender">Other</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <input type="email" id="emailAddress" name="email"
                                                   class="form-control form-control-lg" />
                                            <label class="form-label" for="emailAddress">Email</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <input type="tel" id="phoneNumber" name="number"
                                                   class="form-control form-control-lg" />
                                            <label class="form-label" for="phoneNumber">Phone Number</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">

                                        <select class="select form-control-lg" name="city">
                                            <option value="">Choose city</option>
                                            <option value="Khulna">Khulna</option>
                                            <option value="Dhaka">Dhaka</option>
                                            <option value="Barisal">Barisal</option>
                                        </select>
                                        <label class="form-label select-label">Choose option</label>

                                    </div>
                                </div>

                                <div class="mt-4 pt-2">
                                    <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                                </div>

                                <div class="text-center text-lg-start mt-4 pt-2">
                                    {{-- <button type="button" name="submit" class="btn btn-primary btn-lg"
                                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button> --}}
                                    <p class="small fw-bold mt-2 pt-1 mb-0">Have an account? <a href="{{url('/login')}}"
                                                                                                class="link-danger">Login</a></p>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>
</div>

@endsection
