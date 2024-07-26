@extends('layouts.dashboard')

@section('content')
    <div class="row align-items-center">
        <div class="col-md-12">
            <div class="page-header-title">
                <h5>Admin Profile</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">
                        <i class="feather icon-home"></i>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Go to Home</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="mb-4">Profile Settings</h5>
                    <img src="assets/images/user/avatar-3.jpg" class="img-radius mb-4" alt="User-Profile-Image">
                    <div class="form-group mb-2 text-start">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="form-group mb-3 text-start">
                        <label class="form-label">User Name</label>
                        <input type="text" class="form-control" placeholder="Enter User Name">
                    </div>
                    <div class="mb-4 text-start">
                        <div class="form-group d-inline">
                            <div class="radio d-inline">
                                <input type="radio" name="radio-in-1" id="radio-in-1" checked>
                                <label for="radio-in-1" class="cr">Private Profile</label>
                            </div>
                        </div>
                        <div class="form-group d-inline">
                            <div class="radio d-inline">
                                <input type="radio" name="radio-in-1" id="radio-in-2">
                                <label for="radio-in-2" class="cr">Public Profile</label>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary mb-4">Register</button>
                    <p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html">Signup</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
