@extends('layouts.app')

@section('content')


<div class="container ">

    <div class="card">


        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <div class="col-3">{{$message}}</div>
        </div>
        @endif
        <div class="row m-5">
            <div class="col-lg-6">
                <div class="card">

                    <div class="card-body">
                        <form action="{{ route('profile.create')}}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="full_name"
                                        class="form-control @error('full_name') is-invalid @enderror"
                                        placeholder="John Doe" value="{{ old('full_name') }}" autocomplete="full_name">
                                    @error('full_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="john@example.com" value="{{ old('email') }}" autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="number" name="phone"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        placeholder="(239) 816-9029" value="{{ old('phone') }}" autocomplete="phone">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Business No</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="number" name="business_no"
                                        class="form-control @error('business_no') is-invalid @enderror"
                                        placeholder="(320) 380-4539" value="{{ old('business_no') }}"
                                        autocomplete="businees_no">
                                    @error('business_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Address </h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="address"
                                        class="form-control @error('address') is-invalid @enderror"
                                        placeholder="Bay Area, San Francisco, CA" value="{{ old('address') }}"
                                        autocomplete="address">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Role</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="role" class="form-control @error('role') is-invalid @enderror"
                                    placeholder="Manager" value="{{ old('role') }}" autocomplete="role">
                                @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Profession</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="profession"
                                    class="form-control @error('profession') is-invalid @enderror" placeholder="Lawyer"
                                    value="{{ old('profession') }}" autocomplete="profession">
                                @error('profession')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Country</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="country"
                                    class="form-control @error('country') is-invalid @enderror" placeholder="Nigeria"
                                    value="{{ old('country') }}" autocomplete="countryl">
                                @error('country')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">City</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="city"
                                    class="form-control form-control @error('city') is-invalid @enderror"
                                    placeholder="Lagos" value="{{ old('city') }}" autocomplete="city">
                                @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Profile</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="file" name="profile"
                                    class="form-control form-control @error('image') is-invalid @enderror"
                                    placeholder="Upload One Picture Of You" value="{{ old('image') }}"
                                    autocomplete="image">
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="row mt-3 d-flex">
                <div class="col-sm-3"></div>
                <div class="col-sm-9 text-secondary">
                    <button type="submit" class="btn btn-primary px-4">Submit Form</button>

                </div>
            </div>

            </form>
        </div>
    </div>
</div>
@endsection