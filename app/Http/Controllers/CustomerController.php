<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCustomerRequest;
use App\Services\CustomerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    protected $customerService;
    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }
    public function index()
    {
        if (!Gate::allows('crud-customers')) {
            abort(403);
        }
        $customers = $this->customerService->getAll();
        return view('manager.customers.list',compact('customers'));
    }
    public function create()
    {
        if (!Gate::allows('crud-customers')) {
            abort(403);
        }
        return view('manager.customers.create');
    }
    public function store(CreateCustomerRequest $request)
    {
        if (!Gate::allows('crud-customers')) {
            abort(403);
        }
        $this->customerService->create($request);
        Session::flash('success', 'Thêm thành công');
        return redirect()->route('customers.index');
    }

}
