@extends('layouts.app')

@section('content')

<div class="jumbotron">
    <div class="row text-center">
        
        <h2>Welcome </h2>
    </div>
    <div class="row">
        <div class="col-6">

            <a href="{{ route('profile.create')}}" class="btn btn-primary">create a profile</a>
        </div>

        <div class="col-6">

            <a href="{{ route('profile')}}" class="btn btn-primary">View your profile</a>
        </div>
    </div>
</div>

@endsection