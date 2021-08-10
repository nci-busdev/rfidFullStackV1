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
                                <a href="{{ route('admin.item.index') }}">Item</a>
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
                                    <b>Tambah Data Item</b>
                                </h5>
                                <hr />
                                <form action="{{ route('admin.item.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror"  value="{{ old('name') }}" placeholder="Nama" />
                                        @error('name')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Gambar</label>
                                        <input type="text" name="image"
                                            class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}"
                                            placeholder="Gambar" />
                                        @error('image')
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
