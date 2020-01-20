<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CreateCategoryRequest;
use App\Services\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    protected $cateService;

    public function __construct(CategoryService $cateService)
    {
        $this->cateService = $cateService;
    }

    public function index()
    {
        if (!Gate::allows('crud-categories')) {
            abort(403);
        }
        $categories = $this->cateService->getAll();
        return view('admin.categories.list', compact('categories'));
    }

    public function create()
    {
        if (!Gate::allows('crud-categories')) {
            abort(403);
        }
        return view('admin.categories.create');
    }
    public function store(CreateCategoryRequest $request)
    {
        if (!Gate::allows('crud-categories')) {
            abort(403);
        }
        $this->cateService->create($request);
        Session::flash('success', 'Thêm thành công');
        return redirect()->route('categories.index');

    }
}
