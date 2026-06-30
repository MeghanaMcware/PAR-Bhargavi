@extends('admin.layout.app')
@section('title') Hospital List @endsection
@section('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

@endsection
@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row d-flex justify-content-end">
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="home-item" href="">
                                <i class="fa-solid fa-house"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"> Hospital List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <div class="d-flex justify-content-start mb-3">
            <a href="{{ route('admin.hospital.create') }}" class="btn btn-primary">
                <i class="bi bi-plus me-1"></i> Add Hospital
            </a>
        </div>
        <div class="card">
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-bordered table-striped text-center align-middle" id="data-source-1"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th style="width:5%">Sl.No</th>
                                <th style="white-space:nowrap">Hospital Name</th>
                                <th style="white-space:nowrap">Phone No.</th>
                                <th style="white-space:nowrap">Email</th>
                                <th style="white-space:nowrap">Address</th>
                                <th style="width:10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($hospitals as $key => $hospital)
                            <tr>
                                <td>{{ str_pad($key + 1, 2, '0', STR_PAD_LEFT) }}</td>
                                <td>{{ $hospital->name }}</td>
                                <td>{{ $hospital->phone }}</td>
                                <td>{{ $hospital->email }}</td>
                                <td>{{ $hospital->address }}</td>
                                <td>
                                    <div class="d-flex gap-2 justify-content-center">
                                        <a href="{{ route('admin.hospital.show', $hospital->id) }}" class="btn btn-primary btn-sm">
                                            <i class="bi bi-eye"></i> View
                                        </a>
                                        <a href="{{ route('admin.hospital.edit', $hospital->id) }}" class="btn btn-success btn-sm">
                                            <i class="bi bi-pencil"></i> Edit
                                        </a>
                                        <form action="{{ route('admin.hospital.destroy', $hospital->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this hospital?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="bi bi-trash"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>

@endsection