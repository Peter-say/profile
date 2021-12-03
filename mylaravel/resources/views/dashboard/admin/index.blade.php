@extends('dashboard.admin.layouts.app')

@section('content')
<!--  BEGIN CONTENT PART  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">
            <div class="container br-5">
                <div class="contents">
                <div class="row">
                    <div class="col-xl-4 collg-4 col-md-12 col-sm-12 ">
                        <div class="card-header-page justify-content-center">Users</div>
                        <div class="card-main-body">
                            <p id="item" class="justify-content-center"><b><a href="{{route('admin.users.index')}}">{{$users->count()}}</a></b></p>
                        </div>

                    </div>

                    <div class="col-xl-4 collg-4 col-md-12 col-sm-12">
                        <div class="card-header-page justify-content-center">Post</div>
                        <div class="card-main-body">
                            <p id="item" class="justify-content-center"><b>{{$posts->count()}}</b></p>
                        </div>

                    </div>

                    <div class="col-xl-4 collg-4 col-md-12 col-sm-12">
                        <div class="card-header-page justify-content-center">Visitors</div>
                        <div class="card-main-body">
                            <p id="item" class="justify-content-center"><b>30</b></p>
                        </div>

                    </div>
                </div>
                </div>
            </div>
        </div>

    </div>


</div>
<!--  END CONTENT PART  -->

@endsection