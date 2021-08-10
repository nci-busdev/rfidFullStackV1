@extends('layouts.main')
@section('container')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-lg-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-lg-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard.index') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Home</li>
                        </ol>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            Hello <b>{{ Auth::user()->name }}</b>
                        </div>
                    </div>
                </div>

                <!-- Dummy Data -->
                @include('admin.dashboard.partials.infoBoxes')
                @include('admin.dashboard.partials.donutChart')
                <div class="row">
                    @include('admin.dashboard.partials.tableLastStock')
                    @include('admin.dashboard.partials.tableCurrentStock')
                    @include('admin.dashboard.partials.tableStockIn')
                    @include('admin.dashboard.partials.tableStockOut')
                </div>
                <!-- Dummy Data -->

            </div>
            <!-- /.content -->
        </div>
    @endsection
