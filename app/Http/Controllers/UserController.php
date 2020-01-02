<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('admin.users.list', compact('users'));
    }
    public function create() {
        return view('admin.users.create');
    }
    public function store(CreateUserRequest $request) {
        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->address = $request->address;
        $user->role = $request->role;
        $user->save();
        Session::flash('success', 'Thêm thành công');
        return redirect()->route('users.index');
    }
    public function edit($id) {
        $user = User::findOrFail($id);
        return view('admin.users.edit',compact('user'));
    }
    public function update(CreateUserRequest $request,$id) {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->address = $request->address;
        $user->role = $request->role;
        $user->save();
        Session::flash('success', 'Cập nhật thành công');
        return redirect()->route('users.index');
    }
    public function destroy($id) {
        $user = User::findOrFail($id);
        $user->delete();
        Session::flash('success', 'Xóa thành công');
        return redirect()->route('users.index');
    }

}
