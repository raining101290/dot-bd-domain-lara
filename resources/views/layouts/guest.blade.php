<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'dot bd domain | Dashboard') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="Domain Desk" />

        <link rel="shortcut icon" href="/assets/images/icon.png">
        <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
        <link href="/backend/assets/libs/simplebar/simplebar.min.css" rel="stylesheet">
        <link href="/backend/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/backend/assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
        <link href="/backend/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="/backend/assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
        <link href="/backend/assets/css/style.min.css" rel="stylesheet" type="text/css" />
        <link href="/backend/assets/css/custom.css" rel="stylesheet" type="text/css" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <x-application-logo  />
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
    <script src="/assets/js/jquery-3.6.0.min.js"></script>
    <script src="/backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/backend/assets/libs/feather-icons/feather.min.js"></script>
    <script src="/backend/assets/js/plugins.init.js"></script>
    <script src="/backend/assets/js/app.js"></script>
</html>
