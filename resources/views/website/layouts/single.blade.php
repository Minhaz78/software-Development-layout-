<!DOCTYPE html>
<html lang="en">

<head>
@include('website.includes.head')
</head>

<body>

  <!-- ======= Header ======= -->
  @include('website.includes.header')
  <!-- End Header -->
  @yield('content')
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('website.includes.footer')
 <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  @include('website.includes.scripts')
    @yield('scripts')
</body>

</html>