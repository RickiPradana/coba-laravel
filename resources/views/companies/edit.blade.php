<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit Company Form - Laravel 8 Datatable CRUD Tutorial</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Edit Company</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('companies.index') }}" enctype="multipart/form-data"> Back</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('companies.update',$company->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Company Name:</strong>
<input type="text" name="name" value="{{ $company->name }}" class="form-control" placeholder="Company name">
@error('name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Company Email:</strong>
<input type="email" name="email" class="form-control" placeholder="Company Email" value="{{ $company->email }}">
@error('email')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Company Address:</strong>
<input type="text" name="address" value="{{ $company->address }}" class="form-control" placeholder="Company Address">
@error('address')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<button type="submit" class="btn btn-primary ml-3">Submit</button>
</div>
</form>
</div>
</body>
</html>

@extends('layouts.main')

@section('container')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Tambah Company
                {{-- <small>Control panel</small> --}}
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{ url("/companies") }}">Company</a></li>
                <li class="active">Tambah</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">Form Tambah Company</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="row">
                                        {{-- </div> --}}
                                        {{-- <div class="col-xs-5 col-sm-5 col-md-5"> --}}
                                            <div class="form-group col-md-10">
                                                <a class="btn btn-primary" href="{{ route('companies.index') }}"> Back</a>
                                            </div>
                                    </div>
                                    <div class="container mt-2">
                                        @if(session('status'))
                                        <div class="alert alert-success mb-1 mt-1">
                                            {{ session('status') }}
                                        </div>
                                        @endif
                                        <form action="{{ route('companies.update',$company->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                {{-- <div class="col-xs-5 col-sm-5 col-md-5"> --}}
                                                    <div class="form-group col-md-10">
                                                    <strong>Company Name:</strong>
                                                    <input type="text" name="name" value="{{ $company->name }}" class="form-control" placeholder="Company name">
                                                    @error('name')
                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                            </div>
                                            <div class="row">
                                                {{-- </div> --}}
                                                {{-- <div class="col-xs-5 col-sm-5 col-md-5"> --}}
                                                    <div class="form-group col-md-10">
                                                        <strong>Company Email:</strong>
                                                        <input type="email" name="email" class="form-control" placeholder="Company Email" value="{{ $company->email }}">
                                                        @error('email')
                                                        <div class="alert alert-danger mt-1 mb-1">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                            </div>
                                            <div class="row">
                                                {{-- </div> --}}
                                                {{-- <div class="col-xs-5 col-sm-5 col-md-5"> --}}
                                                    <div class="form-group col-md-10">
                                                        <strong>Company Address:</strong>
                                                        i
                                                        @error('address')
                                                        <div class="alert alert-danger mt-1 mb-1">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                {{-- </div> --}}
                                            </div>
                                                <button type="submit" class="btn btn-primary ml-3">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('layouts.datatables')
                </section>
                <!-- /.Left col -->
            </div>
            <!-- /.row (main row) -->
        </section>
        <!-- /.content -->
    </div>
    @endsection