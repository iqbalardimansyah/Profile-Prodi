<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('includes.meta')

    <title>@yield('title') | Rekayasa Perangkat Lunak</title>

    <link rel="shortcut icon" href="{{ asset('assets/admin/assets/images/favicon.ico') }}">

    @stack('before-styles')
    @include('includes.styles')
    @stack('after-styles')
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        @include('includes.navbar')
        <!-- Top Bar End -->

        @include('includes.sidebar')

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            @yield('content')

            <footer class="footer">
                © 2021 Rekayasa Perangkat Lunak UPI Cibiru</span>.
            </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    @stack('before-scripts')
    @include('includes.scripts')
    @stack('after-scripts')

</body>

</html>