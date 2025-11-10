<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('customer.common.head')
    <body>
        @yield('content')
        @include('customer.common.footer')
    </body>
    <script type="text/javascript">
        $(document).ready(function() {
            const token = localStorage.getItem("token");

            if (!token) {
                window.location.href = "/customer/login";
            }
        });
    </script>
    <script type="text/javascript">
        $('#logoutBtn').click(function() {
            let token = localStorage.getItem("token");

            $.ajax({
                url: "http://127.0.0.1:8001/api/customer/logout",
                type: "POST",
                headers: {
                    "Authorization": "Bearer " + token
                },
                success: function(response) {
                    // ✅ clear local storage
                    localStorage.removeItem("token");
                    localStorage.removeItem("user");

                    // ✅ redirect to login
                    window.location.href = "/customer/login";
                },
                error: function() {
                    // Even if token invalid, force logout on frontend
                    localStorage.removeItem("token");
                    localStorage.removeItem("user");
                    window.location.href = "/customer/login";
                }
            });
        });
    </script>
</html>