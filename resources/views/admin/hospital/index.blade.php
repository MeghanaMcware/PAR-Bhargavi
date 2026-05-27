@extends('admin.layout.app')
@section('title') Patient List @endsection
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
                                <i data-feather="home"></i>
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
            <a href="{{ url('/hospital/create') }}" class="btn btn-primary">
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

                            <tr>
                                <td>01</td>
                                <td>MS Ramiah Memorial</td>
                                <td>98989898989</td>
                                <td>msramiahmemorial@gmail.com</td>
                                <td>Address</td>

                                <td>
                                    <a href="{{ url('/hospital/view') }}" class="btn btn-primary btn-sm">
                                        <i class="bi bi-eye me-1"></i> View
                                    </a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>

@endsection