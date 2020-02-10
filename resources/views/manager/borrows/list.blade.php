@extends('layouts.app')
@section('content')
    <section class="content-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="mdi mdi-home-outline"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#">Borrows</a></li>
            <li class="breadcrumb-item active">Borrows table</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border bg-light">
                        <h4 class="box-title">List Borrows</h4>
                        <div class="box-controls pull-right">
                            <button id="row-count" class="btn btn-xs btn-primary">Row count</button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        <a class="btn btn-primary" href="{{route('borrows.create')}}">Create</a>
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Book Name</th>
                                    <th>Day borrow</th>
                                    <th>Day borrow expected</th>
                                    <th>Handles</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($borrows as $key=>$borrow)

                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$borrow->book->name}}</td>
                                        <td>{{$borrow->day_borrow}}</td>
                                        <td>{{$borrow->day_expected_return}}</td>
                                        <td><a href="" class="btn btn-success">Return book</a></td>
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
