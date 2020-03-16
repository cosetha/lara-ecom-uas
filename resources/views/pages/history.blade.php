@extends('layouts.default')
@section('content')
 
<div class="container-fluid">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">History</li>
            </ol>
            <div class="row">
            <div class="col-md-12 mb-4">
            <form method="post" action ="{{url('/history/proses')}}">
                <div class="row">
                {{ csrf_field() }}
                <input type="hidden" name="token" value="{{csrf_token()}}" />
                    <div class="col">
                    <input type="date" class="form-control" name="tanggalAwal">
                    </div>
                    <div class="col">
                    <input type="date" class="form-control" name="tanggalAkhir">
                    </div>
                    <div class="col">
                    <Button class="btn btn-primary" type="submit" value="login">Process</Button>
                    </div>            
                </div>
            </form>
            </div>
            
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>DataTable Example
                </div>
                <div class="card-body">

                @if(session()->has('htr_a'))
                <div class="table-responsive">
                        <table
                            class="table table-bordered"
                            id="dataTable"
                            width="100%"
                            cellspacing="0"
                        >
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                @else 
                <div class="table-responsive">
                        <table
                            class="table table-bordered"
                            id="dataTable"
                            width="100%"
                            cellspacing="0"
                        >
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                     @foreach($result as $result=>$b)
                    <tr>
                    <td>{{$b->tipe_faktur}}</td>                
                    <td>{{$b->tanggal}}</td>
                    <td>{{$b->total}}</td>                    
                    <td>{{$b->status}}</td>
                    <td>{{$b->users_id}}</td>                    
                    <td>{{$b->id}}</td>
                    </tr>
                    @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                @endif
                   
                </div>
            </div>
        </div>
@stop