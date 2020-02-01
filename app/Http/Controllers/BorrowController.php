<?php

namespace App\Http\Controllers;

use App\Services\CustomerService;
use Illuminate\Http\Request;

class BorrowController extends Controller
{

    protected $customerService;

    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    public function index()
    {
        return view('manager.borrows.list');
    }
    public function create()
    {
        $customers = $this->customerService->getAll();
        return view('manager.borrows.add', compact('customers'));
    }
}
