<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Repositories\UserRepository;
use App\Services\UserService;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    protected $userService;
    public function __construct(UserService $userService)
    {
        $this->userService= $userService;
    }

    public function index()
    {
        $users = $this->userService->getAll();
        return view('admin.users.list', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(CreateUserRequest $request)
    {
        $this->userService->create($request);
        Session::flash('success', 'Thêm thành công');
        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        $user = $this->userService->findById($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = $this->userService->findById($id);
        $this->userService->update($request,$user);
        Session::flash('success', 'Cập nhật thành công');
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        $user = $this->userService->findById($id);
        $this->userService->delete($user);
        Session::flash('success', 'Xóa thành công');
        return redirect()->route('users.index');
    }

    public function restore($id)
    {
        $user = $this->userService->findByIdIntoTrash($id);
        $this->userService->restore($user);
        Session::flash('success', 'Phục hồi thành công');
        return redirect()->route('users.trash');
    }

    public function getTrash()
    {
        $usersOfTrash = $this->userService->getUsersFromTrash();
        return view('admin.users.trash', compact('usersOfTrash'));
    }
    public function forceDelete($id) {
        $userOfForce = $this->userService->findByIdIntoTrash($id);
        $this->userService->forceDelete($userOfForce);
        Session::flash('success', 'Xóa vĩnh viễn thành công');
        return redirect()->route('users.trash');
    }

}
