@php
    $title = 'data-pendaftaran';
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
                            <h1 class="m-0">Data Pendaftaran</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">Dashboard</li>
                                <li class="breadcrumb-item active">Data Pendaftaran</li>
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
                                    <h4>Data Pendaftaran</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive text-nowrap">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Pas Foto</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Tempat Tanggal Lahir</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                @endphp
                                                @foreach ($students as $row)
                                                    <tr>
                                                        <th>{{ $no++ . '.' }}</td>
                                                        <td>
                                                            <img src="{{ asset('storage/' . $row->pasfoto) }}"
                                                                class="rounded mx-auto d-block img-thumbnail img-responsive"
                                                                style="max-height: 120px; max-width: 120px;">
                                                        </td>
                                                        <td>
                                                            <a onclick="getPendaftar({{ $row->id }})"
                                                                href="javascript:void(0)" class="text-info"
                                                                data-toggle="modal" data-target="#modal-lg">
                                                                <b>
                                                                    {{ $row->nama }}
                                                                </b>
                                                            </a>
                                                            {{-- MODAL LIER --}}
                                                            <div class="modal fade" id="modal-lg">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title">Data Pendaftaran
                                                                            </h4>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form>
                                                                                @csrf
                                                                                <table
                                                                                    class="table table-sm table-bordered">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <th rowspan="4"
                                                                                                class="text-center">
                                                                                                <div
                                                                                                    class="text-center">
                                                                                                    <img src=""
                                                                                                        id="_pasfoto"
                                                                                                        class="rounded mx-auto d-block img-thumbnail img-responsive"
                                                                                                        style="max-width: 200px;">
                                                                                                </div>
                                                                                            </th>
                                                                                            <td>
                                                                                                <div
                                                                                                    class="form-group row">
                                                                                                    <label
                                                                                                        for="inputEmail3"
                                                                                                        class="col-sm-4 col-form-label">Nama
                                                                                                        Lengkap</label>
                                                                                                    <div
                                                                                                        class="col-sm-8">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            id="_nama"
                                                                                                            readonly>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <div
                                                                                                    class="form-group row">
                                                                                                    <label
                                                                                                        for="inputEmail3"
                                                                                                        class="col-sm-4 col-form-label">Email</label>
                                                                                                    <div
                                                                                                        class="col-sm-8">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            id="_email"
                                                                                                            readonly>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <div
                                                                                                    class="form-group row">
                                                                                                    <label
                                                                                                        for="inputEmail3"
                                                                                                        class="col-sm-4 col-form-label">Jenis
                                                                                                        Kelamin</label>
                                                                                                    <div
                                                                                                        class="col-sm-8">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            id="_jenisKelamin"
                                                                                                            readonly>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <div
                                                                                                    class="form-group row">
                                                                                                    <label
                                                                                                        for="inputEmail3"
                                                                                                        class="col-sm-4 col-form-label">Tempat
                                                                                                        Tanggal
                                                                                                        Lahir</label>
                                                                                                    <div
                                                                                                        class="col-sm-8">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            id="_ttl"
                                                                                                            readonly>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td colspan="2">
                                                                                                <div
                                                                                                    class="form-group row">
                                                                                                    <label
                                                                                                        for="inputEmail3"
                                                                                                        class="col-sm-4 col-form-label">Alamat</label>
                                                                                                    <div
                                                                                                        class="col-sm-8">
                                                                                                        <blade
                                                                                                            ___html_tags_0___ />
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td colspan="2">
                                                                                                <div
                                                                                                    class="form-group row">
                                                                                                    <label
                                                                                                        for="inputEmail3"
                                                                                                        class="col-sm-4 col-form-label">Gelombang</label>
                                                                                                    <div
                                                                                                        class="col-sm-8">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            id="_gelombang"
                                                                                                            readonly>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td colspan="2">
                                                                                                <div
                                                                                                    class="form-group row">
                                                                                                    <label
                                                                                                        for="inputEmail3"
                                                                                                        class="col-sm-4 col-form-label">Program
                                                                                                        Studi</label>
                                                                                                    <div
                                                                                                        class="col-sm-8">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            id="_prodi"
                                                                                                            readonly>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                                <table class="table table-bordered">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Dokumen</th>
                                                                                            <th>File</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>Kartu Keluarga</td>
                                                                                            <td>
                                                                                                <a href=""
                                                                                                    id="_kk"
                                                                                                    target="_blank"
                                                                                                    class="btn btn-md btn-outline-info">
                                                                                                    <i
                                                                                                        class="fa fa-solid fa-file"></i>
                                                                                                </a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Kartu Tanda Penduduk
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href=""
                                                                                                    id="_ktp"
                                                                                                    target="_blank"
                                                                                                    class="btn btn-md btn-outline-info">
                                                                                                    <i
                                                                                                        class="fa fa-solid fa-file"></i>
                                                                                                </a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Transkrip</td>
                                                                                            <td>
                                                                                                <a href=""
                                                                                                    id="_transkrip"
                                                                                                    target="_blank"
                                                                                                    class="btn btn-md btn-outline-info">
                                                                                                    <i
                                                                                                        class="fa fa-solid fa-file"></i>
                                                                                                </a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Ijazah</td>
                                                                                            <td>
                                                                                                <a href=""
                                                                                                    id="_ijazah"
                                                                                                    target="_blank"
                                                                                                    class="btn btn-md btn-outline-info">
                                                                                                    <i
                                                                                                        class="fa fa-solid fa-file"></i>
                                                                                                </a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Bukti Pembayaran</td>
                                                                                            <td>
                                                                                                <a href=""
                                                                                                    id="_buktipembayaran"
                                                                                                    target="_blank"
                                                                                                    class="btn btn-md btn-outline-info">
                                                                                                    <i
                                                                                                        class="fa fa-solid fa-file"></i>
                                                                                                </a>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </form>
                                                                        </div>
                                                                        <div
                                                                            class="modal-footer justify-content-right">
                                                                            <button type="button"
                                                                                class="btn btn-default"
                                                                                data-dismiss="modal">Batal</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- MODAL LIER --}}
                                                        </td>
                                                        <td>{{ $row->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}
                                                        </td>
                                                        <td>{{ $row->tempat_lahir . ', ' . \Carbon\Carbon::parse($row->tanggal_lahir)->isoFormat('D-MM-Y') }}
                                                        </td>
                                                        <td>
                                                            @if ($row->status == 'DAFTAR')
                                                                <span class="badge badge-warning">Belum
                                                                    Disetujui</span>
                                                            @elseif ($row->status == 'DISETUJUI')
                                                                <span class="badge badge-success">Diterima</span>
                                                            @elseif ($row->status == 'DITOLAK')
                                                                <span class="badge badge-danger">Ditolak</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div class="form-group row">
                                                                @if ($row->status == 'DISETUJUI')
                                                                    <div class="col-sm-6">
                                                                        <a href="{{ url('/kartu-pendaftaran-admin') . '/' . $row->id }}"
                                                                            target="_blank"
                                                                            class="btn btn-outline-primary"
                                                                            data-toggle="tooltip" data-placement="top"
                                                                            title="Cetak Kartu Pendaftaran">
                                                                            <i class="fas fa-solid fa-print"></i>
                                                                            Cetak
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button
                                                                            onclick=" hapusPendaftar({{ $row->id }})"
                                                                            target="_blank"
                                                                            class="btn btn-outline-danger"
                                                                            data-toggle="tooltip" data-placement="top"
                                                                            title="Hapus Data Pendaftar">
                                                                            <i class="fas fa-trash fa-print"></i>
                                                                            Hapus
                                                                        </button>
                                                                    </div>
                                                                @else
                                                                    <div class="col-sm-6">
                                                                        <select class="form-control select_aksi"
                                                                            name="select_aksi"
                                                                            onchange="seleksiPendaftaran(this, {{ $row->id }})"
                                                                            {{ $row->status == 'DISETUJUI' || $row->status == 'DITOLAK' ? 'disabled' : '' }}>
                                                                            <option value="0" selected disabled>
                                                                                Aksi
                                                                            </option>
                                                                            <option value="DISETUJUI">Terima</option>
                                                                            <option value="DITOLAK">Tolak</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <button
                                                                            onclick=" hapusPendaftar({{ $row->id }})"
                                                                            target="_blank"
                                                                            class="btn btn-outline-danger"
                                                                            data-toggle="tooltip" data-placement="top"
                                                                            title="Hapus Data Pendaftar">
                                                                            <i class="fas fa-trash fa-print"></i>
                                                                            Hapus
                                                                        </button>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Pas Foto</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Tempat Tanggal Lahir</th>
                                                    <th>Status</th>
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

            function getPendaftar(siswa) {
                $.ajax({
                    data: {
                        'siswa': siswa,
                    },
                    url: "{{ route('/get-pendaftar') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        var urlDokumen = '{{ URL::asset('storage') }}'
                        $("#_pasfoto").attr('src', urlDokumen + '/' + data.pasfoto);
                        $('#_nama').val(data.nama);
                        $('#_email').val(data.email);
                        if (data.jenis_kelamin == "L") {
                            $('#_jenisKelamin').val('Laki - laki');
                        } else if (data.jenis_kelamin == "P") {
                            $('#_jenisKelamin').val('Perempuan');
                        }
                        $('#_ttl').val(data.tempat_lahir + ', ' + data.tanggal_lahir);
                        $('#_alamat').val(data.alamat);
                        $('#_gelombang').val(data.gelombang);
                        $('#_prodi').val(data.prodi);

                        $("#_kk").attr('href', urlDokumen + '/' + data.kk);
                        $("#_ktp").attr('href', urlDokumen + '/' + data.ktp);
                        $("#_transkrip").attr('href', urlDokumen + '/' + data.transkrip);
                        $("#_ijazah").attr('href', urlDokumen + '/' + data.transkrip);
                        $("#_buktipembayaran").attr('href', urlDokumen + '/' + data.buktipembayaran);
                    },
                    error: function(data) {
                        console.log('Error:', data);
                    }
                });
            }

            function seleksiPendaftaran(selectObject, siswa) {
                var value = selectObject.value;

                if (value === "DISETUJUI") {
                    $(".select_aksi").val("0").change();
                    if (confirm('Apakah anda yakin?')) {
                        $.ajax({
                            data: {
                                'status_daftar': value,
                                'siswa': siswa,
                            },
                            url: "{{ route('/approve-pendaftaran') }}",
                            type: "POST",
                            dataType: 'json',
                            success: function(data) {
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
                } else if (value === "DITOLAK") {
                    $(".select_aksi").val("0").change();
                    if (confirm('Apakah anda yakin?')) {
                        $.ajax({
                            data: {
                                'status_daftar': value,
                                'siswa': siswa,
                            },
                            url: "{{ route('/denied-pendaftaran') }}",
                            type: "POST",
                            dataType: 'json',
                            success: function(data) {
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
            }

            function hapusPendaftar(siswa) {
                if (confirm('Hapus data?')) {
                    $.ajax({
                        data: {
                            'siswa': siswa,
                        },
                        url: "{{ route('/hapus-pendaftar') }}",
                        type: "POST",
                        dataType: 'json',
                        success: function(data) {
                            // alert(data);
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
