<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('common.head')
    <body>
        @include('common.headermenu')
        @yield('content')
        @include('common.footer')
    </body>
</html>