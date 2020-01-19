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

    public function index()
    {
        $libraries = $this->libraryService->getAll();
        return view('admin.libraries.list', compact('libraries'));
    }

    public function create()
    {
        return view('admin.libraries.create');
    }

    public function store(CreateLibraryRequest $request)
    {
        $this->libraryService->create($request);
        Session::flash('success', 'Thêm thành công');
        return redirect()->route('libraries.index');
    }
    public function edit($id)
    {
        $library = Library::findOrFail($id);
        return view('admin.libraries.edit',compact('library'));
    }
    public function update(Request $request,$id)
    {
        $library = Library::findOrFail($id);
        $library->name = $request->name;
        $library->address = $request->address;
        $library->phone = $request->phone;
        $file = $request->file('avatar');
        if ($file) {
            //upload img len server
            $path = $file->store('images', 'public');
            $library->avatar = $path;

        }
        $library->save();
        Session::flash('success', 'Cập nhật thành công');
        return redirect()->route('libraries.index');
    }
    public function destroy($id)
    {
        $library = Library::findOrFail($id);
        $library->delete();
        Session::flash('success', 'Xóa thành công');
        return redirect()->route('libraries.index');
    }
}
