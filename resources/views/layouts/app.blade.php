<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Home - Alphabeta</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{asset('assets/img/alphabeta.png')}}" rel="icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet"  type='text/css'>
  <link href="{{asset('assets/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('assets/css/ninestar.css')}}" rel="stylesheet">

</head>

<body>
    <div>
        <main>
            @yield('content')
        </main>
      
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="fa fa-arrow-up"></i></a>

        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="{{asset('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/php-email-form/validate.js')}}"></script>
        <script src="{{asset('assets/aos/aos.js')}}"></script>
        <script src="{{asset('assets/glightbox/js/glightbox.min.js')}}"></script>
        <script src="{{asset('assets/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/isotope-layout/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/swiper/swiper-bundle.min.js')}}"></script>

        <!-- Main JS File -->
        <script src="{{asset('assets/js/ninestar.js')}}"></script>
        <script>
            document.querySelectorAll(".menu-link").forEach((link) => {
                if (link.href === window.location.href) {
                    link.classList.add("active");
                    link.setAttribute("aria-current", "page");
                }
            });
        </script>
    </div>

    @yield('scripts')
</body>
</html>