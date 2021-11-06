<!DOCTYPE html>
<html lang="en">

<head>
 @include('website.includes.head')
</head>

<body>

  <!-- ======= Header ======= -->
  @include('website.includes.header')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Learning Today,<br>Leading Tomorrow</h1>
      <h2>We are team of talented designers making websites with Bootstrap</h2>
      <a href="courses.html" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <!-- End #main -->
  @yield('content')
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