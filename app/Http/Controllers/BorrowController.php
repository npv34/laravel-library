<?php

namespace App\Http\Controllers;

use App\Book;
use App\Customer;
use App\Services\BookService;
use App\Services\CustomerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class BorrowController extends Controller
{

    protected $customerService;
    protected $bookService;

    public function __construct(CustomerService $customerService, BookService $bookService)
    {
        $this->customerService = $customerService;
        $this->bookService = $bookService;
    }

    public function index()
    {
        return view('manager.borrows.list');
    }
    public function create()
    {
        $customers = $this->customerService->getAll();
        $books = $this->bookService->getBookNotBorrow();
        return view('manager.borrows.add', compact('customers','books'));
    }
    public function searchCustomer(Request $request)
    {
        return Customer::where('name', 'LIKE', '%'. $request->keyword . '%')->get();
    }
    public function searchBook(Request $request)
    {
        return Book::where('name', 'LIKE', '%'. $request->keyword . '%')->get();
    }
}
