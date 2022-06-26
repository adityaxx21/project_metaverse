<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ URL::asset('img/favicon.png') }}">
    <title>
        Soft UI Dashboard by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ URL::asset('css/adminpage/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/adminpage/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ URL::asset('css/adminpage/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ URL::asset('css/adminpage/soft-ui-dashboard.css?v=1.0.6') }}" rel="stylesheet" />
</head>

<body class="bg-gray-100 index-page">
    <div class="container position-sticky z-index-sticky top-0">
        <!-- navBar menu -->
        <div class="row">
            <div class="col-12">
                <nav
                    class="navbar navbar-expand-lg  blur blur-rounded top-0 z-index-fixed shadow position-absolute my-4 py-2 start-0 end-0">
                    <div class="container-fluid">
                        <a class="navbar-brand font-weight-bolder text-info text-gradient" href="/"
                            rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom"
                            target="">
                            Metaverse Land
                        </a>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon mt-2">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                            <ul class="navbar-nav navbar-nav-hover ms-lg-9 ps-lg-5 w-100">
                                <li class="nav-item mx-2">
                                    <a href="/"
                                        class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center {{ (Route::currentroutename() == 'home') ? 'text-primary text-gradient font-weight-bolder' : '' }}">
                                        Home 
                                    </a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a href="shop"
                                        class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center  {{ (Route::currentroutename() == 'shop') ? 'text-primary text-gradient font-weight-bolder' : '' }}  ">
                                        Shop
                                    </a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a href="contactUs"
                                        class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center  {{ (Route::currentroutename() == 'contactUs') ? 'text-primary text-gradient font-weight-bolder' : '' }}">
                                        Contact Us
                                    </a>
                                </li>
                                <li class="nav-item dropdown dropdown-hover mx-2">
                                    <a role="button"
                                        class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center  {{ Route::currentroutename() == 'profile' || Route::currentroutename() == 'faq' ? 'text-primary text-gradient font-weight-bolder' : '' }}"
                                        id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                                        Account
                                        <img src="{{ URL::asset('img/down-arrow-dark.svg') }}" alt="down-arrow"
                                            class="arrow ms-1">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-animation mt-0 mt-lg-3 p-3 border-radius-lg"
                                        aria-labelledby="dropdownMenuDocs">
                                        <div class="d-none d-lg-block">
                                            <ul class="list-group">
                                                <li class="nav-item list-group-item border-0 p-0">
                                                    <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                        href="profile">
                                                        <div class="d-flex">
                                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                                <svg class="text-secondary" width="16px"
                                                                    height="16px" viewBox="0 0 46 42" version="1.1"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                    <title>customer-support</title>
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <g transform="translate(-1717.000000, -291.000000)"
                                                                            fill="#FFFFFF" fill-rule="nonzero">
                                                                            <g
                                                                                transform="translate(1716.000000, 291.000000)">
                                                                                <g
                                                                                    transform="translate(1.000000, 0.000000)">
                                                                                    <path class="color-background"
                                                                                        d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"
                                                                                        opacity="0.59858631"></path>
                                                                                    <path class="color-background"
                                                                                        d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z">
                                                                                    </path>
                                                                                    <path class="color-background"
                                                                                        d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z">
                                                                                    </path>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <h6
                                                                    class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                    Profile</h6>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item list-group-item border-0 p-0">
                                                    <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                        href="faq">
                                                        <div class="d-flex">
                                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                                <svg class="text-secondary" width="16px"
                                                                    height="16px" viewBox="0 0 42 42" version="1.1"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                    <title>box-3d-50</title>
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <g transform="translate(-2319.000000, -291.000000)"
                                                                            fill="#FFFFFF" fill-rule="nonzero">
                                                                            <g
                                                                                transform="translate(1716.000000, 291.000000)">
                                                                                <g
                                                                                    transform="translate(603.000000, 0.000000)">
                                                                                    <path class="color-background"
                                                                                        d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z">
                                                                                    </path>
                                                                                    <path class="color-background"
                                                                                        d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"
                                                                                        opacity="0.7"></path>
                                                                                    <path class="color-background"
                                                                                        d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"
                                                                                        opacity="0.7"></path>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <h6
                                                                    class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                    FAQ's</h6>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item list-group-item border-0 p-0">
                                                    <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                        href="logout">
                                                        <div class="d-flex">
                                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                                <svg class="text-secondary" width="16px"
                                                                    height="16px" viewBox="0 0 45 40" version="1.1"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                    <title>shop </title>
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <g transform="translate(-1716.000000, -439.000000)"
                                                                            fill="#FFFFFF" fill-rule="nonzero">
                                                                            <g
                                                                                transform="translate(1716.000000, 291.000000)">
                                                                                <g
                                                                                    transform="translate(0.000000, 148.000000)">
                                                                                    <path class="color-background"
                                                                                        d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"
                                                                                        opacity="0.598981585"></path>
                                                                                    <path class="color-background"
                                                                                        d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                                                                                    </path>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <h6
                                                                    class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                    Logout</h6>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="row d-lg-none">
                                            <div class="col-md-12 g-0">
                                                <ul class="list-group">
                                                    <li class="nav-item list-group-item border-0 p-0">
                                                        <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                            href="https://soft-ui.creative-tim.com/profile/account">
                                                            <div class="d-flex">
                                                                <div class="icon h-10 me-3 d-flex mt-1">
                                                                    <svg class="text-secondary" width="16px"
                                                                        height="16px" viewBox="0 0 46 42"
                                                                        version="1.1"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                        <title>customer-support</title>
                                                                        <g stroke="none" stroke-width="1"
                                                                            fill="none" fill-rule="evenodd">
                                                                            <g transform="translate(-1717.000000, -291.000000)"
                                                                                fill="#FFFFFF" fill-rule="nonzero">
                                                                                <g
                                                                                    transform="translate(1716.000000, 291.000000)">
                                                                                    <g
                                                                                        transform="translate(1.000000, 0.000000)">
                                                                                        <path class="color-background"
                                                                                            d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"
                                                                                            opacity="0.59858631">
                                                                                        </path>
                                                                                        <path class="color-background"
                                                                                            d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z">
                                                                                        </path>
                                                                                        <path class="color-background"
                                                                                            d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z">
                                                                                        </path>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                                <div>
                                                                    <h6
                                                                        class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                        Profile</h6>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item list-group-item border-0 p-0">
                                                        <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                            href="https://soft-ui.creative-tim.com/profile/projects">
                                                            <div class="d-flex">
                                                                <div class="icon h-10 me-3 d-flex mt-1">
                                                                    <svg class="text-secondary" width="16px"
                                                                        height="16px" viewBox="0 0 42 42"
                                                                        version="1.1"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                        <title>box-3d-50</title>
                                                                        <g stroke="none" stroke-width="1"
                                                                            fill="none" fill-rule="evenodd">
                                                                            <g transform="translate(-2319.000000, -291.000000)"
                                                                                fill="#FFFFFF" fill-rule="nonzero">
                                                                                <g
                                                                                    transform="translate(1716.000000, 291.000000)">
                                                                                    <g
                                                                                        transform="translate(603.000000, 0.000000)">
                                                                                        <path class="color-background"
                                                                                            d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z">
                                                                                        </path>
                                                                                        <path class="color-background"
                                                                                            d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"
                                                                                            opacity="0.7"></path>
                                                                                        <path class="color-background"
                                                                                            d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"
                                                                                            opacity="0.7"></path>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                                <div>
                                                                    <h6
                                                                        class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                        My Projects</h6>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item list-group-item border-0 p-0">
                                                        <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                            href="https://soft-ui.creative-tim.com/profile/purchases">
                                                            <div class="d-flex">
                                                                <div class="icon h-10 me-3 d-flex mt-1">
                                                                    <svg class="text-secondary" width="16px"
                                                                        height="16px" viewBox="0 0 45 40"
                                                                        version="1.1"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                        <title>shop </title>
                                                                        <g stroke="none" stroke-width="1"
                                                                            fill="none" fill-rule="evenodd">
                                                                            <g transform="translate(-1716.000000, -439.000000)"
                                                                                fill="#FFFFFF" fill-rule="nonzero">
                                                                                <g
                                                                                    transform="translate(1716.000000, 291.000000)">
                                                                                    <g
                                                                                        transform="translate(0.000000, 148.000000)">
                                                                                        <path class="color-background"
                                                                                            d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"
                                                                                            opacity="0.598981585">
                                                                                        </path>
                                                                                        <path class="color-background"
                                                                                            d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                                                                                        </path>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                                <div>
                                                                    <h6
                                                                        class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                        Purchases</h6>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item my-auto ms-3 ms-auto">
                                    <a href="shop"
                                        class="btn btn-sm  bg-gradient-primary  btn-round mb-0 me-1 mt-2 mt-md-0">Shop
                                        now!</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

            </div>
        </div>
    </div>
{{-- content --}}
@yield('content')
{{-- end content --}}
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
