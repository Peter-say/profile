@extends('web.layouts.app_register')

@section('contents')
<div class="container">
@include('notifications.flash_messages')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12
                    col-sm-12 justify-content-center login">
               <h4 class="card-heading">Register</h4>

                <div class="form-group">
                    <label for="name"><i class="fa fa-book"></i></label>
                    <input type="text" name="name" id="name" placeholder="Name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="username"><i class="fa fa-user"></i></label>
                    <input type="text" name="username" id="username" placeholder="Username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" required autocomplete="username" autofocus>
                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for=""><i class="fa fa-book"></i></label>
                    <input type="email" name="email" id="" placeholder="Email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for=""><i class="fa fa-lock"></i></label>
                    <input type="password" name="password" id="" placeholder="Password" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for=""><i class="fa fa-lock"></i></label>
                    <input type="password" name="password_confirmation" id="" placeholder="Re-Password" class="form-control"  required autocomplete="new-password">
                </div>

                <button class="login-btn">submit</button>
                <a href="{{route('login')}}">already have account? login</a>
            </div>
        </div>
    </form>
</div>
@endsection