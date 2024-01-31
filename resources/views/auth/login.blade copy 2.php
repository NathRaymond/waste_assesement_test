<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Sign In | Pakam Waste System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-light2.jpg') }}">

    <!-- Layout config Js -->
    <script src="{{ asset('assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        {{-- <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div> --}}

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">

                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-6">
                        <div class="card mt-4">

                            <div class="card-body p-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                                            <div>
                                                <a href="index.html" class="d-inline-block auth-logo">
                                                    <img src="{{ asset('assets/images/logo-light2.jpg') }}"
                                                        alt="" height="40">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-2">
                                    <h2 class="text-primary" style="color: rgb(7, 44, 7) !important"><b>Login</b></h2>
                                </div>
                                <div class="p-2 mt-4">
                                    <form method="post" action="{{ route('login') }}" onsubmit="showloader6()">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text"
                                                class="form-control @error('username') is-invalid @enderror"
                                                id="username" name="username" placeholder="Enter your username">
                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">

                                            <label class="form-label" for="password-input">Password</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password"
                                                    class="form-control pe-5 password-input @error('password') is-invalid @enderror"
                                                    placeholder="Enter your password" name="password"
                                                    id="password-input">
                                                <button
                                                    class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                    type="button" id="password-addon"><i
                                                        class="ri-eye-fill align-middle"></i></button>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <label class="form-check-label"
                                            style="font-size: 10px !important; color:rgb(173, 167, 167)">Must be 8
                                            character long. Uppercase Inclusive</label>

                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" type="submit"
                                                style="background-color: rgb(110, 186, 110) !important">Log In
                                                &nbsp;<span class="spinner-border loader spinner-border-sm"
                                                    id="thisLoader6" role="status" aria-hidden="true"
                                                    style="display:none"></span></button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <div class="signin-other-title">
                                                <h5 class="fs-13 mb-4 title">Forgot
                                                    password?</h5>
                                                @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}" class="text-muted"
                                                        style="color: green !important">Retrieve Now</a>
                                                @endif
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <div class="mt-4 text-center">
                            <p class="mb-0">Don't have an account ? <a href="{{ route('register_user') }}"
                                    class="fw-semibold text-primary text-decoration-underline"
                                    style="color: green !important"> Signup </a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted" style="color: rgb(13, 80, 13) !important">
                                <b>Powered by Pakam Technology</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>

    <!-- particles js -->
    <script src="{{ asset('assets/libs/particles.js/particles.js') }}"></script>
    <!-- particles app js -->
    <script src="{{ asset('assets/js/pages/particles.app.js') }}"></script>
    <!-- password-addon init -->
    <script src="{{ asset('assets/js/pages/password-addon.init.js') }}"></script>
    <script>
        function showloader6() {
            var loader = document.getElementById('thisLoader6');
            loader.style.display = "inline-block";
        }
    </script>
    <script>
        @if ($errors->any())
            new swal('Oops...', "{!! implode('', $errors->all(':message')) !!}", 'error')
        @endif

        @if (session()->has('success'))
            new swal(
                'Success!',
                "{{ session()->get('message') }}",
                'success'
            )
        @endif
        @if (session()->has('message'))
            new swal(
                'Success!',
                "{{ session()->get('message') }}",
                'success'
            )
        @endif
    </script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/auth-signin-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jan 2024 15:28:42 GMT -->

</html>
