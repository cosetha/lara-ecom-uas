@extends('layouts.default')

@section('content')
<div class="container-fluid">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
                <li class="breadcrumb-item active">Category</li>
            </ol>
            
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h3>Detail Category</h3>
            </div>
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('category.index') }}">Back to Category List</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <strong>ID Kategori:</strong>
                {{$category->id}}
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <strong>Nama:</strong>
                {{$category->nama}}
            </div>
        </div>
    </div>
    </div>
@endsection