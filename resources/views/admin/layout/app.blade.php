<!DOCTYPE html>
<html class="loading" lang="en"data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Invense</title>
    <link rel="apple-touch-icon" href="{{asset('assets/admin/')}}/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/admin/')}}/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/')}}/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/')}}/app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/')}}/app-assets/vendors/css/forms/wizard/bs-stepper.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/')}}/app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/')}}/app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/')}}/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/')}}/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/')}}/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/')}}/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/')}}/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/')}}/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/')}}/app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/')}}/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/')}}/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/')}}/app-assets/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/')}}/app-assets/css/plugins/charts/chart-apex.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/')}}/app-assets/css/plugins/forms/pickers/form-flat-pickr.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/')}}/app-assets/css/plugins/forms/pickers/form-pickadate.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/')}}/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/styles') }}/main.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Main Menu-->
    @include('admin.layout.sidebar')
    <!-- END: Main Menu-->

    @include('admin.layout.navbar')
    <!-- BEGIN: Content-->
    @yield('content')
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('assets/admin/')}}/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('assets/admin/')}}/app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="{{asset('assets/admin/')}}/app-assets/vendors/js/extensions/toastr.min.js"></script>
    <script src="{{asset('assets/admin/')}}/app-assets/vendors/js/forms/wizard/bs-stepper.min.js"></script>
    <script src="{{asset('assets/admin/')}}/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="{{asset('assets/admin/')}}/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="{{asset('assets/admin/')}}/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="{{asset('assets/admin/')}}/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="{{asset('assets/admin/')}}/app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
    <script src="{{asset('assets/admin/')}}/app-assets/vendors/js/pickers/pickadate/legacy.js"></script>
    <script src="{{asset('assets/admin/')}}/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('assets/admin/')}}/app-assets/js/core/app-menu.js"></script>
    <script src="{{asset('assets/admin/')}}/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('assets/admin/')}}/app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>
    <script src="{{asset('assets/admin/')}}/app-assets/js/scripts/forms/pickers/form-pickers.js"></script>
    <!-- END: Page JS-->

    <!-- BEGIN: Custom JS-->
    <script src="{{asset('assets/script/dashboard.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js"></script>
    <!-- END: Custom JS-->


    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        });

    @stack('scripts')
</body>
<!-- END: Body-->

</html>