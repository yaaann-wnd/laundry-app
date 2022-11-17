<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Karisma Laundry</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('land/img/laundry.png') }}" rel="icon">
    <link href="{{ asset('land/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('land/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('land/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('land/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('land/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('land/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('land/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('land/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('land/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="index.html"><img src="{{ asset('land/img/laundry.png') }}" alt=""
                            class="img-fluid"></a> <a href="index.html"><span>Karisma Laundry</span></a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    @if (!Auth::user())
                        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                        <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
                        <li><a class="nav-link scrollto" href="#features">Penawaran</a></li>
                        <li><a class="nav-link scrollto" href="#gallery">Galeri</a></li>
                        <li><a class="nav-link scrollto" href="#pricing">Harga</a></li>
                        <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                        <li><a class="nav-link scrollto" href="/login">Login</a></li>
                        <li><a class="nav-link scrollto" href="{{ route('register') }}">Daftar</a></li>
                    @else
                        <li class="dropdown"><a href="#"><span
                                    class="text-capitalize">{{ Auth::user()->name }}</span> <i
                                    class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="/profil">Profil</a></li>
                                <li><a href="{{ route('pesanan.create') }}">Pesanan</a></li>
                                <li><a href="/home">Histori</a></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form action="{{ route('logout') }}" id="logout-form" method="post">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    @include('sweetalert::alert')
    @yield('utama')

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>Kontak</h3>
                            <p class="pb-3"><em>Hubungi Kami</em>
                            </p>
                            <p>
                                Jl. Watu Gong No.18, Ketawanggede,
                                <br>
                                Kec. Lowokwaru, Kota Malang, Jawa Timur 65145<br><br>
                                <strong>Telepon :</strong> 085-785-196-574<br>
                                <strong>Email :</strong> karismaacademy@gmail.cp,<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Link Cepat</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang Kami</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Penawaran</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Galeri</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Harga</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <img src="{{ asset('land/img/logolaundry.png') }}" alt="logokarisma" width="300px"
                            srcset="">

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                <strong><span>Karisma Laundry</span></strong>
            </div>
            <div class="credits">
                Di desain oleh <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('land/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('land/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('land/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('land/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('land/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('land/vendor/php-email-form/validate.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('asset/js/emsi.js') }}"></script>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-jdjG99xvk3PihD64"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('land/js/main.js') }}"></script>
    <script>
        function sum() {
            var txtFirstNumberValue = document.getElementById('txt1').value;
            var txtSecondNumberValue = document.getElementById('txt2').value;
            var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
            if (!isNaN(result)) {
                document.getElementById('txt3').value = result;
            }
        }
    </script>

    

</body>

</html>
