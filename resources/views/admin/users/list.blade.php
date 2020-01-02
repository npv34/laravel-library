@extends('layouts.app')
@section('content')
    <section class="content-header">
        <h1>
            Users Table
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="mdi mdi-home-outline"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#">Users</a></li>
            <li class="breadcrumb-item active">Users table</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border bg-light">
                        <h4 class="box-title">List Users</h4>
                        <div class="box-controls pull-right">
                            <button id="row-count" class="btn btn-xs btn-primary">Row count</button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                </tr>
                                </thead>
                                @foreach($user as $key=>$u)
                                <tbody>
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$u->name}}</td>
                                    <td>{{$u->phone}}</td>
                                    <td>{{$u->email}}</td>
                                    <td>{{$u->address}}</td>
                                </tr>
                                </tbody>
                                    @endforeach
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection
