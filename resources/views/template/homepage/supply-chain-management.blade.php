@php
    $title = 'sambutan-kaprodi';
@endphp

@extends('template.homepage.header-footer')

@section('header')
    <style>
        .full-img {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 180px;
        }

        #hero {
            background: url('{{ asset('user/images/new_unjani_cropped.png') }}') top center;
            background-repeat: no-repeat;
        }

        .image-center {
            display: block;
            margin-left: 6.5px;
            margin-right: 6.5px;
            width: 100%;
        }

        .thumb-post img {
            object-fit: contain;
            /* keep aspect ratio */
            width: 100%;
            margin-bottom: 1rem;
            padding-right: 10px;
        }

        #about .about-container .background {
            min-height: 300px;
            background: url('{{ asset('regna/assets/img/about-img.jpg') }}') center top no-repeat;
            margin-bottom: 10px;
        }
    </style>
@endsection

@section('hero')
    {{-- <h1>Welcome to Jogja-Travel</h1>
    <h2>Kami adalah agen travel terpercaya dan jaminan layanan perencanaan wisata yang mudah dan murah</h2> --}}
    <a href="{{ route('/pendaftaran') }}" class="btn-get-started">Pendaftaran</a>
@endsection


@section('content')
    <div class="container mt-4 mb-4">
        <div class="section-title aos-init aos-animate" data-aos="fade-up">
            {{-- <h2 class="title"><b>Fakultas Teknologi Manufaktur</b></h2> --}}
            <h2 class="title"><b>Profil</b></h2>
            <h5 class="fst-italic"><strong>Supply Chain Management</strong></h5>
        </div>
        <div class="row aos-init aos-animate" data-aos="fade-up">
            <div class="col-lg-6">
                {{-- <iframe width="560" height="315" src="https://www.youtube.com/watch?v=T2Bp7L4yYio"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen=""></iframe> --}}
                <img src="{{ asset('user/images/pngwing.com (5).png') }}" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <p align="justify">
                    Magister Manajemen Teknologi (MMT) UNJANI yang difokuskan pada konsentrasi Manajemen Rantai Pasok
                    (Supply Chain Management /SCM) dewasa ini menjadi bidang yang sangat penting karena terkait langsung
                    dengan daya saing perusahaan. Globalisasi bisnis dan industri telah melahirkan kesadaran akan pentingnya
                    SCM di berbagai perusahaan. Saat ini banyak perusahaan yang memunculkan posisi baru seperti Supply Chain
                    Analyst, Supply Chain Manager, Supply Chain Director atau nama jabatan lain seperti Logistics Manager,
                    dan Distribution Manager. Dalam era Revolusi Industri 4.0, praktek Supply Chain Management juga banyak
                    berubah. Perusahaan yang ingin memenangkan dalam persaingan harus menyiapkan tenaga professional yang
                    mampu memahami bagaimana mengelola supply chain di era digital dewasa ini. Bidang keahlian SCM akan
                    mengajarkan mahasiswa berbagai ilmu, mulai dari ilmu fondasi, manajemen fungsional, sampai pada
                    ilmu-ilmu khusus yang memperdalam bidang SCM.
                </p>
            </div>
        </div>

    </div>
@endsection
