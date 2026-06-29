@extends('admin.layout.app')
@section('title') Dashboard @endsection
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
                    <li class="breadcrumb-item"> Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>

@endsection


