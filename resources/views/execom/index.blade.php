@extends('layouts.app')

@section('content')
    <div class="container pt-5">
    <h2 class="fw-bold title pt-5 fs-4 fs-md-3 fs-lg-1" style="font-family: 'Beasigne', sans-serif;animation: fadeInUp 1s ease; color: white;";>Execom</h2>
            <hr>
            <div class="row justify-content-center pt-4">
                @foreach ($datas as $data)
                    <div class="col-lg-4 col-md-4 col-sm-6 d-flex justify-content-center mb-4">
                        <div class="profile-card text-center">
                            <img src="{{ asset('uploads/images/execoms/' . $data->image) }}" alt="Profile Image"
                                class="img-fluid">
                            <div class="card-body">
                                <h5 class="card-title">{{ $data->name }}</h5>
                                <p class="card-text">{{ $data->title }}</p>
                                <div class="social-icons d-flex justify-content-center">
                                    <a href="{{ $data->github }}"><i class="fab fa-github"></i></a>
                                    <a href="{{ $data->insta }}"><i class="fab fa-instagram"></i></a>
                                    <a href="{{ $data->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </div>

    @include('layouts.footer')
@endsection
