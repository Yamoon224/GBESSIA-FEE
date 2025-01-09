<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
        <meta name="author" content="Codedthemes" />

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="auth" content="{{ auth()->check() }}">
        <meta name="base-url" content="{{ config('app.url', 'GBESSIA-FEE-URL') }}">
        
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('public/favicon.ico') }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

		<!-- App css -->
        @stack('linkx')

		<link href="{{ asset('public/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

		<!-- icons -->
		<link href="{{ asset('public/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    </head>
    <body {!! auth()->check() ? 'class="loading" data-layout-color="light"  data-layout-mode="default" data-layout-size="fluid" data-topbar-color="light" data-leftbar-position="fixed" data-leftbar-color="light" data-leftbar-size="default" data-sidebar-user="true"' : 'class="loading authentication-bg authentication-bg-pattern"' !!}>
        @guest
        <div class="account-pages my-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="text-center">
                            <a href="{{ route('welcome') }}">
                                <img src="{{ asset('public/logo/without-bg.webp') }}" alt="" height="60" class="mx-auto">
                            </a>
                            <p class="text-muted my-2">{{ config('app.name', 'Laravel') }}</p>
                        </div>
                        <div class="card">
                            <div class="card-body p-4">
                                {{ $slot }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endguest

        @auth
            <!-- Begin page -->
            <div id="wrapper">
                <x-top-bar></x-top-bar>

                <x-left-side></x-left-side>

                <div class="content-page">
                    <div class="content">
    
                        <!-- Start Content-->
                        <div class="container-fluid">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>

            <x-right-bar></x-right-bar>
            <!-- Right bar overlay-->
            <div class="rightbar-overlay"></div>
        @endauth
        
        <!-- Vendor -->
        <script src="{{ asset('public/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('public/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('public/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('public/libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('public/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('public/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('public/libs/feather-icons/feather.min.js') }}"></script>
        
        @auth
            <script src="{{ asset('public/libs/jquery-knob/jquery.knob.min.js') }}"></script>

            <script src="{{ asset('public/libs/morris.js06/morris.min.js') }}"></script>
            <script src="{{ asset('public/libs/raphael/raphael.min.js') }}"></script>
    
            <script src="{{ asset('public/js/pages/dashboard.init.js') }}"></script>
        @endauth

        <!-- App js -->
        <script src="{{ asset('public/js/app.min.js') }}"></script>
        @stack('scriptx')
    </body>
</html>
