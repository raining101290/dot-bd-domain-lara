@extends('layouts.master')

@section('content')

    <section class="py-100 bg-gradient-primary d-table w-100">
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="pages-heading">
                        <h4 class="title mt-4 text-white"> Login </h4>
                    </div>
                </div> 
            </div>
        </div> 
        <div class="container">
            <div class="row pt-3 justify-content-center">
                <div class="col-6">
                    <div id="loginAlert"></div> 
                    <div class="card shadow rounded border-0">
                        <div class="card-body">
                            <form id="loginForm">
                                @csrf
                                <div class="row">
                                    <div class="mb-20">
                                        <div class="mb-3">
                                            <label for="username" class="form-label text-muted">Username <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <input id="username" type="text" class="form-control" placeholder="Username" name="username" required autocomplete="on"/>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="password"  class="form-label text-muted">Password <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <input id="password" required type="password" class="form-control" placeholder="Password" name="password" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" name="flexcheckboxDefault" id="flexcheckboxDefault1">
                                                <label class="form-check-label" for="flexcheckboxDefault1">Remember me</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <a href="">Forgot password?</a>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary mt-3 mb-3"> Login </button>
                                    <p>Dont't have an account? <a href="{{ route('customer.register') }}"> Register</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>
    <script>
        $(document).ready(function() {
            // Focus on the username field when the document is ready
            if (localStorage.getItem("token")) {
                window.location.href = "/customer/dashboard";
            }
            $('#loginForm').submit(function (e) {
                e.preventDefault();

                let username = $('#username').val();
                let password = $('#password').val();

                $.ajax({
                    url: "http://127.0.0.1:8001/api/customer/login",
                    type: "POST",
                    dataType: "json",
                    contentType: "application/json",
                    data: JSON.stringify({
                        email: username,
                        password: password
                    }),
                    success: function (response) {
                        if (response.success) {
                            // ✅ Store token
                            localStorage.setItem("token", response.token);
                            localStorage.setItem("user", JSON.stringify(response.user));

                            // ✅ Success banner
                            $('#loginAlert').html(`
                                <div class="alert alert-success">Login successful! Redirecting...</div>
                            `);

                            // ✅ Redirect after delay
                            setTimeout(() => {
                                window.location.href = "/customer/dashboard";
                            }, 1000);
                        }
                    },
                    error: function (xhr) {
                        let msg = "Something went wrong";

                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            msg = xhr.responseJSON.message;
                        }

                        $('#loginAlert').html(`
                            <div class="alert alert-danger">${msg}</div>
                        `);
                    }
                });
            });
        });
    </script>
@endsection