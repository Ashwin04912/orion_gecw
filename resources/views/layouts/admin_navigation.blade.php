<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/heroes/hero-5/assets/css/hero-5.css">
    <link rel="stylesheet" href="{{ asset('assets/css/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/execom.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body data-route-name="{{ Route::currentRouteName() }}">

    <nav class="navbar navbar-expand-lg " id="navbar">
        <div class="container-fluid ScrollCss" id="ScrollJq">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('assets/images/sb_logo.png') }}" alt="Logo" width="100" height="100"
                    class="d-inline-block align-text-top">
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
                aria-labelledby="offcanvasNavbarLabel" style="background-color: black">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">orion gecw</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"
                        style="background-color: red"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav ms-auto me-4">
                        <li class="nav-item {{ Route::currentRouteName() == 'dashboard' ? 'selected' : '' }}">
                            <a class="nav-link active text-light" aria-current="page"
                                href="{{ route('dashboard') }}">Home</a>
                        </li>
                        <!-- <li class="nav-item {{ Route::currentRouteName() == 'about.us' ? 'selected' : '' }}">
                            <a class="nav-link text-light" onclick="$('.about_us')[0].focus()" href="#">About
                                Us</a>
                        </li> -->

                        <li class="nav-item {{ Route::currentRouteName() == 'events.list' ? 'selected' : '' }}">
                            <a class="nav-link text-light" href="{{ route('events.list') }}">Events</a>
                        </li>

                        <li class="nav-item {{ Route::currentRouteName() == 'execom.list' ? 'selected' : '' }}">
                            <a class="nav-link text-light" onclick=""
                                href="{{ route('execom.list') }}">Execom</a>
                        </li>

                        <!-- <li class="nav-item {{ Route::currentRouteName() == 'achievements.list' ? 'selected' : '' }}">
                            <a class="nav-link text-light" href="{{ route('achievements.list') }}">Achievements</a>
                        </li> -->
                        <li class="nav-item {{ Route::currentRouteName() == 'gallery.list' ? 'selected' : '' }}">
                            <a class="nav-link text-light" href="{{ route('gallery.list') }}">Gallery</a>
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

    <script src="{{ asset('assets/js/navigation.js') }}"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/6.4.95/css/materialdesignicons.min.css">


</body>

</html>
