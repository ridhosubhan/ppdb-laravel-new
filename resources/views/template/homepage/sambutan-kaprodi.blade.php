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

        body {
            background-color: #fff;
            font-weight: 300;
        }

        @media only screen and (max-width:768px) {

            .container {
                margin-top: 66px;
            }

        }

        .card {
            border: none;
            box-shadow: 0 0 40px rgba(51, 51, 51, .1)
        }

        .ratings i {

            color: orange;
        }

        .testimonial-list {

            list-style: none;
        }

        .testimonial-list li {

            margin-bottom: 20px;
        }

        .testimonials-margin {

            margin-top: -19px;
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
        <div class="accordion d-flex justify-content-center align-items-center height" id="accordionExample">
            <div class="card p-3" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                aria-controls="collapseOne">
                <div class="row">
                    <div class="col-md-6">
                        <div class="p-3">
                            <ul class="testimonial-list">
                                <li>
                                    <div class="card p-3" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        <div class="card-body py-4 mt-2">
                                            <div class="d-flex justify-content-center mb-4">
                                                <img src="https://images.unsplash.com/photo-1518556336318-c8de4355ccab?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=385&q=80"
                                                    class="rounded mx-auto d-block" alt="">
                                            </div>
                                            <div class="d-flex flex-column ml-2 text-center">
                                                <span class="font-weight-bold">Lorem Ipsum</span>
                                                <span>Ketua Program Studi</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 testimonials-margin">
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <h4 class="font-weight-bold">Sambutan Ketua Program Studi</h4>
                                    {{-- <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div> --}}
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt
                                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        Excepteur
                                        sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                                        id
                                        est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                </div>
                            </div>

                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <h4>Thanks for this great service</h4>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt
                                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        Excepteur
                                        sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                                        id
                                        est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                </div>
                            </div>

                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <h4>You all are awesome thanks alot</h4>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt
                                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        Excepteur
                                        sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                                        id
                                        est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            {{-- <div class="row">
                <div class="col-md-6">
                    <div class="p-3">
                        <ul class="testimonial-list">
                            <li>
                                <div class="card p-3" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    <div class="card-body py-4 mt-2">
                                        <div class="d-flex justify-content-center mb-4">
                                            <img src="https://static.wixstatic.com/media/8378e733acb9408f22d80c3ad1ab268e.jpg/v1/fill/w_135,h_191,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/Science%20Teacher.jpg"
                                                class="rounded mx-auto d-block" alt="">
                                        </div>
                                        <div class="d-flex flex-column ml-2 text-center">
                                            <span class="font-weight-bold">Lorem Ipsum</span>
                                            <span>Ketua Program Studi</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 testimonials-margin">
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <h4>Sambutan Ketua Program Studi</h4>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                    sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                                    est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            </div>
                        </div>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <h4>Thanks for this great service</h4>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                    sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                                    est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            </div>
                        </div>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <h4>You all are awesome thanks alot</h4>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                    sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                                    est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div> --}}
        </div>

    </div>
@endsection
