@php
    $title = 'artikel-berita';
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
                            <h1 class="m-0">Edit Data Artikel</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Artikel</li>
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
                                    <h3 class="card-title">Edit Data Artikel</h3>
                                </div>
                                <form action="{{ route('/artikel-berita/update') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="artikel_id" id="artikel_id" value={{ $articles->id }}
                                        readonly>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Judul Artikel</label>
                                            <input type="text" name="judul_artikel" id="judul_artikel"
                                                placeholder="Judul artikel..."
                                                class="form-control  @error('judul_artikel')
                                            is-invalid
                                        @enderror"
                                                value="{{ $articles->title }}">
                                            @error('judul_artikel')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Slug</label>
                                            <input type="text" name="slug" id="slug" placeholder="Slug..."
                                                class="form-control  
                                                @error('slug')
                                                    is-invalid
                                                @enderror"
                                                readonly value="{{ $articles->slug }}">
                                            @error('slug')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kategori</label>
                                            <select name="kategori[]" id="kategori" multiple="multiple"
                                                style="width: 100%"
                                                class="js-example-basic-multiple form-control 
                                                        @error('kategori')
                                                            is-invalid
                                                        @enderror">
                                                @foreach ($categories as $row)
                                                    <option value="{{ $row->id }}"> {{ $row->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('kategori')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Status</label>
                                            <select name="status" style="width: 100%"
                                                class="js-example-basic-multiple form-control 
                                                        @error('status')
                                                            is-invalid
                                                        @enderror">
                                                <option value="0" selected disabled>Pilih Status...</option>
                                                <option value="PUBLISH"
                                                    {{ $articles->status == 'PUBLISH' ? 'selected' : '' }}>PUBLISH
                                                </option>
                                                <option value="DRAFT"
                                                    {{ $articles->status == 'DRAFT' ? 'selected' : '' }}>DRAFT</option>
                                            </select>
                                            @error('status')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Konten</label>
                                            <textarea name="konten"
                                                class="my-editor form-control 
                                                    @error('konten')
                                                        is-invalid
                                                    @enderror"
                                                id="my-editor" cols="50" rows="10">{{ $articles->content }}</textarea>
                                            @error('konten')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <button type="submit" class="btn btn-primary">
                                            Publish
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
        <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).ready(function() {
                $('.js-example-basic-multiple').select2();
                $('#kategori').val({!! $articles->category !!}).trigger('change')
            });

            $('#judul_artikel').on('blur', function(e) {
                $.get('{{ url('/kategori-artikel/store/check-slug') }}', {
                        'title': $(this).val()
                    },
                    function(data) {
                        $('#slug').val(data.slug);
                    }
                );
            });

            CKEDITOR.replace('my-editor');
        </script>
</body>

</html>
