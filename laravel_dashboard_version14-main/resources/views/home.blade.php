@extends('layouts.master')
<script src="{{ URL::to('assets/js/paho-mqtt.js') }}"></script>
<script src="{{ URL::to('assets/js/util.js') }}"></script>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<!-- <script src="assets/js/paho-mqtt.js"></script> -->
   <!-- <script src="assets/js/util.js"></script> -->
@section('content')


     <!-- Left Sidebar Start -->
     <div class="left side-menu">
        <div class="slimscroll-menu" id="remove-scroll">
            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu" id="side-menu">
                    <li class="menu-title">Menu</li>
                    <li>
                        <a href="{{ route('home') }}" class="waves-effect">
                            <i class="dripicons-meter"></i><span class="badge badge-info badge-pill float-right"></span> <span> Dashboard </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect mm-active"><i class="dripicons-to-do"></i><span> Data Tersimpan<span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="submenu">
                            <li class="mm-active">
                                <a href="user/management">Data Tersimpan</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i><span> Forms </span></a>
                        <ul class="submenu">
                            <li><a href="{{ route('form/information/new') }}">Information Input</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="waves-effect  mm-active"><i class="dripicons-list"></i><span> Reporting <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="submenu">
                            <li class="mm-active">
                                <a href="{{ route('form/information/show') }}">Report Form Information</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Sidebar -left -->
    </div>
    <!-- Left Sidebar End -->
    <div class="content-page">
        {{-- message --}}
        {!! Toastr::message() !!}
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">
                <div class="page-title-box">
                    <div class="row align-items-center ">
                        <div class="col-md-8">
                            <div class="page-title-box">
                                <h4 class="page-title">Dhiata</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active">MQTT RealTIme</li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="float-right d-none d-md-block app-datepicker">
                                <input type="text" class="form-control" data-date-format="MM dd, yyyy" readonly="readonly" id="datepicker">
                                <i class="mdi mdi-chevron-down mdi-drop"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page-title -->

                <!-- start top-Contant -->
                <div class="row">
                <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center p-1">
                                    <div class="col-lg-9">
                                    <h1 ALIGN=RIGHT class="font-22">LoRa 1      ‎    ‎      ‎        </h1>
                                        <h4 id="" class="text-primary pt-5 mb-2"></h4>
                                    </div>
                                    <div class="col-lg-6">
                                        <div id="chart3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center p-1">
                                    <div class="col-lg-6">
                                        <h5 class="font-16"> HUMIDITY SENSOR</h5>
                                        <h4 id="hum1" class="text-info pt-3 mb-0">0</h4>
                                    </div>
                                    <div class="col-lg-6">
                                        <div id="chart1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center p-1">
                                    <div class="col-lg-6">
                                        <h5 class="font-16">LIGHT SENSOR</h5>
                                        <h4 id="lux1" class="text-warning pt-3 mb-0">0</h4>
                                    </div>
                                    <div class="col-lg-6">
                                        <div id="chart2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center p-1">
                                    <div class="col-lg-6">
                                        <h5 class="font-16">RAIN SENSOR</h5>
                                        <h4 id="rain1" class="text-primary pt-3 mb-0">0</h4>
                                    </div>
                                    <div class="col-lg-6">
                                        <div id="chart3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center p-1">
                                    <div class="col-lg-9">
                                        <h1 ALIGN=RIGHT class="font-22">LoRa 2      ‎    ‎      ‎        </h1>
                                        <h4 id="" class="text-primary pt-5 mb-2"></h4>
                                    </div>
                                    <div class="col-lg-6">
                                        <div id="chart3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center p-1">
                                    <div class="col-lg-6">
                                        <h5 class="font-16">HUMIDITY SENSOR</h5>
                                        <h4 id="hum2" class="text-danger pt-3 mb-0">0</h4>
                                    </div>
                                    <div class="col-lg-6">
                                        <div id="chart4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center p-1">
                                    <div class="col-lg-6">
                                        <h5 class="font-16">LIGHT SENSOR</h5>
                                        <h4 id="lux2" class="text-primary pt-3 mb-0">0</h4>
                                    </div>
                                    <div class="col-lg-6">
                                        <div id="chart3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center p-1">
                                    <div class="col-lg-6">
                                        <h5 class="font-16">RAIN SENSOR</h5>
                                        <h4 id="rain2" class="text-danger pt-3 mb-0">0</h4>
                                    </div>
                                    <div class="col-lg-6">
                                        <div id="chart4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div>
<canvas id="myChart" width="400" height="400"></canvas>
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" 
integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==
" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<canvas id="myChart" width="400" height="400"></canvas>
<script>
    setInterval(() => Livewire.emit('ubahData'),3000);
   
    console.log(chartData);
const ctx = document.getElementById('myChart');
const myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: chartData.label,
        datasets: [{
            label: 'RSSI',
            data: chartData.data,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
            
        },{
            label: 'snr',
            data: chartData.data2,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1

        }
    ]
        
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
Livewire.on('berhasilUpdate', event => {
    var chartData = JSON.parse(event.data);
    console. log(chartData)
})
</script>


@endpush
</div>
                <!-- end top-Contant -->

                
            <!-- container-fluid -->
        </div>
    </div>
    <!-- content --> 
    <footer class="footer">
        © 2022 Dhiata <span class="d-none d-sm-inline-block"> - MQTT <i class="mdi mdi-heart text-danger"></i> by A.Safa Dhiata</span>.
    </footer>

    
@endsection

