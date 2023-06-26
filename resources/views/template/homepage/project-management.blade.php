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
    {{-- <a href="{{ route('/pendaftaran') }}" class="btn-get-started">Pendaftaran</a> --}}
@endsection


@section('content')
    <div class="container mt-4 mb-4">
        <div class="section-title aos-init aos-animate" data-aos="fade-up">
            <h2 class="title"><b>Profil</b></h2>
            <h5 class="fst-italic"><strong>Project Management</strong></h5>
        </div>
        <div class="row aos-init aos-animate" data-aos="fade-up">
            <div class="col-lg-6">
                {{-- <iframe width="560" height="315" src="https://www.youtube.com/watch?v=T2Bp7L4yYio"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen=""></iframe> --}}
                <img src="{{ asset('user/images/pngwing.com (6).png') }}" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <p align="justify">
                    Magister Manajemen Teknologi (MMT) UNJANI yang difokuskan pada konsentrasi Manajemen Proyek, diharapkan
                    dapat menganalisis sistem organisasi bisnis, sosial, mililter, ataupun pemerintahan yang senantiasa
                    dihadapkan pada proyek pengembangan, inovasi, ataupun perbaikan sistem. Proyek yang dimaksud tentu tidak
                    hanya sebatas proyek konstruksi, tetapi menyangkut proyek pengelolaan organisasi. Bidang keahlian
                    Manajemen Proyek akan mengajarkan mahasiswa berbagai ilmu, mulai dari ilmu fondasi, manajemen
                    fungsional, sampai pada ilmu-ilmu khusus yang memperdalam bidang pengelolaan proyek.
                </p>
            </div>
        </div>

    </div>
@endsection
