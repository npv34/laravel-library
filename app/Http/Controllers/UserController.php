<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('admin.users.list', compact('users'));
    }
    public function create() {
        $user = User::all();
        return view('admin.users.create',compact('user'));
    }
    public function store(CreateUserRequest $request) {
        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->address = $request->address;
        $user->role = $request->role;
        $user->save();
        Session::flash('success', 'Thêm thành công');
        return redirect()->route('users.index');
    }
    public function destroy($id) {
        $user = User::findOrFail($id);
        $user->delete();
        Session::flash('success', 'Xóa thành công');
        return redirect()->route('users.index');
    }

}
