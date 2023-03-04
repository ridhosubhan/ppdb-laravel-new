@php
    $title = 'Dashboard';
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
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            @if (auth()->user()->level == 'admin')
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>{{ $pendaftarTotal }}</h3>
                                        <p>Pendaftaran</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-bag"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <h3>{{ $pendaftarDiterima }}</h3>
                                        <p>Pendaftar Diterima</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <h3>{{ $registrasiAKun }}</h3>
                                        <p>Registrasi Akun</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                        <h3>{{ $visitorTotal }}</h3>
                                        <p>Total Visitor</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-pie-graph"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <section class="col-lg-7 connectedSortable ui-sortable">
                                <div class="card">
                                    <div class="card-header ui-sortable-handle" style="cursor: move;">
                                        <h3 class="card-title">
                                            <i class="fa fa-regular fa-school mr-1"></i>
                                            Selamat datang di MMT Unjani
                                        </h3>
                                        <div class="card-tools">
                                            <ul class="nav nav-pills ml-auto">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#revenue-chart"
                                                        data-toggle="tab">{{ auth()->user()->name }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content p-0">


                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="col-lg-5 connectedSortable ui-sortable">
                                <div class="card bg-gradient-success">
                                    <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                                        <h3 class="card-title">
                                            <i class="far fa-calendar-alt"></i>
                                            Calendar
                                        </h3>
                                        <div class="card-tools">

                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success btn-sm dropdown-toggle"
                                                    data-toggle="dropdown" data-offset="-52">
                                                    <i class="fas fa-bars"></i>
                                                </button>
                                                <div class="dropdown-menu" role="menu">
                                                    <a href="#" class="dropdown-item">Add new event</a>
                                                    <a href="#" class="dropdown-item">Clear events</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item">View calendar</a>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-success btn-sm"
                                                data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-success btn-sm"
                                                data-card-widget="remove">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div id="calendar" style="width: 100%">
                                            <div class="bootstrap-datetimepicker-widget usetwentyfour">
                                                <ul class="list-unstyled">
                                                    <li class="show">
                                                        <div class="datepicker">
                                                            <div class="datepicker-days" style="">
                                                                <table class="table table-sm">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="prev" data-action="previous">
                                                                                <span class="fa fa-chevron-left"
                                                                                    title="Previous Month"></span>
                                                                            </th>
                                                                            <th class="picker-switch"
                                                                                data-action="pickerSwitch"
                                                                                colspan="5" title="Select Month">
                                                                                January 2023</th>
                                                                            <th class="next" data-action="next">
                                                                                <span class="fa fa-chevron-right"
                                                                                    title="Next Month"></span>
                                                                            </th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="dow">Su</th>
                                                                            <th class="dow">Mo</th>
                                                                            <th class="dow">Tu</th>
                                                                            <th class="dow">We</th>
                                                                            <th class="dow">Th</th>
                                                                            <th class="dow">Fr</th>
                                                                            <th class="dow">Sa</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td data-action="selectDay"
                                                                                data-day="01/01/2023"
                                                                                class="day weekend">1</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="01/02/2023" class="day">2
                                                                            </td>
                                                                            <td data-action="selectDay"
                                                                                data-day="01/03/2023" class="day">3
                                                                            </td>
                                                                            <td data-action="selectDay"
                                                                                data-day="01/04/2023" class="day">4
                                                                            </td>
                                                                            <td data-action="selectDay"
                                                                                data-day="01/05/2023" class="day">5
                                                                            </td>
                                                                            <td data-action="selectDay"
                                                                                data-day="01/06/2023" class="day">6
                                                                            </td>
                                                                            <td data-action="selectDay"
                                                                                data-day="01/07/2023"
                                                                                class="day weekend">7</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-action="selectDay"
                                                                                data-day="01/08/2023"
                                                                                class="day weekend">8</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="01/09/2023" class="day">9
                                                                            </td>
                                                                            <td data-action="selectDay"
                                                                                data-day="01/10/2023" class="day">
                                                                                10</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="01/11/2023" class="day">
                                                                                11</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="01/12/2023" class="day">
                                                                                12</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="01/13/2023" class="day">
                                                                                13</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="01/14/2023"
                                                                                class="day weekend">14</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-action="selectDay"
                                                                                data-day="01/15/2023"
                                                                                class="day weekend">15</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="01/16/2023" class="day">
                                                                                16</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="01/17/2023" class="day">
                                                                                17</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="01/18/2023" class="day">
                                                                                18</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="01/19/2023"
                                                                                class="day active today">19</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="01/20/2023" class="day">
                                                                                20</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="01/21/2023"
                                                                                class="day weekend">21</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-action="selectDay"
                                                                                data-day="01/22/2023"
                                                                                class="day weekend">22</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="01/23/2023" class="day">
                                                                                23</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="01/24/2023" class="day">
                                                                                24</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="01/25/2023" class="day">
                                                                                25</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="01/26/2023" class="day">
                                                                                26</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="01/27/2023" class="day">
                                                                                27</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="01/28/2023"
                                                                                class="day weekend">28</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-action="selectDay"
                                                                                data-day="01/29/2023"
                                                                                class="day weekend">29</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="01/30/2023" class="day">
                                                                                30</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="01/31/2023" class="day">
                                                                                31</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="02/01/2023" class="day new">
                                                                                1</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="02/02/2023" class="day new">
                                                                                2</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="02/03/2023" class="day new">
                                                                                3</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="02/04/2023"
                                                                                class="day new weekend">4</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-action="selectDay"
                                                                                data-day="02/05/2023"
                                                                                class="day new weekend">5</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="02/06/2023" class="day new">
                                                                                6</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="02/07/2023" class="day new">
                                                                                7</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="02/08/2023" class="day new">
                                                                                8</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="02/09/2023" class="day new">
                                                                                9</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="02/10/2023" class="day new">
                                                                                10</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="02/11/2023"
                                                                                class="day new weekend">11</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="datepicker-months" style="display: none;">
                                                                <table class="table-condensed">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="prev" data-action="previous">
                                                                                <span class="fa fa-chevron-left"
                                                                                    title="Previous Year"></span>
                                                                            </th>
                                                                            <th class="picker-switch"
                                                                                data-action="pickerSwitch"
                                                                                colspan="5" title="Select Year">
                                                                                2023</th>
                                                                            <th class="next" data-action="next">
                                                                                <span class="fa fa-chevron-right"
                                                                                    title="Next Year"></span>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td colspan="7"><span
                                                                                    data-action="selectMonth"
                                                                                    class="month active">Jan</span><span
                                                                                    data-action="selectMonth"
                                                                                    class="month">Feb</span><span
                                                                                    data-action="selectMonth"
                                                                                    class="month">Mar</span><span
                                                                                    data-action="selectMonth"
                                                                                    class="month">Apr</span><span
                                                                                    data-action="selectMonth"
                                                                                    class="month">May</span><span
                                                                                    data-action="selectMonth"
                                                                                    class="month">Jun</span><span
                                                                                    data-action="selectMonth"
                                                                                    class="month">Jul</span><span
                                                                                    data-action="selectMonth"
                                                                                    class="month">Aug</span><span
                                                                                    data-action="selectMonth"
                                                                                    class="month">Sep</span><span
                                                                                    data-action="selectMonth"
                                                                                    class="month">Oct</span><span
                                                                                    data-action="selectMonth"
                                                                                    class="month">Nov</span><span
                                                                                    data-action="selectMonth"
                                                                                    class="month">Dec</span></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="datepicker-years" style="display: none;">
                                                                <table class="table-condensed">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="prev" data-action="previous">
                                                                                <span class="fa fa-chevron-left"
                                                                                    title="Previous Decade"></span>
                                                                            </th>
                                                                            <th class="picker-switch"
                                                                                data-action="pickerSwitch"
                                                                                colspan="5" title="Select Decade">
                                                                                2020-2029</th>
                                                                            <th class="next" data-action="next">
                                                                                <span class="fa fa-chevron-right"
                                                                                    title="Next Decade"></span>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td colspan="7"><span
                                                                                    data-action="selectYear"
                                                                                    class="year old">2019</span><span
                                                                                    data-action="selectYear"
                                                                                    class="year">2020</span><span
                                                                                    data-action="selectYear"
                                                                                    class="year">2021</span><span
                                                                                    data-action="selectYear"
                                                                                    class="year">2022</span><span
                                                                                    data-action="selectYear"
                                                                                    class="year active">2023</span><span
                                                                                    data-action="selectYear"
                                                                                    class="year">2024</span><span
                                                                                    data-action="selectYear"
                                                                                    class="year">2025</span><span
                                                                                    data-action="selectYear"
                                                                                    class="year">2026</span><span
                                                                                    data-action="selectYear"
                                                                                    class="year">2027</span><span
                                                                                    data-action="selectYear"
                                                                                    class="year">2028</span><span
                                                                                    data-action="selectYear"
                                                                                    class="year">2029</span><span
                                                                                    data-action="selectYear"
                                                                                    class="year old">2030</span></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="datepicker-decades" style="display: none;">
                                                                <table class="table-condensed">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="prev" data-action="previous">
                                                                                <span class="fa fa-chevron-left"
                                                                                    title="Previous Century"></span>
                                                                            </th>
                                                                            <th class="picker-switch"
                                                                                data-action="pickerSwitch"
                                                                                colspan="5">2000-2090</th>
                                                                            <th class="next" data-action="next">
                                                                                <span class="fa fa-chevron-right"
                                                                                    title="Next Century"></span>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td colspan="7"><span
                                                                                    data-action="selectDecade"
                                                                                    class="decade old"
                                                                                    data-selection="2006">1990</span><span
                                                                                    data-action="selectDecade"
                                                                                    class="decade"
                                                                                    data-selection="2006">2000</span><span
                                                                                    data-action="selectDecade"
                                                                                    class="decade"
                                                                                    data-selection="2016">2010</span><span
                                                                                    data-action="selectDecade"
                                                                                    class="decade active"
                                                                                    data-selection="2026">2020</span><span
                                                                                    data-action="selectDecade"
                                                                                    class="decade"
                                                                                    data-selection="2036">2030</span><span
                                                                                    data-action="selectDecade"
                                                                                    class="decade"
                                                                                    data-selection="2046">2040</span><span
                                                                                    data-action="selectDecade"
                                                                                    class="decade"
                                                                                    data-selection="2056">2050</span><span
                                                                                    data-action="selectDecade"
                                                                                    class="decade"
                                                                                    data-selection="2066">2060</span><span
                                                                                    data-action="selectDecade"
                                                                                    class="decade"
                                                                                    data-selection="2076">2070</span><span
                                                                                    data-action="selectDecade"
                                                                                    class="decade"
                                                                                    data-selection="2086">2080</span><span
                                                                                    data-action="selectDecade"
                                                                                    class="decade"
                                                                                    data-selection="2096">2090</span><span
                                                                                    data-action="selectDecade"
                                                                                    class="decade old"
                                                                                    data-selection="2106">2100</span>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="picker-switch accordion-toggle"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>

                    </div>
                </section>
            @elseif (auth()->user()->level == 'siswa')
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">

                            <!-- /.col-md-6 -->
                            <div class="col-lg-12">
                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <h5 class="m-0">Halo {{ auth()->user()->name }}, Selamat datang di MMT
                                            Unjani</h5>
                                    </div>
                                    <div class="card-body">
                                        {{-- <h6 class="card-title">Status Pendaftaran</h6> --}}
                                        <p class="card-text">Silakan klik tombol dibawah ini untuk informasi status
                                            pendaftaran lebih
                                            lanjut</p>
                                        <a href="{{ url('/status-pendaftaran') }}" class="btn btn-primary">Status
                                            Pendaftaran</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-6 -->
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
            @endif

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
