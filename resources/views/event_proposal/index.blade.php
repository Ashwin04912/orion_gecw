@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-3">
    <!-- success and error message code -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    <!-- Loading Spinner -->
    <div id="loading-bar" class="text-center" style="display: none; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 9999;">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <!-- Form Section -->
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-lg rounded-3 p-5" style="background:rgba(255, 255, 255, 0.11);">
                <h3 class="text-primary text-center mb-4" style="font-family: 'Beasigne', sans-serif;color:white !important; font-weight: bold;">
                    Propose Your Event
                </h3>
                <p class="text-center text-muted mb-4" style="font-family: 'Nerd-font'; font-size: 1.1rem;color:white !important; font-weight: 500;">
                    Have an exciting idea for an event? Fill out the form below and share it with us!
                </p>

                <!-- Form Start -->
                <form id="eventForm" action="{{ route('eventProposal.sentmail') }}" method="POST">
                    @csrf
                    <!-- Personal Details Section -->
                    <h5 class="text-primary" style="font-family: Nerd-font; color:red !important">Personal Details</h5>
                    <hr class="my-3">

                    <!-- Name -->
                    <div class="mb-4">
                        <label for="name" class="form-label text-light" style="font-family: Nerd-font; font-weight: bold;">Your Name</label>
                        <input type="text" class="form-control" id="box" name="name" placeholder="Enter your name" required>
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="form-label text-dark" style="font-family: Nerd-font; color:white !important;font-weight: bold;">Email Address</label>
                        <input type="email" class="form-control" id="box" name="email" placeholder="Enter your email" required>
                    </div>

                    <!-- Phone Number -->
                    <div class="mb-4">
                        <label for="phone" class="form-label text-dark" style="font-family: Nerd-font; color:white !important; font-weight: bold;">Phone Number</label>
                        <input type="tel" class="form-control" id="box" name="phone" placeholder="Enter your phone number" required>
                    </div>

                    <!-- Event Details Section -->
                    <h5 class="text-primary" style="font-family: Nerd-font; color:red !important;">Event Details</h5>
                    <hr class="my-3">

                    <!-- Event Name -->
                    <!-- <div class="mb-4">
                        <label for="event-name" class="form-label text-dark" style="font-weight: bold;">Event Name</label>
                        <input type="text" class="form-control" id="event-name" name="event_name" placeholder="Enter the event name" required>
                    </div> -->

                    <!-- Event Description -->
                    <div class="mb-4">
                        <label for="event-description" class="form-label text-dark" style="font-family: Nerd-font; color:white !important; font-weight: bold;">Event Description</label>
                        <textarea class="form-control" id="box" name="event_description" rows="4" placeholder="Describe your event idea" required></textarea>
                    </div>

                    <!-- Expected Audience -->
                    <div class="mb-4">
                        <label for="audience" class="form-label text-dark" style="font-family: Nerd-font; color:white !important; font-weight: bold;">Expected Audience</label>
                        <select class="form-select" id="box" name="audience" required>
                            <option value="">Select audience type</option>
                            <option value="students">Students</option>
                            <option value="professionals">Faculties</option>
                            <option value="both">Both</option>
                        </select>
                    </div>

                    <!-- Resource person -->
                    <div class="mb-4">
                        <label for="res_person" class="form-label text-dark" style="font-family: Nerd-font; color:white !important; font-weight: bold;">Do you have a Resource Person</label>
                        <select class="form-select" id="box" name="res_person" required>
                            <option value="">Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            <!-- <option value="both">Both</option> -->
                        </select>
                    </div>

                    <!-- Expected Audience Count -->
                    <div class="mb-4">
                        <label for="budget" class="form-label text-dark" style="font-family: Nerd-font; color:white !important; font-weight: bold;">Expected Audience Count</label>
                        <input type="number" class="form-control" id="box" name="audience_count" placeholder="Expected participants" required>
                    </div>

                    <!-- Additional Notes -->
                    <div class="mb-4">
                        <label for="notes" class="form-label text-dark" style="font-family: Nerd-font; color:white !important; font-weight: bold;">Additional Notes</label>
                        <textarea class="form-control" id="box" name="notes" rows="4" placeholder="Any additional details or notes"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-lg propose-btn shadow-lg" style="font-family: 'Nerd-font'; color: white; animation: fadeInUp 1.3s ease;">
                            Submit Event Idea
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')

@endsection

<style>
    /* Custom styling for the loading spinner */
    #loading-bar {
        width: 100%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 9999;
    }

    #box {
        background-color: black;
        color: white;
        border: 1px solid white;
    }

    #box::placeholder {
        color: white;
        opacity: 0.6;
        /* Ensures full visibility */
    }
</style>


<script>
    const eventProposalUrl = "{{ route('eventProposal.sentmail') }}";
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('eventForm');

        if (form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                console.log("Form submission started."); // Debugging statement

                // Show the loading spinner
                document.getElementById('loading-bar').style.display = 'block';

                // Disable the submit button to prevent multiple submissions
                document.querySelector('button[type="submit"]').disabled = true;

                // Create a FormData object to send the form data
                const formData = Object.fromEntries(new FormData(this));
                fetch(eventProposalUrl, {
                        method: "POST",
                        body: JSON.stringify(formData),
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        }
                    })
                    .then(response => response.json()) // Parse the response as JSON
                    .then(data => {
                        // Hide the loading spinner
                        document.getElementById('loading-bar').style.display = 'none';
                        console.log("Response received."); // Debugging statement

                        // Re-enable the submit button
                        document.querySelector('button[type="submit"]').disabled = false;

                        // Handle success or error
                        if (data.success) {
                            alert(data.message); // Show success message
                            window.location.href = '/';
                            // location.reload(); // Reload the page to show the success message
                        } else {
                            alert(data.error); // Show error message
                        }
                    })
                    .catch(error => {
                        // Hide the loading spinner and re-enable the submit button in case of an error
                        document.getElementById('loading-bar').style.display = 'none';
                        document.querySelector('button[type="submit"]').disabled = false;
                        alert('An error occurred, please try again later.');
                    });
            });
        } else {
            console.error("Form element not found.");
        }
    });
</script>
<!-- <script src="{{asset('assets/js/eventProposal.js')}}"></script> -->