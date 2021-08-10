@extends('layouts.main')
@section('container')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-lg-6">
                        <!-- <h1 class="m-0">Example</h1> -->
                    </div>
                    <!-- /.col -->
                    <div class="col-lg-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.location.index') }}">Location</a>
                            </li>
                            <li class="breadcrumb-item active">Tambah</li>
                        </ol>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-center mb-4">
                                    <b>Tambah Data Location</b>
                                </h5>
                                <hr />
                                <form action="{{ route('admin.location.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Id Location</label>
                                        <input type="text" name="id_location"
                                            class="form-control @error('id_location') is-invalid @enderror" value="{{ old('id_location') }}"
                                            placeholder="Id Location" />
                                        @error('id_location')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Nama" />
                                        @error('name')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-success">Tambah</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
