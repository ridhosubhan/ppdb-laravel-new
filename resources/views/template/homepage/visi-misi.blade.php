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
    <div class="container-fluid bg-grey mt-4 mb-4">
        <div class="row about-container">
            <div class="col-sm-4">
                {{-- <span class="fa fa-regular fa-earth-americas"></span> --}}
                <img class="img-fluid img-thumbnail"
                    src="https://images.unsplash.com/photo-1543286386-2e659306cd6c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80">
            </div>
            <div class="col-sm-8">
                <h2 class="title"><b>Visi dan Misi</b></h2>
                <p>
                    <strong>VISI:</strong><br>
                    “Menuju Fakultas Teknologi Manufaktur yang unggul dan berperan akti dalam
                    pembangunan bangsa Indonesia melalui proses pendidikan, penelitian dan pengabdian masyarakat”
                </p>
                <p>
                    <strong>MISI:</strong>
                <ol class="mt-1">
                    <li>Menyelenggarakan pendidikan berdasarkan kurikulum berbasis KKNI dalam bidang keteknikan sehingga
                        menghasilkan lulusan yang memiliki keuntungan kompetitif.</li>
                    <li>Melakukan penelitian, publikasi, serta kepemilikan hak kekayaan intelektual (HAKI) sebagai upaya
                        pengembangan ilmu pengetahuan dan teknologi</li>
                    <li>Melaksanakan pengabdian kepada masyarakat untuk bisa memecahkan persoalan masyarakat sebagai uapaya
                        penerapan dan pengembangan ilmu pengetahuan dan keteknikan</li>
                    <li>Melakukan evaluasi secara teratur untuk meningkatkan kualitas, profesionalisme, kapabilitas,
                        akuntabilitas dan tata kelola serta kemandirian dalam penyelenggaraan institusi</li>
                </ol>
                </p>
            </div>
        </div>
    </div>
@endsection
