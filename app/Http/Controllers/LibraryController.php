<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLibraryRequest;
use App\Library;
use App\Services\LibraryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class LibraryController extends Controller
{
    protected $libraryService;
    public function __construct(LibraryService $libraryService)
    {
        $this->libraryService = $libraryService;
    }
    public function index() {
        $libraries = $this->libraryService->getAll();
        return view('admin.libraries.list',compact('libraries'));
    }
    public function create() {
        return view('admin.libraries.create');
    }
    public function store(CreateLibraryRequest $request) {
        $this->libraryService->create($request);
        Session::flash('success', 'Thêm thành công');
        return redirect()->route('libraries.index');
    }
}
