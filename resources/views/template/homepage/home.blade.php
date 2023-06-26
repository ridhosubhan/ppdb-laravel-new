@php
    $title = 'home';
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
    </style>
@endsection

@section('hero')
    {{-- <h1>Welcome to Jogja-Travel</h1>
    <h2>Kami adalah agen travel terpercaya dan jaminan layanan perencanaan wisata yang mudah dan murah</h2> --}}
    {{-- <a href="{{ route('/pendaftaran') }}" class="btn-get-started">Pendaftaran</a> --}}
@endsection


@section('content')
    <!--========================== Call To Action Section ============================-->
    <section id="call-to-action">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-lg-3 text-center text-lg-left">

                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQKt-CgYHkaWEPyCIfnEnRoS3rKscdQAE_T356O1a2&s"
                        class="rounded mx-auto d-block img-responsive">
                </div>
                <div class="col-lg-9 cta-btn-container text-justify">
                    <p class="cta-text">
                        <b>Sambutan Kaprodi</b>
                        <br>
                        Selamat Datang di Website Magister Manajemen Teknologi Universitas Jenderal
                        Achmad
                        Yani..
                        <br>
                        <br>
                        Website Magister Manajemen Teknologi Universitas Jenderal Achmad Yani
                        menyajikan
                        informasi bagi para calon mahasiswa atau masyarakat yang ingin mengetahui tentang
                        kurikulum yang ditawarkan oleh Magister Manajemen Teknologi Unjani.
                        Magister Manajemen Teknologi Teknologi Universitas Jenderal Achmad Yani dirancang
                        untuk mencetak dan melahirkan pemimpin dalam organisasi bisnis, sosial, militer,
                        ataupun pemerintahan yang memiliki kemampuan analisis yang kuat.
                        <br>
                        <a class="cta-btn align-middle" href="{{ url('/sambutan-kaprodi') }}">Selengkapnya</a>
                    </p>


                </div>
            </div>

        </div>
    </section>

    <!--========================== Services Section ============================-->
    <section id="services">
        <div class="container wow fadeIn">
            <div class="section-header mb-3">
                <h3 class="section-title">Mengapa Memilih Kami?</h3>
                {{-- <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                    doloremque</p> --}}
            </div>
            <div class="row d-flex justify-content-center text-center">
                @foreach ($testimonials as $baris)
                    <div class="col-md-4 mb-4 mb-2">
                        <div class="card">
                            <div class="card-body py-4 mt-2">
                                <div class="d-flex justify-content-center mb-4">
                                    <img src="{{ asset('storage/' . $baris->image) }}"
                                        class="rounded-circle shadow-1-strong thumb-post" width="100" height="100" />
                                </div>
                                <h5 class="font-weight-bold">{{ $baris->name }}</h5>
                                <h6 class="font-weight-bold my-3">{{ $baris->job_position }}</h6>
                                <p class="font-weight-bold my-3">{{ $baris->workplace }}</p>
                                <p class="mb-2">
                                    "{{ $baris->content }}"
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- #services -->

    <!--========================== category Section ============================-->
    <section id="category">
        <div class="container wow fadeInUp">
            <div class="section-header">
                <h3 class="section-title">Berita</h3>
                {{-- <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                    doloremque</p> --}}
            </div>
            <div class="row">
                <div class="row" id="category-wrapper">
                    @foreach ($categories as $category)
                        <div class="col-md-4 col-sm-12 category-item filter-app">
                            <a href="{{ url('/blog/category/' . $category->id) }}">
                                <img src="{{ asset('storage/' . $category->image) }}" class="image-center">
                                <div class="details">
                                    <h4>{{ $category->name }}</h4>
                                    <span>{{ $category->description }}</span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
    </section>


    {{-- <!--========================== Contact Us Section ============================--> --}}

    <!-- #contact -->
    <section id="contact">
        <div class="container">
            <div class="section-header">
                <h3 class="section-title">Contact</h3>
                <p class="section-description"></p>
            </div>
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3960.6349202139213!2d107.6470897!3d-6.9341637!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e80cde37ef71%3A0xdd742a1880f4cf45!2sUniversitas%20Jenderal%20Achmad%20Yani!5e0!3m2!1sid!2sid!4v1677145645549!5m2!1sid!2sid"
            width="100%" height="380" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6">
                    <address>
                        <strong>Fakultas Teknologi Manufaktur</strong><br>
                        <strong>Universitas Jenderal Achmad Yani</strong><br>
                        Jl. Terusan Jenderal Gatot Subroto, Sukapura, Kiaracondong, Sukapura, Kec. Kiaracondong<br>
                        Kota Bandung, Jawa Barat 40285<br>
                        <abbr title="Phone">No Telepon:</abbr> (022) 7312741
                    </address>
                </div>
                <div class="col-lg-6 col-md-6 d-flex justify-content-end">
                    <ul class="list-unstyled mt-5">
                        <li><a href="https://sites.google.com/view/ftmunjani" class="text-dark"><i
                                    class="fa fa-globe mr-3"></i> Fakultas
                                Teknologi
                                Manufaktur</a></li>
                        <li><a href="https://www.youtube.com/channel/UCWulk66J3mRJ2WkCtG3CoYQ" class="text-dark"><i
                                    class="fa fa-youtube mr-3"></i> FTM Unjani Official</a>
                        </li>
                        <li><a href="https://www.instagram.com/ftmunjani/" class="text-dark"><i
                                    class="fa fa-instagram mr-3"></i> @ftmunjani</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- #contact -->
@endsection
