@extends('web.layouts.app_register')

@section('contents')
<div class="container">

    @include('notifications.flash_messages')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12
                    col-sm-12 justify-content-center login">
                <div class="card-heading">Login</div>


                <div class="form-group">
                    <label for=""><i class="fa fa-book"></i></label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for=""><i class="fa fa-lock"></i></label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>



                <button class="login-btn">submit</button>
                <a href="{{route('login')}}">already have account? login</a>
            </div>
        </div>
    </form>
</div>
@endsection