@php
    $title = 'pendaftaran';
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
    <h1>Pendaftaran</h1>
@endsection


@section('css')
    <script src="/templateEditor/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-12 mb-3">
                        <h3 align="center"></h3>
                    </div>
                    @if ($message = Session::get('sukses'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong> silakan masuk ke <a href="{{ route('dashboard') }}"
                                class="alert-link">dashboard</a>.
                        </div>
                    @elseif (!empty($cekDaftar))
                        <div class="alert alert-warning alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>Perhatian</strong> Anda sudah melakukan pendaftaran, silakan masuk ke <a
                                href="{{ route('dashboard') }}" class="alert-link">dashboard</a>.
                        </div>
                    @else
                        <form action="{{ route('/pendaftaran/store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="slug" class="font-weight-bold">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap"
                                        class="form-control @error('nama_lengkap') is-invalid @enderror"
                                        value="{{ old('nama_lengkap') }}">
                                    @error('nama_lengkap')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                {{-- <div class="mb-3">
                                    <label for="slug" class="font-weight-bold">Email</label>
                                    <input type="text" name="email"
                                        class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div> --}}
                                <div class="mb-3">
                                    <label for="slug" class="font-weight-bold">Jenis Kelamin</label>
                                    <select name="jenis_kelamin"
                                        class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                        <option selected disabled>Pilih...</option>
                                        <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki -
                                            Laki
                                        </option>
                                        <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan
                                        </option>
                                    </select>
                                    @error('pasfoto')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-sm-6">
                                        <label for="slug" class="font-weight-bold">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir"
                                            class="form-control @error('tempat_lahir') is-invalid @enderror"
                                            value="{{ old('tempat_lahir') }}">
                                        @error('nama_lengkap')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="slug" class="font-weight-bold">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir"
                                            class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                            value="{{ old('tanggal_lahir') }}">
                                        @error('nama_lengkap')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="font-weight-bold">Alamat</label>
                                    <textarea id="alamat" name="alamat" rows="5" cols="50"
                                        class="form-control @error('alamat') is-invalid @enderror">{{ old('alamat') }}</textarea>
                                    @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="pasfoto" class="font-weight-bold">Pas Foto</label>
                                    <input type="file" name="pasfoto"
                                        class="form-control @error('pasfoto') is-invalid @enderror"
                                        value="{{ old('pasfoto') }}">
                                    @error('pasfoto')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="kk" class="font-weight-bold">Kartu Keluarga</label>
                                    <input type="file" name="kk"
                                        class="form-control @error('kk') is-invalid @enderror" value="{{ old('kk') }}">
                                    @error('kk')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="ktp" class="font-weight-bold">Kartu Tanda Penduduk</label>
                                    <input type="file" name="ktp"
                                        class="form-control @error('ktp') is-invalid @enderror"
                                        value="{{ old('ktp') }}">
                                    @error('ktp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="gelombang" class="font-weight-bold">Gelombang</label>
                                    <input type="text" name="gelombang" placeholder="Student gelombang..." \
                                        class="form-control @error('gelombang') is-invalid @enderror"
                                        value="{{ old('gelombang') }}">
                                    @error('gelombang')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="prodi" class="font-weight-bold">Program Studi</label>
                                    <select name="prodi" class="form-control @error('prodi') is-invalid @enderror">
                                        <option selected disabled>Pilih Program Studi...</option>
                                        <option value="Manajemen Rantai Pasok"
                                            {{ old('prodi') == 'Manajemen Rantai Pasok' ? 'selected' : '' }}>
                                            Manajemen Rantai Pasok
                                        </option>
                                        <option value="Manajemen Proyek"
                                            {{ old('prodi') == 'Manajemen Proyek' ? 'selected' : '' }}>
                                            Manajemen Proyek
                                        </option>
                                    </select>
                                    @error('prodi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="transkrip" class="font-weight-bold">Transkrip Nilai</label>
                                    <input type="file" name="transkrip"
                                        class="form-control @error('transkrip') is-invalid @enderror"
                                        value="{{ old('transkrip') }}">
                                    @error('transkrip')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="ijazah" class="font-weight-bold">Surat Ijazah</label>
                                    <input type="file" name="ijazah"
                                        class="form-control @error('ijazah') is-invalid @enderror"
                                        value="{{ old('ijazah') }}">
                                    @error('ijazah')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="bukti_pembayaran" class="font-weight-bold">Bukti Pembayaran</label>
                                    <input type="file" name="bukti_pembayaran"
                                        class="form-control @error('bukti_pembayaran') is-invalid @enderror"
                                        value="{{ old('bukti_pembayaran') }}">
                                    @error('bukti_pembayaran')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-4 text-right">
                                    <button class="btn btn-secondary" id="btn_batal" value="Batal">Batal</button>
                                    <button class="btn btn-success" type="submit" value="Daftar">Daftar</button>
                                </div>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    {{-- ckeditor --}}
    <script>
        CKEDITOR.replace('content', {
            filebrowserUploadUrl: "",
            filebrowserUploadMethod: 'form'
        });
    </script>
@endsection
