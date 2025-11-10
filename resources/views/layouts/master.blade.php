<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('common.head')
    <body>
        @include('common.headermenu')
        @yield('content')
        @include('common.footer')
    </body>
    <script type="text/javascript">
    $(document).ready(function() {
        let token = localStorage.getItem("token");
        if (token) {
            $(".auth-links").html(`
                <li class="list-inline-item mb-0">
                    <a href="/customer/dashboard">
                        <div class="btn btn-success btn-sm"> Dashboard</div>
                    </a>
                </li>
            `);
        }
    });
    </script>
</html>