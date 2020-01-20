@extends('layouts.app')
@section('content')
    <section class="content-header">
        <h1>
            <a href="{{ route('categories.index') }}" class="text-success">Đang hoạt động ( {{count($categories)}})</a>
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="mdi mdi-home-outline"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#">Libraries</a></li>
            <li class="breadcrumb-item active">Libraries table</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border bg-light">
                        <h4 class="box-title">List Categories</h4>
                        <div class="box-controls pull-right">
                            <button id="row-count" class="btn btn-xs btn-primary">Row count</button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        <a class="btn btn-primary" href="{{route('categories.create')}}">Create</a>
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Name</th>
                                    <th>Handles</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($categories as $key=>$category)

                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$category->name}}</td>
                                        <td><a href="" class="btn btn-success">Edit</a></td>
                                        <td><a href="" onclick="return confirm('Bạn chắc chắn muốn xóa?')"  class="btn btn-danger">Delete</a></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No data</td>
                                    </tr>
                                @endforelse

                                </tbody>
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


