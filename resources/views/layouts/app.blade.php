<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>@yield('title') &amp; PDM Kuansing</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Corporate & IT Solutions">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/animate-css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fonts/Pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/themify/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    </head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
  <div class="logo-bar d-none d-md-block d-lg-block" style="background-color: #c7f8ff;">
    <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-2">
                    <div class="logo d-none d-lg-block">
                        <a class="navbar-brand js-scroll-trigger d-flex align-items-center" href="/">
                            <!-- Logo -->
                            <img src="{{ asset('images/logomuhammadiyah.png') }}" alt="Logo Muhammadiyah" class="me-3"
                                style="max-width: 100px; height: auto;">
                            <div>
                                <h4 class="mb-0">Pimpinan Daerah Muhammadiyah</h4>
                                <h4 class="mb-0">Kuantan Singingi</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 d-flex justify-content-end align-items-center">
                  <!-- Sosial Media -->
                  <ul class="list-inline header-socials mb-0 me-3">
                      <li class="list-inline-item"><a href="#!" class="text-black"><i class="fab fa-facebook-f"></i></a></li>
                      <li class="list-inline-item"><a href="#!" class="text-black"><i class="fab fa-instagram"></i></a></li>
                      <li class="list-inline-item"><a href="#!" class="text-black"><i class="fab fa-youtube"></i></a></li>
                  </ul>
                  <form class="position-relative" style="max-width: 300px; width: 100%;">
                      <div class="input-group">
                          <input id="searchInput" class="form-control rounded-start-pill border-0 shadow-sm px-4" 
                              type="search" placeholder="Cari sesuatu ..." aria-label="Search">
                          <button class="btn btn-primary rounded-end-pill px-4 shadow-sm" type="submit">
                              <i class="fas fa-search"></i>
                          </button>
                      </div>
                  </form>
              </div>              
            </div>
        </div>
    </div>

    <!-- NAVBAR
              ================================================= -->
    <div class="main-navigation" id="mainmenu-area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary main-nav navbar-togglable rounded-radius">

                <a class="navbar-brand d-lg-none d-block" href="index.html">
                    <h6 class="h3 mb-0">PDM Kuantan Singingi</h6>
                </a>
                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>

                <!-- Collapse -->
                <div class="collapse navbar-collapse has-dropdown" id="navbarCollapse">
                    <!-- Links -->
                    <ul class="navbar-nav ">
                        <li class="nav-item ">
                            <a href="{{ url('/') }}" class="nav-link js-scroll-trigger">
                                Beranda
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle js-scroll-trigger" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profil
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ url('/profil/sejarah') }}">Sejarah</a></li>
                                <li><a class="dropdown-item" href="{{ url('/profil/visi-misi') }}">Visi Misi</a></li>
                                <li><a class="dropdown-item" href="{{ url('/profil/profil-pimpinan') }}">Profil
                                        Pimpinan</a></li>
                                <li><a class="dropdown-item" href="{{ url('/profil/struktur-organisasi') }}">Struktur
                                        Organisasi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle js-scroll-trigger" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Lembaga
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ url('/lembaga/lembaga1') }}">Lembaga Amil Zakat
                                        Infaq dan Sedekah</a></li>
                                <li><a class="dropdown-item" href="{{ url('/lembaga/lembaga2') }}">Lembaga Bantuan
                                        Hukum</a></li>
                                <li><a class="dropdown-item" href="{{ url('/lembaga/lembaga3') }}">Lembaga Dakwah
                                        Komunitas</a></li>
                                <li><a class="dropdown-item" href="{{ url('/lembaga/lembaga4') }}">Lembaga Hikmah dan
                                        Kebijakan Publik</a></li>
                                <li><a class="dropdown-item" href="{{ url('/lembaga/lembaga5') }}">Lembaga Pembina
                                        dan Pengawas Keuangan</a></li>
                                <li><a class="dropdown-item" href="{{ url('/lembaga/lembaga6') }}">Lembaga Pembinaan
                                        Haji dan Umroh</a></li>
                                <li><a class="dropdown-item" href="{{ url('/lembaga/lembaga7') }}">Lembaga Pembinaan
                                        Masjid dan Mushola</a></li>
                                <li><a class="dropdown-item" href="{{ url('/lembaga/lembaga8') }}">Lembaga
                                        Pengembangan Cabang dan Ranting</a></li>
                                <li><a class="dropdown-item" href="{{ url('/lembaga/lembaga9') }}">Lembaga
                                        Pengembangan Pesantren</a></li>
                                <li><a class="dropdown-item" href="{{ url('/lembaga/lembaga10') }}">Lembaga
                                        Pengembangan UMKM</a></li>
                                <li><a class="dropdown-item" href="{{ url('/lembaga/lembaga11') }}">Lembaga Seni
                                        Budaya dan Pengembangan Olahraga</a></li>
                                <li><a class="dropdown-item" href="{{ url('/lembaga/lembaga12') }}">Lembaga
                                        Resiliensi Bencana</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle js-scroll-trigger" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Majelis
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ url('/majelis/majelis1') }}">Majelis Ekonomi
                                        Bisnis Dan Pariwisata</a></li>
                                <li><a class="dropdown-item" href="{{ url('/majelis/majelis2') }}">Majelis Hukum Dan
                                        HAM</a></li>
                                <li><a class="dropdown-item" href="{{ url('/majelis/majelis3') }}">Majelis Lingkungan
                                        Hidup</a></li>
                                <li><a class="dropdown-item" href="{{ url('/majelis/majelis4') }}">Majelis
                                        Pemberdayaan Masyarakat</a></li>
                                <li><a class="dropdown-item" href="{{ url('/majelis/majelis5') }}">Majelis Pembina
                                        Kesehatan Umum</a></li>
                                <li><a class="dropdown-item" href="{{ url('/majelis/majelis6') }}">Majelis Pembinaan
                                        Kesejahteraan Sosial</a></li>
                                <li><a class="dropdown-item" href="{{ url('/majelis/majelis7') }}">Majelis
                                        Pendayagunaan Wakaf</a></li>
                                <li><a class="dropdown-item" href="{{ url('/majelis/majelis8') }}">Majelis Pendidikan
                                        Dasar Dan Menengah</a></li>
                                <li><a class="dropdown-item" href="{{ url('/majelis/majelis9') }}">Majelis Pendidikan
                                        Kader Dan Sumber Daya Insani</a></li>
                                <li><a class="dropdown-item" href="{{ url('/majelis/majelis10') }}">Majelis Pustaka
                                        Dan Informasi</a></li>
                                <li><a class="dropdown-item" href="{{ url('/majelis/majelis11') }}">Majelis
                                        Tabligh</a></li>
                                <li><a class="dropdown-item" href="{{ url('/majelis/majelis12') }}">Majelis Tarjih
                                        Dan Pimpin Tajdid</a></li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ url('/jadwal') }}" class="nav-link js-scroll-trigger">
                                Jadwal Kegiatan
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ url('/berita') }}" class="nav-link js-scroll-trigger">
                                Berita
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ url('/galeri') }}" class="nav-link js-scroll-trigger">
                                Galeri
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle js-scroll-trigger" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                e-Dokumen
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ url('/dokumen') }}">HPT</a></li>
                                <li><a class="dropdown-item" href="{{ url('/lagumuhammadiyah') }}">Lagu
                                        Muhammadiyah</a></li>
                                <li><a class="dropdown-item" href="{{ url('/suratkeputusan') }}">Surat Keputusan</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('/suratedaran') }}">Surat Edaran</a></li>
                                <li><a class="dropdown-item" href="{{ url('/pengumuman') }}">Pengumuman</a></li>
                                <li><a class="dropdown-item" href="{{ url('/bukupanduan') }}">Buku Panduan</a></li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ url('/kontak') }}" class="nav-link js-scroll-trigger">
                                Kontak Kami
                            </a>
                        </li>
                    </ul>
                </div> <!-- / .navbar-collapse -->
            </nav>
        </div> <!-- / .container -->
    </div>

    <main>
        @yield('content')
    </main>

    <footer class="section " id="footer">
      <div class="overlay footer-overlay"></div>
      <div class="container">
          <div class="row">
              <div class="col-lg-4 col-sm-12">
                  <div class="footer-widget">
                      <a href="index.html" class="footer-brand text-white">
                          Hubungi Kami
                      </a>
                      <iframe
                          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6470817052764!2d101.56015787447878!3d-0.5308398352660232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2a52af7f68ee07%3A0x7f22ec61b706f978!2sPondok%20Pesantren%20Kyai%20Haji%20Ahmad%20Dahlan!5e0!3m2!1sid!2sid!4v1736993708723!5m2!1sid!2sid"
                          width="500" height="300" style="border:0; margin-top:10px;" allowfullscreen=""
                          loading="lazy">
                      </iframe>
                  </div>
              </div>

              <div class="col-lg-6 col-sm-6 offset-lg-2 mt-7" style="margin-top: 40px;">
                  <div class="footer-widget">
                      <p><b><i class="fas fa-map-marker-alt"></i> Alamat : </b>JL. Belibis no 11, Simpang Tiga, Koto
                          Taluk, Kec. Kuantan Tengah, Kabupaten Kuantan Singingi, Riau 29511</p>
                      <p><b><i class="fas fa-phone-alt"></i> No.Telp : </b>62812345678</p>
                      <p>Sosial Media :
                          <a href="https://www.facebook.com/" style="margin-right: 10px;"><i
                                  class="fab fa-facebook-f"></i></a>
                          <a href="https://www.twitter.com/" style="margin-right: 10px;"><i
                                  class="fab fa-twitter"></i></a>
                          <a href="https://www.youtube.com/" style="margin-right: 10px;"><i
                                  class="fab fa-youtube"></i></a>
                          <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                      </p>
                  </div>
              </div>
          </div>
          <div class="row text-right pt-5">
              <div class="col-lg-12">
                  <div class="overflow-hidden">
                      <!-- Copyright -->
                      <p class="footer-copy">
                          Copyright &copy;
                          <script>
                              var CurrentYear = new Date().getFullYear()
                              document.write(CurrentYear)
                          </script>. Designed &amp; Developed by <a class="current-year"
                              href="https://themefisher.com/">TimSistemInformasiUMRI</a>
                      </p>
                  </div>
              </div>
          </div>
      </div>
  </footer>

    <!--
  Essential Scripts
  =====================================-->
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
    <script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>

    <script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
</body>

</html>
