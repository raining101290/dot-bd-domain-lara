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
    <body class="font-sans antialiased">
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
        <div class="page-wrapper toggled">
            <nav id="sidebar" class="sidebar-wrapper sidebar-light">
                <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
                    <div class="sidebar-brand">
                        <a href="/">
                            <img src="/backend/assets/images/logo.png" width="60%" class="logo-light-mode" alt="">
                            <img src="/backend/assets/images/logo.png" width="60%" class="logo-dark-mode" alt="">
                            <span class="sidebar-colored">
                                <img src="/backend/assets/images/logo.png" width="60%" alt="">
                            </span>
                        </a>
                    </div>
        
                    <ul class="sidebar-menu">
                        <li>
                            <a href="{{ route('dashboard') }}"><i class="ti ti-home me-2"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href=""><i class="ti ti-user me-2"></i>User Info</a>
                        </li>
                        <li>
                            <a href=""><i class="ti ti-world me-2"></i>My Domains</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="page-content bg-light">
                <div class="top-header">
                    <div class="header-bar d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <a href="#" class="logo-icon me-3">
                                <img src="/backend/assets/images/logo.png" class="small" alt="" />
                                <span class="big">
                                    <img src="/backend/assets/images/logo.png" class="logo-light-mode" alt="" />
                                    <img src="/backend/assets/images/logo.png" class="logo-dark-mode" alt="" />
                                </span>
                            </a>
                            <a id="close-sidebar" class="btn btn-icon btn-soft-light" href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </div>

                        <ul class="list-unstyled mb-0">
                            <li class="list-inline-item mb-0 ms-1">
                                <div class="dropdown dropdown-primary">
                                    <button type="button" class="btn btn-soft-light dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/backend/assets/images/client/imran-gray.jpeg" class="avatar avatar-ex-small rounded" alt=""></button>
                                    <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3" style="min-width: 200px;">
                                        <x-dropdown-link :href="route('profile.edit')">
                                            <span class="mb-0 d-inline-block me-1"><i class="ti ti-user"></i></span> {{ __('Profile') }}
                                        </x-dropdown-link>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                <span class="mb-0 d-inline-block me-1"><i class="ti ti-logout"></i></span> {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="layout-specing">
                        {{-- <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h6 class="text-muted mb-1">Welcome back, {{ Auth::user()->name }}</h6>
                                <h5 class="mb-0">Dashboard</h5>
                            </div>
                        </div> --}}
                        
                        {{ $slot }}
                        
                    </div>
                </div>

                
                <footer class="shadow py-3">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="text-sm-start text-center mx-md-2">
                                    <p class="mb-0 text-muted">© <script>document.write(new Date().getFullYear())</script> Domain Desk.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </main>
        </div>
        {{-- <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div> --}}
    </body>
    <script src="/assets/js/jquery-3.6.0.min.js"></script>
    <script src="/backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/backend/assets/libs/feather-icons/feather.min.js"></script>
    <script src="/backend/assets/js/plugins.init.js"></script>
    <script src="/backend/assets/js/app.js"></script>
</html>
