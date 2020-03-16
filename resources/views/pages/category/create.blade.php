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
                <h3>Add New Category</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('category.index')}}">Back to Category</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops </strong>Something Wrong.
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('category.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <strong>ID:</strong>
                    <input type="number" name="id" class="form-control" placeholder="ID">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="nama" class="form-control" placeholder="Nama">
                </div>
            </div>
            <div class="col-lg-12">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
    </div>
@endsection