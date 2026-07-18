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
                                <i class="fa-solid fa-house"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"> Patient List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <div class="d-flex justify-content-start mb-3">
            <a href="{{ route('admin.patients.create') }}" class="btn btn-primary">
                <i class="bi bi-plus me-1"></i> Add Patient
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
                                <th style="white-space:nowrap">UHID</th>
                                <th style="white-space:nowrap">Date of Admission</th>
                                <th style="white-space:nowrap">Time of Presentation</th>
                                <th style="white-space:nowrap">Sex</th>
                                <th style="width:10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($patients as $key => $patient)
                            <tr>
                                <td>{{ str_pad($key + 1, 2, '0', STR_PAD_LEFT) }}</td>
                                <td>{{ $patient->uhid }}</td>
                                <td>{{ $patient->date_of_admission ? \Carbon\Carbon::parse($patient->date_of_admission)->format('d-m-Y') : 'N/A' }}</td>
                                <td>{{ $patient->time_of_presentation ?? 'N/A' }}</td>
                                <td>{{ $patient->sex ?? 'N/A' }}</td>

                                <td class="d-flex flex-row gap-1">
                                    <a href="{{ route('admin.patients.show', $patient->id) }}" class="btn btn-primary btn-sm d-flex flex-row ">
                                        <i class="bi bi-eye me-1"></i> <span>View</span>
                                    </a>
                                    <a href="{{ route('admin.patients.edit', $patient->id) }}" class="btn btn-warning btn-sm d-flex flex-row">
                                        <i class="bi bi-pencil me-1"></i> <span>Edit</span>
                                    </a>
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