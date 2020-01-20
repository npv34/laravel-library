<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests\CreateBookRequest;
use App\Services\BookService;
use App\Services\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    protected $bookService;
    protected $categoryService;
    public function __construct(BookService $bookService, CategoryService $categoryService)
    {
        $this->bookService = $bookService;
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        if (!Gate::allows('crud-books')) {
            abort(403);
        }
        $books = Book::all();
        return view('manager.books.list',compact('books'));
    }
    public function create()
    {
        if (!Gate::allows('crud-books')) {
            abort(403);
        }
        $categories = $this->categoryService->getAll();
        return view('manager.books.create',compact('categories'));
    }
    public function store(CreateBookRequest $request)
    {
        if (!Gate::allows('crud-books')) {
            abort(403);
        }
        $this->bookService->create($request);
        Session::flash('success', 'Thêm thành công');
        return redirect()->route('books.index');
    }
}
