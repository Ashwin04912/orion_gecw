@extends('layouts.app')

@section('content')
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->
<!-- 
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> -->

<!-- Page Content -->

<div class="container pt-5">
    <h1 class="heading title fw-bold pt-5" style="font-family: 'Beasigne', sans-serif; animation: fadeInUp 1s ease; color: white;";>Gallery</h1>
  
    <hr>

    <div class="row mt-5">
        @php

        @endphp

        @foreach ($datas as $data)
            <div class="col-lg-3 col-md-6 col-xs-12 thumb">
                <a href="{{ asset('uploads/images/gallery/' . $data->image) }}" class="fancybox" rel="ligthbox">
                    <img src="{{ asset('uploads/images/gallery/' . $data->image) }}" class="zoom img-fluid" alt="Image">
                </a>
            </div>
        @endforeach
    </div>
</div>

<script src="{{asset('assets/js/gallery.js')}}"></script>
@include('layouts.footer')

@endsection
