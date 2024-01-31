<!doctype html>
<html lang="en" data-layout="vertical" data-layout-style="default" data-sidebar="light" data-topbar="dark"
    data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>@yield('page_title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Pakam Assesement" name="description" />
    <meta content="Pakam" name="Pakam" />
    <link rel="shortcut icon" href="{{ asset('images/logo-bg.png') }}">

    <link href="{{ asset('assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('assets/js/layout.js') }}"></script>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

    <link href="https://themesbrand.com/velzon/html/interactive/assets/css/bootstrap.min.css" rel="stylesheet"
        type="text/css" />
    <link href="https://themesbrand.com/velzon/html/interactive/assets/css/icons.min.css" rel="stylesheet"
        type="text/css" />
    <link href="https://themesbrand.com/velzon/html/interactive/assets/css/app.min.css" rel="stylesheet"
        type="text/css" />
    <link href="https://themesbrand.com/velzon/html/interactive/assets/css/custom.min.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .description {
            word-wrap: break-word;
            max-width: 10em;
        }

        :root[data-topbar=dark] {
            --vz-header-bg: green !important;
            --vz-header-item-color: rgba(255, 255, 255, 0.85);
            --vz-header-item-bg: green !important;
            --vz-header-item-sub-color: #b0c4d9;
            --vz-topbar-user-bg: green !important;
            --vz-topbar-search-bg: green !important;
            --vz-topbar-search-color: #fff;
            --vz-header-border: green !important;
        }

        element.style {
            display: inline-block;
            background-color: green !important;
        }
    </style>
    @yield('headlinks')
</head>

<body>
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="layout-width">
                @include('layouts/header')
            </div>
        </header>


        <div class="app-menu navbar-menu">
            @include('layouts/sidebar')

        </div>
        <div class="vertical-overlay"></div>
        <div class="main-content">
            @yield('contents')

            @include('layouts/footer')
        </div>

    </div>
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Vector map-->
    <script src="{{ asset('assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jsvectormap/maps/world-merc.js') }}"></script>

    <!--Swiper slider js-->
    <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Dashboard init -->
    <script src="{{ asset('assets/js/pages/dashboard-ecommerce.init.js') }}"></script>

    <!-- JAVASCRIPT -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!--datatable js-->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script src="https://themesbrand.com/velzon/html/interactive/assets/js/pages/datatables.init.js"></script>
    <script src="https://themesbrand.com/velzon/html/interactive/assets/js/pages/passowrd-create.init.js"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets\js\requestController.js') }}"></script>
    <script src="{{ asset('assets\js\formController.js') }}"></script>

    <script src="{{ asset('assets/js/sweetalert/dist/sweetalert.min.js') }}"></script>
    <script>
        @if ($errors->any())

            new swal('Oops...', "{!! implode('', $errors->all(' :message')) !!}", 'error')
        @endif
        @if (session()->has('message'))

            new swal(
                'Success!',
                "{{ session()->get('message') }}",
                'success'
            )
        @endif
        @if (session()->has('success'))

            new swal(
                'Success!',
                "{{ session()->get('success') }}",
                'success'
            )
        @endif
    </script>
    <script type="text/javascript">
        $(function() {
            $("#verifyPAssword").keyup(function() {
                var password = $("#newPASSword").val();
                var confirmPassword = $("#verifyPAssword").val();

                if (password != confirmPassword) {
                    $("#passwordtextDis").text("Password does not match");
                    $("#passwordtextDis").attr("style", "color:#F64E60 !important");
                    $("#submit_btn").attr("disabled", true);

                } else {
                    $("#passwordtextDis").text("Password match");

                    $("#passwordtextDis").attr("style", "color:#1BC5BD !important");
                    $("#submit_btn").attr("disabled", false);
                }

            });
        });
    </script>
    @yield('scripts')
</body>

</html>
