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
                <h3>CRUD Category</h3>
            </div>
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('category.create') }}">Create New Category</a>
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
            <th>Nama</th>
            <th>Action</th>
        </tr>
        @foreach ($category as $key => $category)
            <tr>
                <td>{{++$i}}</td>
                <td>{{$category->nama}}</td>
                <td>
                    <form action="{{route('category.destroy', $category->id)}}" method="POST">
                        <a class="btn btn-info" href="{{route('category.show', $category->id)}}">Detail</a>
                        <a class="btn btn-primary" href="{{route('category.edit', $category->id)}}">Edit</a>
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