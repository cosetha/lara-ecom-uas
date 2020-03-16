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
                <h3>CRUD Product</h3>
            </div>
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('products.create') }}">Create New Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>ID Kategori</th>
            <th>Nama</th>
            <th>Gambar</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Action</th>
        </tr>
        @foreach ($products as $key => $product)
            <tr>
                <td>{{++$i}}</td>
                <td>{{$product->kategori_id}}</td>
                <td>{{$product->nama}}</td>
                <td>{{$product->gambar}}</td>
                <td>{{$product->harga}}</td>
                <td>{{$product->stok}}</td>
                <td>
                    <form action="{{route('products.destroy', $product->id)}}" method="POST">
                        <a class="btn btn-info" href="{{route('products.show', $product->id)}}">Detail</a>
                        <a class="btn btn-primary" href="{{route('products.edit', $product->id)}}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    </div>
@endsection