<!--
=========================================================
* Soft UI Dashboard - v1.0.6
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('storage/image/adminpage/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ URL::asset('storage/image/adminpage/favicon.png') }}">
    <title>
        Soft UI Dashboard by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Nucleo Icons -->
    <style>
        @font-face {
            font-family: 'NucleoIcons';
            src: url('{{ URL::asset('/font/adminpage/nucleo-icons.eot') }}');
            src: url('{{ URL::asset('/font/adminpage/nucleo-icons.eot') }}') format('embedded-opentype'), url('{{ URL::asset('/font/adminpage/nucleo-icons.woff2') }}') format('woff2'), url('{{ URL::asset('/font/adminpage/nucleo-icons.woff') }}') format('woff'), url('{{ URL::asset('/font/adminpage/nucleo-icons.ttf') }}') format('truetype'), url('{{ URL::asset('/font/adminpage/nucleo-icons.svg') }}') format('svg');
            font-weight: normal;
            font-style: normal;
        }
    </style>
    <link href="{{ URL::asset('css/adminpage/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/adminpage/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ URL::asset('css/adminpage/adnucleo-svg.css') }}/" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ URL::asset('css/adminpage/soft-ui-dashboard.css?v=1.0.6') }}" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
    {{-- Sidebar --}}
    @include('adminpage.dashboard_sidebar')
    {{-- end sidebar --}}
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">{{request()->route()->uri}}</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">{{$Page}}</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <ul class="navbar-nav  justify-content-end">
                      
                      <li class="nav-item d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                          <i class="fa fa-user me-sm-1" aria-hidden="true"></i>
                          <span class="d-sm-inline d-none">{{session()->get('username')}}</span>
                        </a>
                      </li>
                      
                      
                    </ul>  
                    </div>
                    
                  </div>
            </div>
        </nav>
        <!-- End Navbar -->
        {{-- main page --}}

        {{-- content --}}
        @yield('content')
        {{-- end content --}}
        <footer class="footer pt-3  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            made with <i class="fa fa-heart"></i> by
                            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative
                                Tim</a>
                            for a better web.
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com" class="nav-link text-muted"
                                    target="_blank">Creative Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                                    target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted"
                                    target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                                    target="_blank">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        </div>
    </main>
    {{-- End main dashboard --}}

    <!--   Core JS Files   -->
    <script src="{{ URL::asset('js/adminpage/core/popper.min.js') }}"></script>
    <script src="{{ URL::asset('js/adminpage/core/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/adminpage/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ URL::asset('js/adminpage/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ URL::asset('js/adminpage/plugins/chartjs.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ URL::asset('js/adminpage/soft-ui-dashboard.min.js?v=1.0.6') }}"></script>
    {{-- ajax --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</body>

</html>
