@extends('layouts.app')
@section('content')

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Background Image Section -->
<x-background_home_image image="assets/images/space1.webp">
    <div class="container">
        <div class="row justify-content-md-left align-items-center">
            <div class="col-12 col-md-11 col-lg-9 col-xl-8 col-xxl-7 text-left">
                <h2 class="display-1 text-white fw-bold mb-3" style="font-family: 'Beasigne', sans-serif; animation: fadeInUp 1s ease; font-size: 50px">
                Dream.<br> Innovate.<br> Conquer.
                </h2>
                <p class="lead text-white mb-5 d-flex justify-content-sm-left" style="font-family: 'Nerd-font'; font-size: 1.1rem; animation: fadeInUp 1.2s ease;">
                    <span class="col-12 col-sm-10 col-md-8 col-xxl-7" style="font-style: italic;">
                    "Remember to look up at the stars and not down at your feet. Try to make sense of what you see, and wonder about what makes the universe exist. Be curious.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-Stephen Hawking"
                    </span>
                </p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-left">
                    <button type="button" onclick="$('.about_us')[0].focus()" class="btn btn-outline-light btn-lg rounded-pill shadow-lg hover-scale animate__animated animate__pulse">Get Started</button>
                </div>
            </div>
        </div>
    </div>
</x-background_home_image>

<div class="container mt-5 d-flex flex-wrap justify-content-center gap-4">
    <!-- Mission Box -->
    <div class="mv_container container mission-box col-12 col-md-5" data-aos="fade-up">
        <h2 class="title pumpkin">>OUR MISSION</h2>
        <p class="text" style="font-family: 'Nerd-font';">
            To push the boundaries of human knowledge, inspire the next generation of space pioneers, and explore the infinite cosmos through innovation and collaboration.
        </p>
    </div>
    <!-- Vision Box -->
    <div class="mv_container container vision-box col-12 col-md-5" data-aos="fade-up">
        <h2 class="title pumpkin">>OUR VISION</h2>
        <p class="text" style="font-family: 'Nerd-font';">
            A future where humanity thrives beyond Earth, harnessing the power of space technology to unlock new frontiers and redefine our place in the universe.
        </p>
    </div>

    <!-- About IEEE SB GECW Section -->
    <div class="container mt-5 about_us" tabindex="0" data-aos="fade-up">
        <div class="row align-items-center">
            <!-- Left Content Section -->
            <div class="col-md-6 order-2 order-md-1">
                <div class="content aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
                    <h2 class="mb-4 title" style="font-family: 'Beasigne', sans-serif; font-size: 1.8rem; font-weight: bold; letter-spacing: 1px; animation: fadeInUp 1s ease;">
                        About Us
                    </h2>
                    <p class="" style="font-family: 'Nerd-font'; text-align: justify; line-height: 1.8; font-size: 1.1rem; color:rgba(211, 211, 211, 0.97); animation: fadeInUp 1.2s ease;">
                        Welcome to the GECW Space Club, ORION, where innovation, exploration, and a passion for the universe come together!
                        We are a student-led organization dedicated to expanding knowledge and enthusiasm for space exploration, astronomy, and aerospace technology.
                        Our goal is to inspire and equip students with the skills and experience needed to engage with the space industry through hands-on projects, research, and collaborations.
                    </p>
                </div>
            </div>
            <!-- Right Image Section -->
            <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
                <div class="img-box text-center">
                    <img src="" class="img-fluid rounded shadow-lg" alt="ORION GECW" style="max-width: 100%; height: auto; transition: transform 0.3s;" data-aos="zoom-in" data-aos-delay="100">
                </div>
            </div>
        </div>
    </div>

    <!-- Propose an Event Section -->
    <div style="background: rgba(255, 255, 255, 0.1); 
                backdrop-filter: blur(8px); 
                -webkit-backdrop-filter: blur(8px); 
                border-radius: 10px; 
                padding: 5px;
                margin-bottom: 15; 
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);">
        <div class="container mt-4git row">
            <!-- Left Content (Description) -->
            <div class="col-lg-8">
                <div>
                    <h3 class="title mt-4" style="font-family: 'Beasigne', sans-serif; font-size: 1.8rem; font-weight: bold; letter-spacing: 1px; animation: fadeInUp 1s ease;">
                        Propose an Event
                    </h3>
                    <p class="mb-4" style="font-family: 'Nerd-font'; font-size: 1.2rem; line-height: 1.8; animation: fadeInUp 1.2s ease; color: rgb(255, 255, 255);">
                        Have a brilliant idea for an event? Share it with us! We value your creativity and enthusiasm in making a difference.
                        Let’s work together to bring your vision to life.
                    </p>
                </div>
            </div>

            <!-- Right Content (Button) -->
            <div class="col-lg-4 d-flex justify-content-end align-items-center">
                <form action="{{ route('eventProposal.index') }}" method="GET">
                    <button type="submit"
                        class="btn btn-lg shadow-lg propose-btn"
                        style="font-family: 'Nerd-font'; color: white; animation: fadeInUp 1.3s ease;">
                        Propose Now
                    </button>
                </form>
            </div>


        </div>

    </div>
</div>


<!-- Footer Section -->
@include('layouts.footer')

@endsection


<style>
    .mission-box p,
    .vision-box p,
    .mission-box h2,
    .vision-box h2 {
        color: #f8f9fa !important;
        /* Use a lighter shade */
    }

    body {
        background-color: rgb(46, 33, 33);
        color: #fff;
        font-family: 'Orbitron', sans-serif;
        text-align: center;
        padding: 50px;
    }

    .mission-vision {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        max-width: 1000px;
        margin: auto;
    }

    .mv_container {
        background: rgb(0, 0, 0);
        opacity: 0.7;
        backdrop-filter: blur(10px);
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgb(255, 254, 171);
        transition: transform 0.3s;
        text-align: left;
    }

    /* .mv_container:hover {
        transform: scale(1.05);
    } */

    .text {
        font-size: 1.2rem;
        line-height: 1.6;
        color: #bbb;
    }


    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .hover-scale:hover {
        transform: scale(1.1);
        transition: transform 0.3s ease-in-out;
    }

    /* //propose button hover effect */

    /* Button Hover Effect */
    
    /* Animation Keyframes */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(-20px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
</style>





<script>
    AOS.init({
        duration: 1000, // Animation duration (1 second)
        once: true // Ensures animations run only once
    });


    $(document).ready(function() {
        $(window).on("scroll", function() {
            let scrollTop = $(window).scrollTop();
            let fadeStart = 100; // Start fading in at 100px
            let fadeEnd = 600; // Fully visible at 600px
            let opacity = 1 - (scrollTop - fadeStart) / (fadeEnd - fadeStart);
            let blurValue = (scrollTop / fadeEnd) * 10; // Increase blur effect

            if (opacity < 0) opacity = 0;
            if (opacity > 1) opacity = 1;
            if (blurValue > 10) blurValue = 10; // Limit blur intensity
        });
    });
</script>