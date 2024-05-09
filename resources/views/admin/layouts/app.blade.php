<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Adminto - Tailwind HTML Admin Dashboard Template, A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="coderthemes" name="author">
    <link rel="shortcut icon" href="{{asset('assets-admin/images/favicon.ico')}}">
    <link href="{{asset('assets-admin/css/app.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets-admin/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('assets-admin/js/config.js')}}"></script>

</head>

<body>

    <div class="flex wrapper">

        @include('admin.components.sidebar')

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content">

            @include('admin.components.navbar')

            <main class="p-6">

                @yield('content')

            </main>

            @include('admin.components.footer')

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>

    <!-- Plugin Js -->
    <script src="{{asset('assets-admin/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets-admin/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('assets-admin/libs/lucide/umd/lucide.min.js')}}"></script>
    <script src="{{asset('assets-admin/libs/@frostui/tailwindcss/frostui.js')}}"></script>

    <!-- App Js -->
    <script src="{{asset('assets-admin/js/app.js')}}"></script>

    <!-- knob plugin -->
    <script src="{{asset('assets-admin/libs/jquery-knob/jquery.knob.min.js')}}"></script>

    <!--Morris Chart-->
    <script src="{{asset('assets-admin/libs/morris.js06/morris.min.js')}}"></script>
    <script src="{{asset('assets-admin/libs/raphael/raphael.min.js')}}"></script>

    <!-- Dashboard App js -->
    <script src="{{asset('assets-admin/js/pages/dashboard.init.js')}}"></script>
    @yield('extraJS')

</body>

</html>
