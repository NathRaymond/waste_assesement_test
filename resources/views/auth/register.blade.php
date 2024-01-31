<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Sign Up | Pakam Waste System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
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
        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-9">
                        <div class="card mt-4">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
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

                                    <h2 class="text-primary" style="color: rgb(7, 44, 7) !important"><b>Create
                                            Account</b></h2>
                                </div>
                                <div class="p-2 mt-4">
                                    <div class="row">
                                        <div class="col-xxl-8">
                                            <div class="live-preview">
                                                <form method="POST" action="{{ route('register') }}"
                                                    onsubmit="showloader6()">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="firstNameinput" class="form-label">First
                                                                    Name</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Enter your firstname" name="first_name"
                                                                    id="firstNameinput">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="lastNameinput" class="form-label">Last
                                                                    Name</label>
                                                                <input type="text" class="form-control"
                                                                    name="last_name" placeholder="Enter your lastname"
                                                                    id="lastNameinput">
                                                            </div>
                                                        </div>

                                                        <!--end col-->
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="phonenumberInput"
                                                                    class="form-label">Username</label>
                                                                <input type="text" class="form-control"
                                                                    name="username" id="username"
                                                                    placeholder="Enter username" required>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="emailidInput"
                                                                    class="form-label">Password</label>
                                                                <div class="position-relative auth-pass-inputgroup">
                                                                    <input type="password"
                                                                        class="form-control pe-5 password-input"
                                                                        onpaste="return false"
                                                                        placeholder="Enter password" id="password-input"
                                                                        name="password" aria-describedby="passwordInput"
                                                                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                                                        required>
                                                                    <button
                                                                        class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                                        type="button" id="password-addon"><i
                                                                            class="ri-eye-fill align-middle"></i></button>
                                                                    <div class="invalid-feedback">
                                                                        Please enter a password
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label class="form-check-label"
                                                                        for="auth-remember-check"
                                                                        style="font-size: 10px !important; color: rgb(173, 167, 167); float: left;">Must
                                                                        be 8 characters long. Uppercase
                                                                        Inclusive</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-4 text-center">
                                                        <button class="btn btn-success" type="submit"
                                                            style="background-color: rgb(110, 186, 110) !important; width: 500px !important; display: block; margin-left: auto; margin-right: auto;">Sign
                                                            Up&nbsp;<span
                                                                class="spinner-border loader spinner-border-sm"
                                                                id="thisLoader6" role="status" aria-hidden="true"
                                                                style="display:none"></span></button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="mt-4 text-center">
                                                <div class="signin-other-title">
                                                    <h5 class="fs-13 mb-4 title">Already have account?</h5> <a
                                                        href="{{ route('user_login') }}" class="text-muted"
                                                        style="color: green !important">Login</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
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
    <!-- validation init -->
    <script src="{{ asset('assets/js/pages/form-validation.init.js') }}"></script>
    <!-- password create init -->
    <script src="{{ asset('assets/js/pages/passowrd-create.init.js') }}"></script>
    <script>
        function showloader6() {
            var loader = document.getElementById('thisLoader6');
            loader.style.display = "inline-block";
        }
    </script>
</body>

</html>
