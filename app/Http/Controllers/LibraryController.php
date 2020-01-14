<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLibraryRequest;
use App\Library;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class LibraryController extends Controller
{
    public function index() {
        $libraries = Library::all();
        return view('admin.libraries.list',compact('libraries'));
    }
    public function create() {
        return view('admin.libraries.create');
    }
    public function store(CreateLibraryRequest $request) {
        $library = new Library();
        $library->name = $request->name;
        $library->address = $request->address;
        $library->phone = $request->phone;
        if ($files = $request->file('avatar')) {
            $destinationPath = 'public/images/';
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
        }
        $library->save();
        Session::flash('success', 'Thêm thành công');
        return redirect()->route('libraries.index');
    }
}
