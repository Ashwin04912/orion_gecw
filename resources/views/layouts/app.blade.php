<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'ieeesbgecw') }}</title> -->

    {{-- CSS IMPORTS (Optimized) --}}
    <!-- <link  href="{{ asset('assets/css/style.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"></noscript> -->

    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset('css/computer.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    {{-- Animation & Gallery --}}

    <link rel="stylesheet" href="{{ asset('assets/css/gallery.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">

    {{-- JavaScript Imports --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('assets/js/gallery.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Turbolinks Optimization -->
    <script src="{{ asset('js/turbolinks.js') }}"></script>
    <meta name="turbolinks-cache-control" content="no-preview">
    <script>
        Turbolinks.start();
    </script>

</head>

<body>

    <div class="container-scroller mt-0 p-0 stars">
        <div class="meteor" id="meteor"></div>
        @include('layouts.navigation')

        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                @yield('content')
            </div>
        </div>
    </div>

    <style>
        .heading {
            font-family: 'Beasigne';
            color: rgb(255, 255, 255);
            align-items: left;
            
        }

        .title {
            font-size: 2rem;
            text-transform: uppercase;
            color: white;
            text-shadow: 0 0 10px rgb(255, 254, 171);
        }

        @font-face {
            font-family: 'Beasigne';
            src: url('/assets/fonts/beasigne.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'popins';
            font-weight: normal;
            font-style: normal;
        }


        body {
            margin: 0;
            overflow-x: hidden;
            overflow-y: auto;
            background: black;
            height: 100vh;
        }

        .stars {
            background: url('https://www.transparenttextures.com/patterns/stardust.png');
            background-repeat: repeat;
            background-size: auto;
            z-index: -1;
            animation: starMove 200s linear infinite;
        }

        @keyframes starMove {
            from {
                background-position: 0 0;
            }

            to {
                background-position: -10000px 10000px;
            }
        }

        .pumpkin {
            font-family: 'Beasigne', sans-serif;
            font-size: 1.8rem;
            font-weight: bold;
            letter-spacing: 1px;
            animation: fadeInUp 1s ease;
        }

        .meteor {
            position: absolute;
            width: 6px;
            height: 100px;
            background: linear-gradient(transparent, white, transparent);
            transform: rotate(-45deg);
            opacity: 0;
            transition: opacity 0.5s;
        }

        @keyframes meteorMove {
            0% {
                top: -10%;
                left: 80%;
                opacity: 1;
            }

            100% {
                top: 100%;
                left: 0%;
                opacity: 0;
            }
        }

        .propose-btn {
            background: linear-gradient(90deg, rgb(255, 0, 0), rgba(255, 0, 0, 0.71));
            border: none;
            color: white;
            transition: all 0.3s ease-in-out;
            border-radius: 3px;
            /* Reduced from pill shape to slightly rounded */
            padding: 12px 24px;
            /* Keeps good proportions */
        }

        .propose-btn:hover {
            background-color:rgb(255, 73, 73);
            /* Change color on hover */
            transform: translateY(-5px);
            /* Move up slightly */
            box-shadow: 0 8px 12px rgba(255, 255, 255, 0.47);
            /* Increase shadow */
        }
    </style>

    <script>
        AOS.init();

        $(document).ready(function() {
            AOS.init({
                duration: 1200,
                easing: 'ease-in-out',
                once: true
            });

            window.addEventListener('load', function() {
                const preloader = document.getElementById('preloader');
                if (preloader) preloader.style.display = 'none';
            });
        });

        function spawnMeteor() {
            const meteor = document.createElement("div");
            meteor.classList.add("meteor");
            document.body.appendChild(meteor);
            meteor.style.top = '-10%';
            meteor.style.left = Math.random() * 80 + '%';
            meteor.style.opacity = '1';
            meteor.style.animation = 'meteorMove 2s linear';

            setTimeout(() => {
                meteor.remove();
            }, 2000);
        }

        setInterval(spawnMeteor, Math.random() * (180000 - 120000) + 120000);
    </script>

</body>

</html>