<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>UPJ | SMKN 2 BANGKALAN</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicons -->
    <link href="{{ asset('assets/Dewi-1.0.0/assets/img/upj_png_garis_hitam.png') }}" rel="icon" />
    <link href="{{ asset('assets/Dewi-1.0.0/assets/img/upj_png_garis_hitam.png') }}" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/Dewi-1.0.0/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/Dewi-1.0.0/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/Dewi-1.0.0/assets/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/Dewi-1.0.0/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/Dewi-1.0.0/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/Dewi-1.0.0/assets/css/main.css') }}" rel="stylesheet" />

  </head>
  <body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
      <div
        class="container-fluid container-xl position-relative d-flex align-items-center"
      >
        <a href="#" class="logo d-flex align-items-center me-auto">
          <img src="{{ asset('assets/Dewi-1.0.0/assets/img/logosmkn2bkl.png') }}" alt="" width="180" height="50"/>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Home</a></li>
            <li><a href="#about">Tentang kami</a></li>
            <li><a href="#services">Produk</a></li>
            <li><a href="#portfolio">Jasa</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="cta-btn" href="{{route('login')}}">Dashboard</a>
      </div>
    </header>

    @yield('content')

    <!-- Footer start -->

    <footer id="footer" class="footer dark-background">
      <div class="container footer-top">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="index.html" class="logo d-flex align-items-center">
              <span class="sitename">UPJ SMKN 2 BKL</span>
            </a>
            <div class="footer-contact pt-3">
              <p>Jl. Halim Perdana Kusuma, Bangkalan - Jawa Timur</p>
              <p class="mt-3">
                <strong>Contact:</strong>
              </p>
              <p>
              <span>+62 823-3314-6826</span> <p>(Finalia Meriana)</p>
              </p>
              <p><strong>Email:</strong> <span>smkn2_bkl@yahoo.com</span></p>
            </div>
            <div class="social-links d-flex mt-4">
              <a href="https://www.tiktok.com/@smkn2_bangkalan/" target="_blank" ><i class="bi bi-tiktok"></i></a>
              <a href="https://web.facebook.com/smkn2bkln/" target="_blank"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/smkn2_bangkalan/" target="_blank"><i class="bi bi-instagram"></i></a>
              <a href="https://wa.me/+6282333146826" target="_blank"><i class="bi bi-whatsapp"></i></a>

            </div>
          </div>

      <div class="container copyright text-center mt-4">
        <p>
          © <span>Copyright 2025</span> | <strong class="px-1 sitename">SMK NEGERI 2 BANGKALAN</strong>
          <span>All Rights Reserved</span>
        </p>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          {{-- Designed by
          <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by
          <a href=“https://themewagon.com>ThemeWagon --}}
        </div>
      </div>
    </footer>

    <!-- Scroll Top -->
    <a
      href="#"
      id="scroll-top"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/Dewi-1.0.0/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/Dewi-1.0.0/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/Dewi-1.0.0/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/Dewi-1.0.0/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/Dewi-1.0.0/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/Dewi-1.0.0/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/Dewi-1.0.0/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/Dewi-1.0.0/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>


    <!-- Main JS File -->
    <script src="{{ asset('assets/Dewi-1.0.0/assets/js/main.js') }}"></script>
  </body>
</html>
