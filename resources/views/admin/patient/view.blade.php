@extends('admin.layout.app')
@section('title') Patient Details @endsection

@section('style')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<style>
.detail-card {
    border-radius: 12px;
    border: none;
    box-shadow: 0 2px 12px rgba(0,0,0,0.07);
}
.section-heading {
    font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    color: #6c757d;
    border-bottom: 1px solid #e9ecef;
    padding-bottom: 8px;
    margin-bottom: 16px;
}
.detail-table th {
    width: 38%;
    font-weight: 600;
    color: #495057;
    background: #f8f9fa;
    vertical-align: middle;
    font-size: 13.5px;
}
.detail-table td {
    color: #212529;
    vertical-align: middle;
    font-size: 14px;
}
.detail-table tr:last-child th,
.detail-table tr:last-child td {
    border-bottom: none;
}
.badge-status {
    font-size: 13px;
    padding: 5px 14px;
    border-radius: 20px;
    font-weight: 500;
}
.badge-payment {
    font-size: 13px;
    padding: 5px 14px;
    border-radius: 20px;
    font-weight: 500;
}
.charge-box {
    background: #f8f9fa;
    border-radius: 10px;
    padding: 14px 18px;
}
.charge-row {
    display: flex;
    justify-content: space-between;
    font-size: 13.5px;
    padding: 5px 0;
    border-bottom: 1px dashed #dee2e6;
    color: #495057;
}
.charge-row:last-child { border-bottom: none; }
.charge-row.total {
    font-weight: 700;
    font-size: 15px;
    color: #1f4e79;
    border-top: 2px solid #dee2e6;
    border-bottom: none;
    margin-top: 4px;
    padding-top: 8px;
}
.map-link {
    font-size: 13px;
}
.file-link {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 13.5px;
    text-decoration: none;
    padding: 5px 12px;
    border-radius: 6px;
    border: 1px solid currentColor;
    transition: 0.2s;
}
.file-link:hover { opacity: 0.75; }
.status-form select {
    border-radius: 8px;
    font-size: 13.5px;
}
</style>
@endsection

@section('content')
<div class="container-fluid">

    {{-- Breadcrumb --}}
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-sm-6">
                <h3>Patient Details</h3>
            </div>
            <div class="col-12 col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href=""><i class="fa-solid fa-house"></i></a>
                    </li>
                   
                    <li class="breadcrumb-item active">Patient Details</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="row g-3">

        {{-- ── LEFT COLUMN ── --}}
        <div class="col-lg-12">

            {{-- Applicant & Application --}}
            <div class="card detail-card mb-3">
                <div class="card-body">
                    <p class="section-heading"><i class="bi bi-person-fill me-1"></i>Patient Information</p>
                    <table class="table detail-table table-bordered mb-0">
                        <tr>
                            <th>Patient ID</th>
                            <td>PID-001</td>
                        </tr>
                       
                        <tr>
                            <th>Name</th>
                            <td>Test</td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td>Male</td>
                        </tr>
                    </table>
                </div>
            </div>


        </div>

      
    </div>

    {{-- Back button --}}
    <div class="mt-2 mb-4">
        <a href="{{ url('/') }}" class="btn btn-secondary text-dark btn-sm mb-3">
            <i class="bi bi-arrow-left me-1"></i> Back to Patients
        </a>
       
    </div>

</div>
@endsection

@section('script')
@endsection
