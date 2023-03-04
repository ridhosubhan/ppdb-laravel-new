<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>MMT UNJANI {{ $tahun }}</title>
    <style>
        @font-face {
            font-family: "source_sans_proregular";
            src: local("Source Sans Pro"), url("fonts/sourcesans/sourcesanspro-regular-webfont.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;

        }

        body {
            font-family: "source_sans_proregular", Calibri, Candara, Segoe, Segoe UI, Optima, Arial, sans-serif;
        }

        /* table {
            border-collapse: collapse;
            width: 100%;
        } */

        /* td,
        th {
            border: 1px solid #000000;
        }

        .tablenoborder {
            border: none !important;
        } */
    </style>
</head>

<body>
    <table style="width:100%;">
        <tbody>
            <tr>
                <td rowspan="4" style="width:59.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">
                        <img src="{{ public_path('user/images/logounjani.png') }}" width="109" height="114"
                            alt="">
                    </p>
                </td>
                <td style="width:350.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:16pt;"><strong><span
                                style="font-family:Arial;">YAYASAN KARTIKA EKA PAKSI</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width:350.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:16pt;"><strong><span
                                style="font-family:Arial;">UNIVERSITAS JENDRAL AHMAD YANI</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width:350.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:16pt;"><strong><span
                                style="font-family:Arial;">(UNJANI)</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width:350.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><strong><span
                                style="font-family:Arial; font-size:9pt;">Kampus Cimahi : Jl. Terusan Jend.
                                Sudirman&nbsp;</span></strong><a href="http://www.unjani.ac.id"
                            style="text-decoration:none;"><strong><u><span
                                        style="font-family:Arial; font-size:9pt; color:#0000ff;">www.unjani.ac.id</span></u></strong></a><strong><span
                                style="font-family:Arial; font-size:9pt;">&nbsp;Cimahi Telp : (022)
                                6631861-6656190</span></strong></p>
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><strong><span
                                style="font-family:Arial; font-size:9pt;">Kampus Bandung : Jl. Gatot
                                Subroto&nbsp;</span></strong><a href="http://www.unjani.ac.id"
                            style="text-decoration:none;"><strong><u><span
                                        style="font-family:Arial; font-size:9pt; color:#0000ff;">www.unjani.ac.id</span></u></strong></a><strong><span
                                style="font-family:Arial; font-size:9pt;">&nbsp;Cimahi Telp : (022)
                                7312741</span></strong></p>
                </td>
            </tr>
        </tbody>
    </table>

    <hr style="height:2px;border-width:0;color:black;background-color:black">

    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:16pt;"><strong><span
                style="font-family:Arial;">KARTU BUKTI PENDAFTARAN</span></strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span style="font-family:Arial;">&nbsp;</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span style="font-family:Arial;">&nbsp;</span></p>
    <ol style="margin:0pt; padding-left:0pt;" type="A">
        <li
            style="margin-left:16pt; text-align:left; padding-left:2pt; font-family:Arial; font-size:11pt; font-weight:bold;">
            INFORMASI PRIBADI</li>
    </ol>
    <ol style="margin:0pt; padding-left:0pt;" type="1">
        <li
            style="margin-left:32.02pt; text-align:left; line-height:150%; padding-left:3.68pt; font-family:Arial; font-size:11pt;">
            Nama Lengkap <span style="margin-left:34.02pt;">&ensp;</span> : {{ $student->nama }}</li>
        <li
            style="margin-left:32.02pt;
                text-align:left; line-height:150%; padding-left:3.68pt; font-family:Arial; font-size:11pt;">
            E-mail <span style="margin-left:72.02pt;">&ensp;</span> : {{ $student->email }}</li>
        <li
            style="margin-left:32.02pt; text-align:left; line-height:150%; padding-left:3.68pt; font-family:Arial; font-size:11pt;">
            Jenis Kelamin <span style="margin-left:40.02pt;">&ensp;</span> :
            {{ $student->jenis_kelamin == 'L' ? 'Laki - laki' : 'Perempuan' }}</li>
        <li
            style="margin-left:32.02pt; text-align:left; line-height:150%; padding-left:3.68pt; font-family:Arial; font-size:11pt;">
            Tempat Tanggal Lahir <span style="margin-left:4.02pt;">&ensp;</span> :
            {{ $student->tempat_lahir . ', ' . \Carbon\Carbon::parse($student->tanggal_lahir)->isoFormat('D MMMM Y') }}
        </li>
        <li
            style="margin-left:32.02pt; text-align:left; line-height:150%; padding-left:3.68pt; font-family:Arial; font-size:11pt;">
            Alamat <span style="margin-left:70.02pt;">&ensp;</span> : {{ $student->alamat }}</li>
        <li
            style="margin-left:32.02pt; text-align:left; line-height:150%; padding-left:3.68pt; font-family:Arial; font-size:11pt;">
            Gelombang <span style="margin-left:51.02pt;">&ensp;</span> : {{ $student->gelombang }}</li>
        <li
            style="margin-left:32.02pt; text-align:left; line-height:150%; padding-left:3.68pt; font-family:Arial; font-size:11pt;">
            Program Studi <span style="margin-left:40.02pt;">&ensp;</span> : {{ $student->prodi }}</li>
    </ol>
    <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="font-family:Arial;">&nbsp;</span></p>
    <ol start="2" style="margin:0pt; padding-left:0pt;" type="A">
        <li
            style="margin-left:16pt; text-align:left; padding-left:2pt; font-family:Arial; font-size:11pt; font-weight:bold;">
            KELENGKAPAN BERKAS</li>
    </ol>
    <table border="1" style="margin-left:16pt; margin-top:10pt; border: 1px solid black; border-collapse: collapse;"
        width="100%">
        <thead>
            <tr>
                <th
                    style="width: 30px; border: 1px solid black;  text-align: center; font-family:Arial; font-size:11pt;">
                    #</th>
                <th style="border: 1px solid black; font-family:Arial; font-size:11pt;">Berkas</th>
                <th
                    style="width: 40px; border: 1px solid black;  text-align: center; font-family:Arial; font-size:11pt;">
                    Kelengkapan
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th style="border: 1px solid black;  text-align: center; font-family:Arial; font-size:11pt;">1.</th>
                <td style="border: 1px solid black; font-family:Arial; font-size:11pt;">Pas Foto</td>
                <td style="border: 1px solid black; font-family:Arial; font-size:11pt; text-align:center;">
                    {{ !empty($student->pasfoto) ? 'Lengkap' : '-' }}
                </td>
            </tr>
            <tr>
                <th style="border: 1px solid black;  text-align: center; font-family:Arial; font-size:11pt;">2.</th>
                <td style="border: 1px solid black; font-family:Arial; font-size:11pt;">Kartu Keluarga</td>
                <td style="border: 1px solid black; font-family:Arial; font-size:11pt; text-align:center;">
                    {{ !empty($student->kk) ? 'Lengkap' : '-' }}
                </td>
            </tr>
            <tr>
                <th style="border: 1px solid black;  text-align: center; font-family:Arial; font-size:11pt;">3.</th>
                <td style="border: 1px solid black; font-family:Arial; font-size:11pt;">Kartu Tanda Penduduk</td>
                <td style="border: 1px solid black; font-family:Arial; font-size:11pt; text-align:center;">
                    {{ !empty($student->ktp) ? 'Lengkap' : '-' }}
                </td>
            </tr>
            <tr>
                <th style="border: 1px solid black;  text-align: center; font-family:Arial; font-size:11pt;">4.</th>
                <td style="border: 1px solid black; font-family:Arial; font-size:11pt;">Transkrip</td>
                <td style="border: 1px solid black; font-family:Arial; font-size:11pt; text-align:center;">
                    {{ !empty($student->transkrip) ? 'Lengkap' : '-' }}
                </td>
            </tr>
            <tr>
                <th style="border: 1px solid black;  text-align: center; font-family:Arial; font-size:11pt;">5.</th>
                <td style="border: 1px solid black; font-family:Arial; font-size:11pt;">Ijazah</td>
                <td style="border: 1px solid black; font-family:Arial; font-size:11pt; text-align:center;">
                    {{ !empty($student->ijazah) ? 'Lengkap' : '-' }}
                </td>
            </tr>
            <tr>
                <th style="border: 1px solid black;  text-align: center; font-family:Arial; font-size:11pt;">6.</th>
                <td style="border: 1px solid black; font-family:Arial; font-size:11pt;">Bukti Pembayaran</td>
                <td style="border: 1px solid black; font-family:Arial; font-size:11pt; text-align:center;">
                    {{ !empty($student->buktipembayaran) ? 'Lengkap' : '-' }}
                </td>
            </tr>
        </tbody>
    </table>


    <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="font-family:Arial;">&nbsp;</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span style="font-family:Arial;">&nbsp;</span></p>
    <table width="100%">
        <tbody>
            <tr>
                <td style="width:207.25pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td style="width:212.5pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                            style="font-family:Arial;">Bandung, {{ $tanggal }}</span></p>
                </td>
            </tr>
            <tr>
                <td style="width:207.25pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                </td>
                <td style="width:212.5pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                            style="font-family:Arial;">Mengetahui,</span></p>
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                            style="font-family:Arial;">Ketua Panitia</span></p>
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                            style="font-family:Arial; color:#eeece1;">(Tanda tangan)</span></p>
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                            style="font-family:Arial;">&nbsp;</span></p>
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span
                            style="font-family:Arial;">_____________________________</span></p>
                </td>
            </tr>
        </tbody>
    </table>
    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span style="font-family:Arial;">&nbsp;</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; margin-left:16pt; text-align:left; font-size:11pt;">
        <strong><em><u><span style="font-family:Arial;">Nb:</span></u></em></strong>
    </p>
    <ul style="margin:0pt; padding-left:0pt; margin-left:16pt;" type="disc">
        <li style="margin-left:12.86pt; padding-left:5.14pt; font-family:serif; font-size:10pt;"><span
                style="font-family:Arial; font-size:11pt;">Kartu pendaftaran ini bisa diperbanyak sendiri.</span></li>
    </ul>
    <p style="margin-top:0pt; margin-bottom:0pt; font-size:1pt;"><span style="font-family:Arial;">&nbsp;</span></p>
    <p style="margin-top:0pt; margin-left:18pt; margin-bottom:0pt; font-size:11pt;"><span
            style="font-family:Arial;">&nbsp;</span></p>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
