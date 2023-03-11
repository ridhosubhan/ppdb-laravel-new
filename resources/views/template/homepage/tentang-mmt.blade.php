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
    <section id="about">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="row about-container">
                <div class="col-lg-6 content order-lg-1 order-2">
                    <h2 class="title">Tentang Magister Manajemen Teknologi</h2>
                    <h5 class="font-weight-bold">Universitas Jendral Achmad Yani</h5>
                    <p> Program Magister Manajemen Teknologi (MMT) UNJANI dirancang untuk mencetak dan melahirkan pemimpin
                        dalam organisasi bisnis, sosial, militer, ataupun pemerintahan yang memiliki kemampuan analisis yang
                        kuat. Saat ini tantangan organisasi bisnis, sosial, militer, ataupun pemerintahan menghadapi situasi
                        dengan kompleksitas yang tinggi. Untuk menjadi organisasi yang kompetitif, maka diperlukan pemimpin
                        yang mempunyai visi, memiliki keterampilan manajerial yang kuat, dan mampu mengambil keputusan atas
                        dasar informasi yang diolah dari data.</p>
                    {{-- <div class="icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="fa fa-regular fa-briefcase"></i></div>
                        <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                        <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
                            cum soluta nobis est eligendi</p>
                    </div>
                    <div class="icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="fa fa-regular fa-address-card"></i></div>
                        <h4 class="title"><a href="">Magni Dolores</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit anim id est laborum</p>
                    </div>
                    <div class="icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="fa fa-regular fa-binoculars"></i></div>
                        <h4 class="title"><a href="">Dolor Sitema</a></h4>
                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat tarad limino ata</p>
                    </div> --}}
                </div>
                <div class="col-lg-6 background order-lg-2 order-1 aos-init aos-animate" data-aos="fade-left"
                    data-aos-delay="100"></div>
            </div>
        </div>
    </section>
@endsection
