<footer class="bg-dark text-white pt-5 pb-3">
    <div class="container">
        <div class="row">
            <!-- About Section -->
            <div class="col-md-4">
                <h4 class="text-uppercase mb-4 d-flex align-items-center">
                    <i class="bi bi-info-circle-fill me-2"></i>About Us
                </h4>
                <p style="font-size: 16px; font-weight: 400; line-height: 1.6; text-align: justify; letter-spacing: 0.8px; margin: 0;">
                    The purpose of ORION GECW is to foster interest, knowledge, and participation in
                    space exploration and related fields among the students of Government Engineering
                    College Wayanad. The club aims to provide a platform for educational activities,
                    events, projects, and discussions related to space science and technology.
                </p>
            </div>

            <!-- Navigation Links -->
            <div class="col-md-4">
                <h4 class="text-uppercase mb-4"><i class="bi bi-link-45deg me-2"></i>Quick Links</h4>
                <ul class="list-unstyled fs-6">
                    <li class="mb-2"><i class="bi bi-house-door-fill me-2"></i><a href="{{route('home')}}" class="text-white text-decoration-none">Home</a></li>
                    <li class="mb-2"><i class="bi bi-info-square-fill me-2"></i><a href="{{route('home')}}" class="text-white text-decoration-none">About Us</a></li>
                    <li class="mb-2"><i class="bi bi-calendar2-event-fill me-2"></i><a href="{{route('events.index')}}" class="text-white text-decoration-none">Events</a></li>
                </ul>
            </div>

            <!-- Contact Section -->
            <div class="col-md-4">
                <h4 class="text-uppercase mb-4"><i class="bi bi-telephone-fill me-2"></i>Contact Us</h4>
                <ul class="list-unstyled fs-6">
                    <li class="mb-2"><i class="bi bi-envelope me-2"></i>ieeesbgecw@gmail.com</li>
                    <li class="mb-2"><i class="bi bi-phone me-2"></i>+123 456 7890</li>
                    <li class="mb-2"><i class="bi bi-geo-alt-fill me-2"></i> Thalappuzha, PO, Mananthavady, Kerala 670644</li>
                </ul>
                <div class="d-flex mt-3">
                    <a href="#" class="text-white fs-4 me-3"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white fs-4 me-3"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-white fs-4 me-3"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-white fs-4"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
        <hr class="bg-light mt-4">
        <div class="row">
            <div class="d-flex flex-column align-items-center">
                <p class="m-0 fs-6 text-white">
                    Made with <i class="bi bi-suit-heart-fill text-white"></i> by <strong>Ashwin & Jithin</strong>
                </p>
                <p class="m-0 fs-6 text-white">&copy; {{ date('Y') }} ORION GEC Wayanad. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

<style>
    footer {
        font-size: 12px;
        line-height: 1.8;
    }

    footer h4 {
        font-size: 18px;
    }

    footer .bi {
        font-size: 20px;
        color: rgb(255, 0, 0);
    }

    footer a:hover {
        text-decoration: underline;
        color: #00aaff;
    }

    footer hr {
        border-top: 1px solid rgba(255, 255, 255, 0.2);
    }

    footer .fs-4 {
        font-size: 24px;
    }

    /* Heart icon styling */
    .bi-suit-heart-fill {
        color: white;
        animation: heart-beat 1.5s infinite;
    }

    @keyframes heart-beat {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.2);
        }

        100% {
            transform: scale(1);
        }
    }
</style>
