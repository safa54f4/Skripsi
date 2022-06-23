
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
                                <h4 class="page-title">Dashboard</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active">Form / Information</li>
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
                {{-- message --}}
                {!! Toastr::message() !!}
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Form Information Datatable</h4>
                                </p>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Full Name</th>
                                            <th>Photo</th>
                                            <th>Sex</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Country</th>
                                            <th class="text-center">Modify</th>
                                        </tr>    
                                    </thead>

                                    <tbody>
                                    @foreach ($data as $key => $item)
                                        <tr>
                                            <td class="id">{{ ++$key }}</td>
                                            <td class="name">{{ $item->fullname }}</td>
                                            <td class="name">
                                                <div class="d-flex mr-3 rounded-circle thumb-md">
                                                    <img class="d-flex mr-3 rounded-circle thumb-md" src="{{ URL::to('/images/'. $item->image) }}" alt="{{ $item->image }}">
                                                </div>
                                            </td>
                                            <td class="role_name">{{ $item->sex }}</td>
                                            <td class="role_name">{{ $item->email }}</td>
                                            <td class="role_name">{{ $item->phone }}</td>
                                            <td class="role_name">{{ $item->country }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('form/information/new') }}">
                                                    <i class="fas fa-user-plus" style="font-size: 20px;color:#0e86e7"></i>
                                                </a>
                                                <a href="{{ url('form/detail/'.$item->id) }}">
                                                    <i class="fas fa-edit" style="font-size: 20px;color:#20d4b6"></i>
                                                </a>  
                                                <a href="{{ url('form/information/delete/'.$item->id) }}" onclick="return confirm('Are you sure to want to delete it?')"><i class="fas fa-trash-alt" style="font-size: 20px;color:#fb4365"></i></a>
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
        © 2021 Soeng <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by SoengSouy</span>.
    </footer>
@endsection
