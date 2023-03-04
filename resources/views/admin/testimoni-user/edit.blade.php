@php
    $title = 'testimoni';
@endphp
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    @include('template.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('template.left-sidebar')


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Edit Data Testimoni</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">Artikel</li>
                                <li class="breadcrumb-item">Testimoni</li>
                                <li class="breadcrumb-item active">Edit Data</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- /.col-md-6 -->
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Edit Data Testimoni</h3>
                                </div>
                                <form action="{{ route('/testimoni/update') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="testimonial_id" value="{{ $testimoni->id }}">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="image" class="font-weight-bold">Image</label>
                                            <input type="file" name="image"
                                                class="form-control @error('image') is-invalid @enderror"
                                                value="{{ old('image') }}">
                                            @error('image')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama</label>
                                            <input type="text" name="nama" id="nama" placeholder="Nama..."
                                                class="form-control  @error('nama')
                                            is-invalid
                                        @enderror"
                                                value="{{ $testimoni->name }}">
                                            @error('nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Jabatan Pekerjaan</label>
                                            <input type="text" name="posisi_kerja" id="posisi_kerja"
                                                placeholder="Jabatan Pekerjaan..."
                                                class="form-control  @error('posisi_kerja')
                                            is-invalid
                                        @enderror"
                                                value="{{ $testimoni->job_position }}">
                                            @error('posisi_kerja')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Instansi</label>
                                            <input type="text" name="tempat_kerja" id="tempat_kerja"
                                                placeholder="Instansi..."
                                                class="form-control  @error('tempat_kerja')
                                            is-invalid
                                        @enderror"
                                                value="{{ $testimoni->workplace }}">
                                            @error('posisi_kerja')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Testimonial</label>
                                            <textarea name="testimonial" id="testimonial" placeholder="Testimonial..."
                                                class="form-control  
                                                @error('testimonial')
                                                    is-invalid
                                                @enderror">{{ $testimoni->content }}</textarea>
                                            @error('testimonial')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-solid fa-edit mr-2"></i></i>Edit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        @include('template.footer')
</body>

</html>
