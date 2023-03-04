<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MMT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{ asset('user/images/favicon.png') }}" rel="icon">
    <link href="{{ asset('user/images/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('user/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ asset('user/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/lib/animate/animate.min.css') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('user/css/style.css') }}" rel="stylesheet">

    @yield('header')

    <style>
    </style>


</head>

<body>
    <!--========================== Header ============================-->
    {{-- <header id="header">
        <div class="container">
            <div id="logo" class="pull-left">
                <a href="#hero">
                    <img src="{{ asset('user/images/logo_new.png') }}" style="margin-right:5px" height="100px" />
                </a>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="{{ $title == 'home' ? 'menu-active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                    <li class="{{ $title == 'blog' ? 'menu-active' : '' }}"><a href="{{ url('/blog') }}">Berita</a>
                    </li>
                    <li class="{{ $title == 'pendaftaran' ? 'menu-active' : '' }}"><a
                            href="{{ url('pendaftaran') }}">Pendaftaran</a></li>
                    <li class="{{ $title == 'profil' ? 'menu-active' : '' }}"><a href="{{ url('profil') }}">Profil</a>
                    </li>
                    <li class="{{ $title == 'destination' ? 'menu-active' : '' }}"><a
                            href="{{ url('destination') }}">Testimonials</a></li>

                    @if (Auth::check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/logout') }}">{{ __('Logout') }}</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                </ul>
            </nav>
            <!-- #nav-menu-container -->
        </div>
    </header> --}}
    <!-- #header -->

    <header id="header">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-brand">
                <div class="collapse navbar-collapse w-100 flex-md-column" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto small mb-2 mb-md-0">
                        <li class="nav-item active">
                            <div id="logo" class="pull-left">
                                <a href="#hero">
                                    <img src="{{ asset('user/images/rsz_1logounjani.png') }}"
                                        style="margin-right:15px" />
                                </a>
                            </div>
                        </li>
                        <li class="nav-menu">
                            <span>
                                <h6 class="d-inline text-light">Magister Manajemen Teknologi</h6> <br>
                                <p class="d-inline text-light" id="fakManufaktur">Fakultas Teknologi Manufaktur</p><br>
                                <p class="d-inline text-light" id="unjani">Universitas Jendral Achmad Yani</p>
                            </span>
                        </li>
                    </ul>
                </div>
            </nav>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="{{ $title == 'home' ? 'menu-active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                    </li>
                    <li class="dropdown"><a href="#"><span>Profil</span> <i
                                class="fa fa-thin fa-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ url('/sambutan-kaprodi') }}">Sambutan Ketua Prodi</a></li>
                            <li><a href="{{ url('/tentang-mmt') }}">Tentang MMT</a></li>
                            <li><a href="{{ url('/visi-misi') }}">Visi dan Misi</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Konsentrasi</span> <i
                                class="fa fa-thin fa-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ url('/supply-chain-management') }}">Supply Chain Management</a></li>
                            <li><a href="{{ url('/project-management') }}">Project Management</a></li>
                        </ul>
                    </li>
                    @if (Auth::check())
                        <li class="{{ $title == 'pendaftaran' ? 'menu-active' : '' }}"><a
                                href="{{ url('pendaftaran') }}">Pendaftaran</a></li>
                    @endif
                    <li class="dropdown">
                        <a href="#">
                            <span>Download</span> <i class="fa fa-thin fa-chevron-down"></i>
                        </a>
                        <ul>
                            <li><a href="{{ asset('dokumen-home/Kurikulum MMT.pdf') }}" target="_blank">Kurikulum</a>
                            </li>
                            <li><a href="{{ asset('dokumen-home/RINCIAN-BIAYA-UNJANI.pdf') }}">Rincian Biaya</a>
                            <li><a
                                    href="{{ asset('dokumen-home/User Guide -  Peserta PMB UNJANI_Jalur Magister.pdf') }}">Tata
                                    Cara Pendaftaran</a></li>
                        </ul>
                    </li>
                    <li class="{{ $title == 'blog' ? 'menu-active' : '' }}"><a href="{{ url('/blog') }}">Berita</a>
                    </li>
                    @if (Auth::check())
                        <li class="dropdown">
                            <a href="#">
                                <span>Pengaturan</span> <i class="fa fa-thin fa-chevron-down"></i>
                            </a>
                            <ul>
                                <li class="nav-item {{ $title == 'dashboard' ? 'menu-active' : '' }}">
                                    <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/logout') }}">{{ __('Logout') }}</a>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                </ul>
            </nav>
            <!-- #nav-menu-container -->
        </div>
    </header>




    <!--========================== Hero Section ============================-->
    <section id="hero">
        <div class="hero-container">
            @yield('hero')
        </div>
    </section>

    <main id="main">

        @yield('content')

    </main>

    <!--==========================
    Footer
  ============================-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">

            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>Regna</strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('user/lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('user/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('user/lib/wow/wow.min.js') }}"></script>

    <script src="{{ asset('user/lib/superfish/superfish.min.js') }}"></script>

    <!-- Contact Form JavaScript File -->
    {{-- <script src="{{asset('user/contactform/contactform.js')}}"></script> --}}

    <!-- Template Main Javascript File -->
    <script src="{{ asset('user/js/main.js') }}"></script>

</body>

</html>
