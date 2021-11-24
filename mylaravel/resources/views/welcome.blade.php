@extends('web.layouts.app')

@section('content')

@include('web.frangments.navbar')

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="img-content">
                <img src="web\assets\images\web-Development-Steps-1200x675.jpg" alt="">
                <div class="img-option">
                    <i style="font-size: 25px;" class="fa fa-user"></i>
                    <span>
                    <i class="fa fa-download"></i> 
                       <a href="{{route('post.name')}}"><i class="fa fa-play-circle-o"></i></a> 
                        <i class="fa fa-bars"></i>
                    </span>

                </div>
            </div>

        </div>

        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="img-content">
                <img src="web\assets\images\web-Development-Steps-1200x675.jpg" alt="">
                <div class="img-option">
                    <i style="font-size: 25px;" class="fa fa-user"></i>
                    <span>
                        <i class="fa fa-download"></i>
                        <a href="{{route('post.name')}}"><i class="fa fa-play-circle-o"></i></a> 
                        <i class="fa fa-bars"></i>
                    </span>

                </div>
            </div>

        </div>

        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="img-content">
                <img src="web\assets\images\web-Development-Steps-1200x675.jpg" alt="">
                <div class="img-option">
                    <i style="font-size: 25px;" class="fa fa-user"></i>
                    <span>
                        <i class="fa fa-download"></i>
                        <a href="{{route('post.name')}}"><i class="fa fa-play-circle-o"></i></a> 
                        <i class="fa fa-bars"></i>
                    </span>

                </div>
            </div>

        </div>

        <div id="myOverlay" class="overlay">
            <span class="closebtn" onclick="closeSearch()" title="Close
                        Overlay">×</span>
            <div class="overlay-content">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="img-content">
                <img src="web\assets\images\web-Development-Steps-1200x675.jpg" alt="">
                <div class="img-option">
                    <i style="font-size: 25px;" class="fa fa-user"></i>
                    <span>
                        <i class="fa fa-download"></i>
                        <a href="{{route('post.name')}}"><i class="fa fa-play-circle-o"></i></a> 
                        <i class="fa fa-bars"></i>
                    </span>

                </div>
            </div>

        </div>

        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="img-content">
                <img src="web\assets\images\web-Development-Steps-1200x675.jpg" alt="">
                <div class="img-option">
                    <i style="font-size: 25px;" class="fa fa-user"></i>
                    <span>
                        <i class="fa fa-download"></i>
                        <a href="{{route('post.name')}}"><i class="fa fa-play-circle-o"></i></a> 
                        <i class="fa fa-bars"></i>
                    </span>

                </div>
            </div>

        </div>

        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="img-content">
                <img src="web\assets\images\web-Development-Steps-1200x675.jpg" alt="">
                <div class="img-option">
                    <i style="font-size: 25px;" class="fa fa-user"></i>
                    <span>
                        <i class="fa fa-download"></i>
                        <i class="fa fa-play-circle"></i>
                        <i class="fa fa-bars"></i>
                    </span>

                </div>
            </div>

        </div>

        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="img-content">
                <img src="web\assets\images\web-Development-Steps-1200x675.jpg" alt="">
                <div class="img-option">
                    <i style="font-size: 25px;" class="fa fa-user"></i>
                    <span>
                        <i class="fa fa-download"></i>
                        <i class="fa fa-play-circle"></i>
                        <i class="fa fa-bars"></i>
                    </span>

                </div>
            </div>

        </div>

        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="img-content">
                <img src="web\assets\images\web-Development-Steps-1200x675.jpg" alt="">
                <div class="img-option">
                    <i style="font-size: 25px;" class="fa fa-user"></i>
                    <span>
                        <i class="fa fa-download"></i>
                        <i class="fa fa-play-circle"></i>
                        <i class="fa fa-bars"></i>
                    </span>

                </div>
            </div>

        </div>
    </div>

</div>

@include('web.frangments.footer')

@endsection