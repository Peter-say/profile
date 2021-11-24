@extends('web.layouts.app')

@section('content')

@include('web.frangments.navbar')


<div class="container">
    <div class="row">

        <div class="col-lg-8 col-xl-8 col-md-12 col-sm-12">
            <div class="content-header">
                <i class="fa fa-user author-profile"></i>
                <b>Peter Iriogbe</b>
            </div>
            <div class="title col-lg-8 col-xl-8 col-md-12 col-sm-12">
                <span><a href="">Microsoft Corporation. All rights
                        reserved.</a></span>
            </div>
        </div>

        <div class="col-lg-8 col-xl-8 col-md-12 col-sm-12 d-flex
                    justify-content-center">
            <div class="content-body m-3">
                <video src="" controls style="width:100%; height: 50vh ;">
                    <source src="img/sjjm_IH_016_r360P.mp4" type="">
                </video>
            </div>
        </div>
        <div class="reaction col-lg-8 col-xl-8 col-md-12 col-sm-12">
            <i class="fa fa-share"></i>
            <i class="fa fa-heart"></i>
            <i class="fa fa-comment-o"></i>
        </div>

    </div>
</div>

@include('web.frangments.footer')

@endsection