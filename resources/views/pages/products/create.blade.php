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
                <h3>Add New Product</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('products.index')}}">Back to Product</a>
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

    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <strong>ID Kategori:</strong>
                    <input type="number" name="kategori_id" class="form-control" placeholder="ID Kategori">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="nama" class="form-control" placeholder="Nama">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <strong>Gambar:</strong>
                    <input type="file" name="gambar" class="form-control" placeholder="Gambar">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <strong>Harga:</strong>
                    <input type="text" name="harga" class="form-control" placeholder="Harga">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <strong>Stok:</strong>
                    <input type="text" name="stok" class="form-control" placeholder="Stok">
                </div>
            </div>
            <div class="col-lg-12">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="cancel" class="btn btn-danger">Cancel</button>
            </div>
        </div>
    </form>
    </div>
@endsection