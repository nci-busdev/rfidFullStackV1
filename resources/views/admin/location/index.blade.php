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
        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Id Location</th>
                                        <th>Name</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($locations as $location)
                                        <tr>
                                            <td>{{ $location->id_location }}</td>
                                            <td>{{ $location->name }}</td>
                                            <td>
                                                <form onsubmit="return confirm('Apakah anda yakin?')"
                                                    action="{{ route('admin.location.destroy', $location->id) }}"
                                                    method="POST">
                                                    <a href="{{ route('admin.location.edit', $location->id) }}"
                                                        class="btn btn-sm btn-warning">Ubah</a>
                                                    @csrf
                                                    @method("DELETE")
                                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
