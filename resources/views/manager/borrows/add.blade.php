@extends('layouts.app')
@section('content')
    <meta name="_token" content="{{ csrf_token() }}">
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
                        <h4 class="box-title">Add Borrows</h4>
                        <div class="box-controls pull-right">
                            <button id="row-count" class="btn btn-xs btn-primary">Row count</button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">

                            <div class="col-12 col-md-12">
                                <h4>Các bước cho mượn sách</h4>
                                <div class="list-action">
                                    <ol>
                                        <li>Nếu là khách hàng mới: vào "Quản lý khách hàng" -> "Thêm khách hàng".</li>
                                        <li>"Tìm kiếm khách hàng" tại "Người mượn".</li>
                                        <li>Nhấn "Thêm sách" và chọn các cuốn sách tại "Sách". Nhấn "Đóng".</li>
                                        <li>Điều chỉnh "tình trạng" và "ngày trả (dự kiến)" nếu cần thiết.</li>
                                        <li>Nhấn "Lưu".</li>
                                    </ol>
                                </div>
                            </div>

                            <div class="col-12 col-md-12">
                                <div class="row">
                                    <div class="col-12 col-md-6 user-borrow">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <h4 class="fa-hover">
                                                    <i class="fa fa-user-o" aria-hidden="true"></i> Người mượn</h4>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <button type="button" class="btn btn-default btn-sm" data-toggle="modal"
                                                        data-target="#modal-customer">
                                                    Thêm người mượn
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-12">
                                                <form action="" method="post">
                                                    <div class="row" style="padding-top: 20px">
                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <h5>Họ và tên <span class="text-danger">*</span></h5>
                                                                <div class="controls">
                                                                    <input type="text" name="name" class="form-control"
                                                                           data-validation-required-message="This field is required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <h5>Mã số<span class="text-danger">*</span></h5>
                                                                <div class="controls">
                                                                    <input type="text" name="codeID"
                                                                           class="form-control"
                                                                           data-validation-required-message="This field is required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <h5>Trường <span class="text-danger">*</span></h5>
                                                                <div class="controls">
                                                                    <input type="text" name="class" class="form-control"
                                                                           data-validation-required-message="This field is required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="form-group">
                                                                <h5>Ngày sinh<span class="text-danger">*</span></h5>
                                                                <div class="controls">
                                                                    <input type="date" name="dob" class="form-control"
                                                                           data-validation-required-message="This field is required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-12">
                                                            <h5>Ngày trả (dự kiến)</h5>
                                                            <input class="form-control" name="day_expected_return"
                                                                   type="date" value="2011-08-19">
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>


                                        </div>


                                        <!-- Modal -->
                                        <div class="modal modal-right fade" id="modal-customer" tabindex="-1">
                                            <div class="modal-dialog" style="width: 50%">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Tìm khách hàng</h5>
                                                        <button type="button" class="close"
                                                                data-dismiss="modal">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="box-header with-border bg-light">
                                                            <input aria-controls="filterCustomer"
                                                                   class="form-control form-control-sm"
                                                                   placeholder="Nhập tên hoặc mã để tìm"
                                                                   type="text" id="search-customer" name="search" width="100%">
                                                        </div>
                                                        <div class="col-12 cusomers-list">
                                                            <div class="box-body">
                                                                <div class="table-responsive">
                                                                    <table class="table table-hover mb-0">
                                                                        <thead>
                                                                        <tr>
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">Name</th>
                                                                            <th scope="col">Address</th>
                                                                            <th></th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody id="customer-table">
                                                                        @forelse($customers as $key => $customer)
                                                                            <tr>
                                                                                <th scope="row">{{ $key++ }}</th>
                                                                                <td>{{ $customer->name }}</td>
                                                                                <td>{{ $customer->class }}</td>
                                                                                <td>
                                                                                    <button class="btn btn-primary">
                                                                                        Chọn
                                                                                    </button>
                                                                                </td>
                                                                            </tr>
                                                                        @empty
                                                                            <tr>
                                                                                <td colspan="2">No data</td>
                                                                            </tr>
                                                                        @endforelse
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer modal-footer-uniform">
                                                        <button type="button" class="btn btn-bold btn-secondary"
                                                                data-dismiss="modal">Close
                                                        </button>
                                                        <button type="button"
                                                                class="btn btn-bold btn-primary float-right">
                                                            Save changes
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.modal -->
                                    </div>
                                    <div class="col-12 col-md-6 book-borrow">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <h4 class="fa-hover">
                                                    <i class="fa fa-book" aria-hidden="true"></i> Sách</h4>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <button type="button" class="btn btn-default btn-sm" data-toggle="modal"
                                                        data-target="#modal-book">
                                                    Thêm sách
                                                </button>
                                            </div>
                                            <div class="modal modal-right fade" id="modal-book" tabindex="-1">
                                                <div class="modal-dialog" style="width: 50%">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Tìm sách</h5>
                                                            <button type="button" class="close"
                                                                    data-dismiss="modal">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="box-header with-border bg-light">
                                                                <input aria-controls="filterCustomer"
                                                                       class="form-control form-control-sm"
                                                                       placeholder="Nhập tên hoặc mã để tìm"
                                                                       type="search" width="100%"></div>
                                                            <div class="col-12 cusomers-list">
                                                                <div class="box-body">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-hover mb-0">
                                                                            <tbody>
                                                                            <tr>
                                                                                <th scope="col">#</th>
                                                                                <th scope="col">Name</th>
                                                                                <th scope="col">Status</th>
                                                                                <th></th>
                                                                            </tr>
                                                                            </tbody>
                                                                            <tbody>
                                                                            @forelse($books as $key => $book)
                                                                                <tr>
                                                                                    <th scope="row">{{ $key++ }}</th>
                                                                                    <td>{{ $book->name }}</td>
                                                                                    <td>@if($book->status == 1)
                                                                                            Mới @else Cũ @endif</td>
                                                                                    <td>
                                                                                        <button class="btn btn-primary">
                                                                                            Chọn
                                                                                        </button>
                                                                                    </td>
                                                                                </tr>
                                                                            @empty
                                                                                <tr>
                                                                                    <td colspan="2">No data</td>
                                                                                </tr>
                                                                            @endforelse
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer modal-footer-uniform">
                                                            <button type="button" class="btn btn-bold btn-secondary"
                                                                    data-dismiss="modal">Close
                                                            </button>
                                                            <button type="button"
                                                                    class="btn btn-bold btn-primary float-right">
                                                                Save changes
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.row -->
        </div>
    </section>
@endsection



