@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Dasho - Bootstrap 5 Admin Template</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Dasho Bootstrap admin template made using Bootstrap 5 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="admin templates, bootstrap admin templates, bootstrap 5, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, Dasho, Dasho bootstrap admin template">
    <meta name="author" content="Phoenixcoded" />

    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('dashboard-assets') }}/images/favicon.svg" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets') }}/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets') }}/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets') }}/css/style.css">

</head>

<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
    <div class="auth-content container">
        <div class="card">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <img src="{{ asset('dashboard-assets') }}/images/logo-dark.svg" alt=""
                                class="img-fluid mb-4">
                            <h4 class="mb-3 f-w-400">Sign up into your account</h4>
                            <div class="form-group mb-2">
                                <label class="form-label">User Name</label>
                                <input type="text" class="form-control" placeholder="Enter User Name" name="name">
                                @error('name')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-2">
                                <label class="form-label">Enter Email</label>
                                <input type="email" class="form-control" placeholder="name@sitename.com"
                                    name="email">
                                @error('email')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-2">
                                <label class="form-label">Enter Password</label>
                                <input type="password" class="form-control" placeholder="Allow only max 14 character"
                                    name="password">
                                @error('password')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-2">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" placeholder="Re-type your Password"
                                    name="password_confirmation">
                                @error('password_confirmation')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>


                            {{-- <div class="saprator"><span>OR</span></div>
                            <button class="btn btn-facebook mb-2 me-2"><i
                                    class="fab fa-facebook-f"></i>facebook</button>
                            <button class="btn btn-googleplus mb-2 me-2"><i
                                    class="fab fa-google-plus-g"></i>Google</button>
                            <button class="btn btn-twitter mb-2 me-2"><i class="fab fa-twitter"></i>Twitter</button>
                            <div class="form-group text-start mt-2">
                                <div class="checkbox checkbox-primary d-inline">
                                    <input type="checkbox" name="checkbox-fill-2" id="checkbox-fill-2">
                                    <label for="checkbox-fill-2" class="cr">Send me the <a href="#!">
                                            Newsletter</a>
                                        weekly.</label>
                                </div>
                            </div> --}}
                            <button type="submit" class="btn btn-primary mb-4 btf">Sign up</button>
                            <p class="mb-2">Already have an account? <a href="{{ route('login') }}" class="f-w-400">Login</a>
                            </p>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <img src="{{ asset('dashboard-assets') }}/images/auth-bg.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="{{ asset('dashboard-assets') }}/js/vendor-all.min.js"></script>
<script src="{{ asset('dashboard-assets') }}/plugins/bootstrap/js/bootstrap.min.js"></script>


<div class="footer-fab">
    <div class="b-bg">
        <i class="fas fa-question"></i>
    </div>
    <div class="fab-hover">
        <ul class="list-unstyled">
            <li><a href="../doc/index-bc-package.html" target="_blank" data-text="UI Kit"
                    class="btn btn-icon btn-rounded btn-info m-0"><i class="feather icon-layers"></i></a></li>
            <li><a href="../doc/index.html" target="_blank" data-text="Document"
                    class="btn btn-icon btn-rounded btn-primary m-0"><i class="feather icon feather icon-book"></i></a>
            </li>
        </ul>
    </div>
</div>


</body>

</html>
