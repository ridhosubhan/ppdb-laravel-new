@php
    $title = 'status-pendaftaran';
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
                            <h1 class="m-0">Status Pendaftaran</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Status Pendaftaran</li>
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
                                    <h5 class="m-0"></h5>
                                </div>
                                <div class="card-body">
                                    @if (empty($student))
                                        <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                            <strong>Perhatian!</strong> <br>
                                            Anda belum mendaftar, mohon selesaikan proses Pendaftaran. <br>
                                            <form action="{{ route('/pendaftaran') }}" method="get">
                                                <button type="submit" class="btn btn-primary mt-3">Daftar</button>
                                            </form>
                                        </div>
                                    @else
                                        <div class="row">
                                            <div
                                                class="col-12 col-sm-12 col-md-12 d-flex align-items-stretch flex-column">
                                                <div class="card bg-light d-flex flex-fill">
                                                    <div class="card-header text-muted border-bottom-0">
                                                    </div>
                                                    <div class="card-body pt-0">
                                                        <div class="row">
                                                            <div class="col-7">
                                                                <h2 class=""><b>{{ $student->nama }}</b></h2>
                                                                <p class="text-muted text-sm">
                                                                    <b>Nomor Registrasi:
                                                                    </b>{{ $student->no_registrasi }}
                                                                    <br>
                                                                    <b>Program Studi:
                                                                    </b>{{ $student->prodi }}
                                                                    <br>
                                                                    <b>Gelombang:
                                                                    </b>{{ $student->gelombang }}
                                                                </p>
                                                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                                                    <li class="large">
                                                                        <span class="fa-li">
                                                                            <i class="fas fa-solid fa-hospital"></i>
                                                                        </span>
                                                                        Tempat Tanggal Lahir:
                                                                        {{ $student->tempat_lahir . ', ' . $student->tanggal_lahir }}
                                                                    </li>
                                                                    <li class="large">
                                                                        <span class="fa-li">
                                                                            <i class="fas fa-lg fa-building"></i>
                                                                        </span>
                                                                        Alamat: {{ $student->alamat }}
                                                                    </li>
                                                                    <li class="large">
                                                                        <span class="fa-li">
                                                                            <i class="fas fa-lg fa-phone"></i>
                                                                        </span>
                                                                        E-mail:
                                                                        {{ $student->email }}
                                                                    </li>
                                                                </ul>
                                                                <div class="col-md-12 mt-3">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h3 class="card-title"><b>Kelengkapan
                                                                                    Berkas</b>
                                                                                </h2>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <table class="table table-bordered">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th style="width: 10px">#</th>
                                                                                        <th>Berkas</th>
                                                                                        <th style="width: 40px">
                                                                                            Kelengkapan
                                                                                        </th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th>1.</th>
                                                                                        <td>Pas Foto</td>
                                                                                        <td>
                                                                                            @if (!empty($student->pasfoto))
                                                                                                <a target="_blank"
                                                                                                    href="{{ URL::asset('storage') . '/' . $student->pasfoto }}">
                                                                                                    <span
                                                                                                        class="badge bg-success">
                                                                                                        Ada
                                                                                                    </span>
                                                                                                </a>
                                                                                            @else
                                                                                                <span
                                                                                                    class="badge bg-danger">
                                                                                                    Tidak
                                                                                                </span>
                                                                                            @endif
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>2.</th>
                                                                                        <td>Kartu Keluarga</td>
                                                                                        <td>
                                                                                            @if (!empty($student->kk))
                                                                                                <a target="_blank"
                                                                                                    href="{{ URL::asset('storage') . '/' . $student->kk }}">
                                                                                                    <span
                                                                                                        class="badge bg-success">
                                                                                                        Ada
                                                                                                    </span>
                                                                                                </a>
                                                                                            @else
                                                                                                <span
                                                                                                    class="badge bg-danger">
                                                                                                    Tidak
                                                                                                </span>
                                                                                            @endif
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>3.</th>
                                                                                        <td>Kartu Tanda Penduduk</td>
                                                                                        <td>
                                                                                            @if (!empty($student->ktp))
                                                                                                <a target="_blank"
                                                                                                    href="{{ URL::asset('storage') . '/' . $student->ktp }}">
                                                                                                    <span
                                                                                                        class="badge bg-success">
                                                                                                        Ada
                                                                                                    </span>
                                                                                                </a>
                                                                                            @else
                                                                                                <span
                                                                                                    class="badge bg-danger">
                                                                                                    Tidak
                                                                                                </span>
                                                                                            @endif
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>4.</th>
                                                                                        <td>Transkrip</td>
                                                                                        <td>
                                                                                            @if (!empty($student->transkrip))
                                                                                                <a target="_blank"
                                                                                                    href="{{ URL::asset('storage') . '/' . $student->transkrip }}">
                                                                                                    <span
                                                                                                        class="badge bg-success">
                                                                                                        Ada
                                                                                                    </span>
                                                                                                </a>
                                                                                            @else
                                                                                                <span
                                                                                                    class="badge bg-danger">
                                                                                                    Tidak
                                                                                                </span>
                                                                                            @endif
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>5.</th>
                                                                                        <td>Ijazah</td>
                                                                                        <td>
                                                                                            @if (!empty($student->ijazah))
                                                                                                <a target="_blank"
                                                                                                    href="{{ URL::asset('storage') . '/' . $student->ijazah }}">
                                                                                                    <span
                                                                                                        class="badge bg-success">
                                                                                                        Ada
                                                                                                    </span>
                                                                                                </a>
                                                                                            @else
                                                                                                <span
                                                                                                    class="badge bg-danger">
                                                                                                    Tidak
                                                                                                </span>
                                                                                            @endif
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>6.</th>
                                                                                        <td>Bukti Pembayaran</td>
                                                                                        <td>
                                                                                            @if (!empty($student->buktipembayaran))
                                                                                                <a target="_blank"
                                                                                                    href="{{ URL::asset('storage') . '/' . $student->buktipembayaran }}">
                                                                                                    <span
                                                                                                        class="badge bg-success">
                                                                                                        Ada
                                                                                                    </span>
                                                                                                </a>
                                                                                            @else
                                                                                                <span
                                                                                                    class="badge bg-danger">
                                                                                                    Tidak
                                                                                                </span>
                                                                                            @endif
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="col-5">
                                                                <div class="row text-center">
                                                                    <img src="{{ asset('storage/' . $student->pasfoto) }}"
                                                                        alt="user-avatar"
                                                                        class="rounded mx-auto d-block img-thumbnail img-responsive">
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 mt-3">
                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <h3 class="card-title"><b>Status
                                                                                        Pendaftaran</b>
                                                                                    </h2>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div id="accordion">
                                                                                    @if ($student->status == 'DAFTAR')
                                                                                        <div class="card card-info">
                                                                                            <div class="card-header">
                                                                                                <h4
                                                                                                    class="card-title w-100">
                                                                                                    <a class="d-block w-100 collapsed"
                                                                                                        data-toggle="collapse"
                                                                                                        href="#collapseOne"
                                                                                                        aria-expanded="false">
                                                                                                        Menunggu
                                                                                                    </a>
                                                                                                </h4>
                                                                                            </div>
                                                                                            <div id="collapseOne"
                                                                                                class="collapse"
                                                                                                data-parent="#accordion"
                                                                                                style="">
                                                                                                <div class="card-body">
                                                                                                    <b>
                                                                                                        Saat ini
                                                                                                        pendaftaran
                                                                                                        sedang
                                                                                                        diproses, mohon
                                                                                                        tunggu.
                                                                                                    </b>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    @elseif($student->status == 'DISETUJUI')
                                                                                        <div class="card card-success">
                                                                                            <div class="card-header">
                                                                                                <h4
                                                                                                    class="card-title w-100">
                                                                                                    <a class="d-block w-100"
                                                                                                        data-toggle="collapse"
                                                                                                        href="#collapseTwo">
                                                                                                        Diterima
                                                                                                    </a>
                                                                                                </h4>
                                                                                            </div>
                                                                                            <div id="collapseTwo"
                                                                                                class="collapse"
                                                                                                data-parent="#accordion">
                                                                                                <div class="card-body">
                                                                                                    <b>
                                                                                                        Selamat anda
                                                                                                        dinyatakan
                                                                                                        diterima
                                                                                                    </b>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    @elseif($student->status == 'DITOLAK')
                                                                                        <div class="card card-danger">
                                                                                            <div class="card-header">
                                                                                                <h4
                                                                                                    class="card-title w-100">
                                                                                                    <a class="d-block w-100"
                                                                                                        data-toggle="collapse"
                                                                                                        href="#collapseThree">
                                                                                                        Ditolak
                                                                                                    </a>
                                                                                                </h4>
                                                                                            </div>
                                                                                            <div id="collapseThree"
                                                                                                class="collapse"
                                                                                                data-parent="#accordion">
                                                                                                <div class="card-body">
                                                                                                    <b>
                                                                                                        Mohon maaf saat
                                                                                                        ini
                                                                                                        anda
                                                                                                        belum
                                                                                                        bisa bergabung
                                                                                                        dengan
                                                                                                        kami,
                                                                                                        tetap semangat!
                                                                                                    </b>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        @if ($student->status == 'DISETUJUI')
                                                            <div class="text-right">
                                                                <a href="{{ url('/cetak-kartu-pendaftaran') }}"
                                                                    target="_blank" class="btn btn-md btn-primary">
                                                                    <i class="fas fa-solid fa-print"></i> Cetak Kartu
                                                                    Pendaftaran
                                                                </a>
                                                            </div>
                                                        @endif()
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
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
</body>

</html>
