@php
    $title = 'blog';
@endphp

@extends('template.homepage.header-footer')

@section('header')
    <style>
        #hero {
            background: url('{{ asset('user/images/new_unjani_cropped.png') }}') top center;
            background-repeat: no-repeat;
            width: 100%;
            background-size: cover;
        }

        .form-control:focus {
            box-shadow: none;
        }

        .form-control::placeholder {
            font-size: 0.95rem;
            color: #aaa;
            font-style: italic;
        }

        .article {
            line-height: 1.6;
            font-size: 15px;
        }
    </style>
@endsection

@section('hero')
    <h1>Berita Terkini Unjani</h1>
    <h2>Kumpulan artikel-artikel, Informasi dari UNJANI</h2>
@endsection


@section('content')
    <!--========================== Article Section ============================-->
    <section id="about">
        <div class="container wow fadeIn">

            <div class="row">
                <div class="col-9">
                    @if ($article != null)
                        <div class="section-header mt-3">
                            <div class="mb-3">
                                <div class="text-dark" style="font-size: 40px; letter-spacing: .5px; line-height: 1.3;">
                                    {{ $article->title }}
                                </div>
                                <div class="mt-1">
                                    <small class="font-italic">Created At :
                                        {{ date('d M Y', strtotime($article->created_at)) }} |</small>
                                    @foreach ($articlesCategory as $value)
                                        <a class="d-inline underline" href="#">
                                            <small class="font-italic">
                                                @if ($article->id == $value->article_id)
                                                    {{ $value->name }},
                                                @endif
                                            </small>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                            <p class="mb-3 article text-justify">
                                {!! $article->content !!}
                            </p>
                        </div>
                    @else
                        <style>
                            .page {
                                color: #636b6f;
                                font-family: 'Nunito', sans-serif;
                                font-weight: 100;
                                height: 100vh;
                            }
                        </style>
                        <div class="full-height bg-white mt-5 d-flex align-items-center justify-content-center"
                            style="height: 10vh;">
                            <div class="code font-weight-bold text-center"
                                style="border-right: 3px solid; font-size: 60px; padding: 0 15px 0 15px;">
                                404
                            </div>
                            <div class="text-center" style="padding: 10px; font-size: 46px;">
                                Not Found
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-3">
                    <form action="#" class="mt-5">
                        <div class="input-group mb-4 border rounded-pill shadow-lg"
                            style="border-radius:10px; box-shadow: 3px 3px 8px grey;">
                            <input type="text" name="s" value="{{ Request::get('s') }}"
                                placeholder="Apa yang ingin anda cari?" class="form-control bg-none border-0"
                                style="border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
                            <div class="input-group-append border-0">
                                <button type="submit" class="btn text-success"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                    <div class="mb-3 font-weight-bold">Recent Posts</div>
                    @foreach ($recents as $recent)
                        <div>
                            <a href="#"> <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                {{ $recent->title }}
                            </a>
                            <hr>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section><!-- #services -->
@endsection
