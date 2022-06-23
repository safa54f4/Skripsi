@extends('layouts.master')
@section('content')

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center ">
                    <div class="col-md-8">
                        <div class="page-title-box">
                            <h4 class="page-title">Dhiata</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Melihat data yang tersimpan</li>
                            </ol>
                        </div>
                    </div>
                    <!-- <div class="col-md-4">
                            <div class="float-right d-none d-md-block app-datepicker">
                                <input type="text" class="form-control" data-date-format="MM dd, yyyy" readonly="readonly" id="datepicker">
                                <i class="mdi mdi-chevron-down mdi-drop"></i>
                            </div>
                        </div> -->
                </div>
            </div>
            {{-- message --}}
            {!! Toastr::message() !!}
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 text-align="inherit" class="mt-0 header-title,text-center">Data Dari Sensor Tersimpan</h4>
                            <div class="row pb-4">

                            </div>
                            </p>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID</th>
                                        <th>LoRa</th>
                                        <th>Tanggal Database</th>
                                        <th>Cahaya</th>
                                        <th>Kelembapan Tanah</th>
                                        <th>Cuaca</th>
                                        <th>Jam RTC</th>
                                        <th>RSSI</th>
                                        <th>SNR</th>
                                        <!-- <th>Role Name</th> -->
                                        <th class="text-center">Modify</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($user as $key => $item)
                                    <tr>
                                        <td class="no">{{ ++$key }}</td>
                                        <td class="id">{{ $item->id }}</td>
                                        <td class="name">{{ $item->id_alat }}</td>
                                        <td class="name">{{ $item->date }} </td>


                                        @if($item->lux >  2000)
                                        <td class="email">Terang</td>
                                        @elseif($item->lux <  2000 and $item->lux >  1000 )
                                        <td class="email">redup</td>
                                        @elseif($item->lux <  1000 and $item->lux >  100 )
                                        <td class="email">gelap</td>
                                        @else
                                        <td class="email">Malam Hari</td>
                                        @endif



                                        <td class="phone_number">{{ $item->hum }}</td>
                                        <td class="status">{{ $item->rain }}</td>
                                        <td class="status">{{ $item->jam }}</td>
                                        <td class="status">{{ $item->rssi }}</td>
                                        <td class="status">{{ $item->snr }}</td>
                                        <!-- @if($item->rain =='2705')
                                            <td class="status"><span class="badge bg-success" style="font-size: 12px;">{{ $item->rain }}</span></td>
                                            @endif -->



                                        <td class="text-center">
                                            <!-- <a href="{{ route('user/add/new') }}">
                                                    <i class="fas fa-user-plus" style="font-size: 20px;color:#0e86e7"></i>
                                                </a>
                                                <a href="{{ url('view/detail/'.$item->id) }}">
                                                    <i class="fas fa-edit" style="font-size: 20px;color:#20d4b6"></i>
                                                </a>   -->
                                            <a href="{{ url('delete_user/'.$item->id) }}" onclick="return confirm('Are you sure to want to delete it?')"><i class="fas fa-trash-alt" style="font-size: 20px;color:#fb4365"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end page-title -->
        </div>
        <!-- container-fluid -->
    </div>
</div>
<!-- content -->
<footer class="footer">
    © 2022 Dhiata <span class="d-none d-sm-inline-block"> - MQTT <i class="mdi mdi-heart text-danger"></i> by A.Safa Dhiata</span>.
</footer>
@endsection