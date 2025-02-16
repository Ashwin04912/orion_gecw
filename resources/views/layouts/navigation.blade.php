<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/navigation.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/heroes/hero-5/assets/css/hero-5.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <title>orion_gecw</title>
</head>

<body data-route-name="{{ Route::currentRouteName() }}">

    <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
        <div class="container-fluid ScrollCss pt-3" id="ScrollJq">
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
                <img src="{{ asset('assets/images/logo.jpeg') }}" alt="Logo" width="80" height="80" class="rounded-circle">
                <div class="d-flex flex-column">
                    <h1 class="fs-1 fw-bold text-white text-uppercase m-0">Orion</h1>
                    <p class="fs-6 text-white m-0">GOVT ENGINEERING COLLEGE, WAYANAD</p>
                </div>
            </a>


            <button class="navbar-toggler m-4" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="1.5em" height="1.5em"
                        viewBox="0 0 48 48">
                        <linearGradient id="ULyvxr9k_jV3hToEf4Ujga_6uJdcB0tVRwZ_gr1" x1="12.066" x2="34.891"
                            y1=".066" y2="22.891" gradientUnits="userSpaceOnUse">
                            <stop offset=".237" stop-color="#3bc9f3"></stop>
                            <stop offset=".85" stop-color="#1591d8"></stop>
                        </linearGradient>
                        <path fill="url(#ULyvxr9k_jV3hToEf4Ujga_6uJdcB0tVRwZ_gr1)"
                            d="M43,15H5c-1.1,0-2-0.9-2-2v-2c0-1.1,0.9-2,2-2h38c1.1,0,2,0.9,2,2v2C45,14.1,44.1,15,43,15z">
                        </path>
                        <linearGradient id="ULyvxr9k_jV3hToEf4Ujgb_6uJdcB0tVRwZ_gr2" x1="12.066" x2="34.891"
                            y1="12.066" y2="34.891" gradientUnits="userSpaceOnUse">
                            <stop offset=".237" stop-color="#3bc9f3"></stop>
                            <stop offset=".85" stop-color="#1591d8"></stop>
                        </linearGradient>
                        <path fill="url(#ULyvxr9k_jV3hToEf4Ujgb_6uJdcB0tVRwZ_gr2)"
                            d="M43,27H5c-1.1,0-2-0.9-2-2v-2c0-1.1,0.9-2,2-2h38c1.1,0,2,0.9,2,2v2C45,26.1,44.1,27,43,27z">
                        </path>
                        <linearGradient id="ULyvxr9k_jV3hToEf4Ujgc_6uJdcB0tVRwZ_gr3" x1="12.066" x2="34.891"
                            y1="24.066" y2="46.891" gradientUnits="userSpaceOnUse">
                            <stop offset=".237" stop-color="#3bc9f3"></stop>
                            <stop offset=".85" stop-color="#1591d8"></stop>
                        </linearGradient>
                        <path fill="url(#ULyvxr9k_jV3hToEf4Ujgc_6uJdcB0tVRwZ_gr3)"
                            d="M43,39H5c-1.1,0-2-0.9-2-2v-2c0-1.1,0.9-2,2-2h38c1.1,0,2,0.9,2,2v2C45,38.1,44.1,39,43,39z">
                        </path>
                    </svg>
                </span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel" style="background-color: transparent">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">IEEE SB GECW</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"
                        style="background-color: red"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav ms-auto me-4">
                        <li class="nav-item {{ Route::currentRouteName() == 'home' ? 'selected' : '' }}">
                            <a class="nav-link active text-light" aria-current="page" href="{{ route('home') }}"><span class="name">Home</span></a>
                        </li>
                        <!-- <li class="nav-item {{ Route::currentRouteName() == 'about.us' ? 'selected' : '' }}">
                            <a class="nav-link text-light" onclick="$('.about_us')[0].focus()" href="#">About
                                Us</a>
                        </li> -->
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light d-flex align-items-center {{ in_array(Route::currentRouteName(), ['computer.index', 'wie.index', 'aps.index', 'mtts.index', 'sight.index']) ? 'selected' : '' }}"
                                href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false">
                                <span class="name">Societies</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item {{ Route::currentRouteName() == 'computer.index' ? 'selected' : '' }}" href="{{route('computer.index')}}">Computer Society</a></li>
                                <li><a class="dropdown-item {{ Route::currentRouteName() == 'wie.index' ? 'selected' : '' }}" href="{{route('wie.index')}}">Women In Engineering</a></li>
                                <li><a class="dropdown-item {{ Route::currentRouteName() == 'aps.index' ? 'selected' : '' }}" href="{{route('aps.index')}}">Antennas and Propagation Society</a></li>
                                <li><a class="dropdown-item {{ Route::currentRouteName() == 'mtts.index' ? 'selected' : '' }}" href="{{route('mtts.index')}}">Microwave Theory and Technology Society</a></li>
                                <li><a class="dropdown-item {{ Route::currentRouteName() == 'sight.index' ? 'selected' : '' }}" href="{{route('sight.index')}}">Sight</a></li>
                            </ul>
                        </li> -->
                        <li class="nav-item {{ Route::currentRouteName() == 'events.index' ? 'selected' : '' }}">
                            <a class="nav-link text-light" href="{{ route('events.index') }}"><span class="name">Events</span></a>
                        </li>

                        <li class="nav-item {{ Route::currentRouteName() == 'execom.index' ? 'selected' : '' }}">
                            <a class="nav-link text-light" onclick="" href="{{ route('execom.index') }}"><span class="name">Execom</span></a>
                        </li>

                        <!-- <li class="nav-item {{ Route::currentRouteName() == 'achievements' ? 'selected' : '' }}">
                            <a class="nav-link text-light" href="{{ route('achievements') }}">Achievements</a>
                        </li> -->
                        <li class="nav-item {{ Route::currentRouteName() == 'gallery.index' ? 'selected' : '' }}">
                            <a class="nav-link text-light" href="{{ route('gallery.index') }}"><span class="name">Gallery</span></a>
                        </li>
                        <div class="pl-4" style="width: 30px"></div>
                        {{-- logout button --}}
                        @if (Route::is('dashboard'))
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}" class="m-0">
                                @csrf
                                <button type="submit" class="logout-button">
                                    {{ __('Log Out') }}
                                </button>
                            </form>
                        </li>
                        @endif


                    </ul>
                </div>
            </div>
        </div>
    </nav>

</body>