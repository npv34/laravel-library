<?php

namespace App\Http\Controllers;

use App\Book;
use App\Borrow;
use App\Customer;
use App\Services\BookService;
use App\Services\CustomerService;
use Illuminate\Database\Events\TransactionBeginning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

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
        return view('manager.borrows.add', compact('customers', 'books'));
    }

    public function store(Request $request)
    {
        define('BORROWED', 1);
        DB::beginTransaction();
        try {
            $book = $this->bookService->findById($request->book_id);
            $book->borrow = BORROWED;
            $book->save();

            $borrow = new Borrow();
            $borrow->book_id = $request->book_id;
            $borrow->customer_id = $request->customer_id;
            $borrow->day_expected_return = $request->day_expected_return;
            $borrow->day_borrow = \date('Y-d-m');
            $borrow->save();
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            return response()->json(['error' => 'Co loi xay ra! Vui long thuc hien lai sau']);
        }
        return response()->json(['success' => 'Cho muon thanh cong']);

    }

    public function searchCustomer(Request $request)
    {
        return Customer::where('name', 'LIKE', '%' . $request->keyword . '%')->get();
    }

    public function searchBook(Request $request)
    {
        return Book::where('name', 'LIKE', '%' . $request->keyword . '%')->get();
    }
}
