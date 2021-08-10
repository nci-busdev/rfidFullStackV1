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
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->image }}</td>
                                            <td>
                                                <form onsubmit="return confirm('Apakah anda yakin?')"
                                                    action="{{ route('admin.item.destroy', $item->id) }}" method="POST">
                                                    <a href="{{ route('admin.item.edit', $item->id) }}"
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
