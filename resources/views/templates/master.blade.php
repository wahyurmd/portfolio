<!DOCTYPE html>
<html lang="en">

<head>
    @include('templates.head')
</head>

<body>

    <!-- ======= Header ======= -->
    @include('templates.header')
    <!-- End Header -->

    <!-- ======= Content ======= -->
    @yield('content')
    <!-- End Content -->

    <!-- ======= Footer ======= -->
    @include('templates.footer')
    <!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    @include('templates.script')

</body>

</html>
