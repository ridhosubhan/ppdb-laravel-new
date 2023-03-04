@php
    $title = 'kategori-artikel';
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
                            <h1 class="m-0">Kategori</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">Artikel</li>
                                <li class="breadcrumb-item active">Kategori</li>
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
                        <div class="col-lg-12">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <div class="col-sm-2">
                                    </div>
                                    <h4>Kategori</h4>
                                </div>
                                <div class="card-body">
                                    @if ($message = Session::get('sukses'))
                                        <div class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @endif

                                    <div class="text-right">
                                        <a href="{{ url('/kategori-artikel/create') }}" class="btn btn-primary mb-4">
                                            <i class="fa fa-plus mr-2"></i>Tambah Data
                                        </a>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Kategori</th>
                                                    <th>Slug</th>
                                                    <th>Image</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                @endphp
                                                @foreach ($categories as $row)
                                                    <tr>
                                                        <th>{{ $no++ . '.' }}</td>
                                                        <td>{{ $row->name }}</td>
                                                        <td>{{ $row->slug }}</td>
                                                        <td>
                                                            <img src="{{ asset('storage/' . $row->image) }}"
                                                                class="rounded mx-auto d-block img-responsive"
                                                                style="max-height: 150px; max-width: 150px;">
                                                        </td>
                                                        <td>
                                                            <div class="form-group row text-center">
                                                                <a href="{{ url('/kategori-artikel/edit') . '/' . $row->id }}"
                                                                    class="btn btn-sm btn-success">
                                                                    <i class="fas fa-solid fa-edit"></i> Edit
                                                                </a>
                                                                <a href="javascript:void(0)"
                                                                    class="btn btn-sm btn-danger ml-2"
                                                                    onclick="hapus('{{ $row->id }}', '{{ $row->image }}')">
                                                                    <i class="fas fa-solid fa-trash"></i> Hapus
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Kategori</th>
                                                    <th>Slug</th>
                                                    <th>Image</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
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
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).ready(function() {
                $("#example1").DataTable({
                    "buttons": ["csv", "excel", "pdf", "print"],
                    "dom": "<'row'<'col-sm-4'l><'col-sm-6'B><'col-sm-2'f>>" +
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-10'i><'col-sm-2'p>>",
                });
            });

            function hapus(id, image) {
                if (confirm('Yakin hapus data?')) {
                    $.ajax({
                        data: {
                            'kategori_id': id,
                            'image': image,
                        },
                        url: "{{ route('/kategori-artikel/delete') }}",
                        type: "POST",
                        dataType: 'json',
                        success: function(data) {
                            console.log(data);
                            if (data.status === 1) {
                                if (confirm(data.message)) {
                                    location.reload();
                                }
                            }
                        },
                        error: function(data) {
                            console.log('Error:', data);
                        }
                    });
                }
            }
        </script>
</body>

</html>
