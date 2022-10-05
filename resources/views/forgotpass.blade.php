@extends('template.second_master')

@section('main-content')

    <!-- Main Section-->
    <section class="d-flex justify-content-center align-items-start vh-100 py-5 px-3 px-md-0">

        <!-- Login Form-->
        <div class="d-flex flex-column w-100 align-items-center">

            <!-- Logo-->
            <a href="" class="d-table mt-5 mb-4 mx-auto">
             
            </a>
            <!-- Logo-->
            
            <div class="shadow-lg rounded p-4 p-sm-5 bg-white form">
                <h5 class="fw-bold text-muted">Lupa password</h5>
                <p class="text-muted">Please enter your email below and we will send you a secure link to reset your
                    password.</p>

                <!-- Form-->
                <form class="mt-4">
                    <div class="form-group">
                        <label for="forgot-password" class="form-label form-label-light">Email address</label>
                        <input type="email" class="form-control form-control-light" id="forgot-password" placeholder="name@email.com">
                    </div>
                    <button type="submit" class="btn btn-primary d-block w-100 my-4">Send Reset Link</button>
                </form>
                <!-- / Form-->

            </div>
        </div>
        <!-- / Login Form-->

    </section>
    <!-- / Main Section-->
    @endsection