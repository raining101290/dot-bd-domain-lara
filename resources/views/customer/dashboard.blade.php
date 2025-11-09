@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <h1>Welcome to Your Dashboard</h1>
        <p>This is the customer dashboard page.</p>
        <button id="logoutBtn" class="btn btn-danger">Logout</button>
    </div>
    <script type="text/javascript">
    $('#logoutBtn').click(function () {
        let token = localStorage.getItem("token");

        $.ajax({
            url: "http://127.0.0.1:8001/api/customer/logout",
            type: "POST",
            headers: {
                "Authorization": "Bearer " + token
            },
            success: function (response) {
                // ✅ clear local storage
                localStorage.removeItem("token");
                localStorage.removeItem("user");

                // ✅ redirect to login
                window.location.href = "/customer/login";
            },
            error: function () {
                // Even if token invalid, force logout on frontend
                localStorage.removeItem("token");
                localStorage.removeItem("user");
                window.location.href = "/customer/login";
            }
        });
    });
    </script>
@endsection