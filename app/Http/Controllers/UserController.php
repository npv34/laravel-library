<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Repositories\UserRepository;
use App\Services\UserService;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        if (!Gate::allows('crud-users')) {
            abort(403);
        }
        $users = $this->userService->getAll();
        return view('admin.users.list', compact('users'));
    }

    public function create()
    {
        if (!Gate::allows('crud-users')) {
            abort(403);
        }
        return view('admin.users.create');
    }

    public function store(CreateUserRequest $request)
    {
        if (!Gate::allows('crud-users')) {
            abort(403);
        }
        $this->userService->create($request);
        Session::flash('success', 'Thêm thành công');
        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        if (!Gate::allows('crud-users')) {
            abort(403);
        }

        $user = $this->userService->findById($id);

        if ($user->id == 1) {
            abort(403);
        }

        if ($user->id == Auth::id()) {
            abort(403);
        }

        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        if (!Gate::allows('crud-users')) {
            abort(403);
        }
        $user = $this->userService->findById($id);

        if ($user->id == 1) {
            abort(403);
        }

        if ($user->id == Auth::id()) {
            abort(403);
        }

        $this->userService->update($request, $user);
        Session::flash('success', 'Cập nhật thành công');
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        if (!Gate::allows('crud-users')) {
            abort(403);
        }
        $user = $this->userService->findById($id);

        if ($user->id == 1) {
            abort(403);
        }

        if ($user->id == Auth::id()) {
            abort(403);
        }
        $this->userService->delete($user);
        Session::flash('success', 'Xóa thành công');
        return redirect()->route('users.index');
    }

    public function restore($id)
    {
        if (!Gate::allows('crud-users')) {
            abort(403);
        }
        $user = $this->userService->findByIdIntoTrash($id);
        $this->userService->restore($user);
        Session::flash('success', 'Phục hồi thành công');
        return redirect()->route('users.trash');
    }

    public function getTrash()
    {
        if (!Gate::allows('crud-users')) {
            abort(403);
        }
        $usersOfTrash = $this->userService->getUsersFromTrash();
        return view('admin.users.trash', compact('usersOfTrash'));
    }

    public function forceDelete($id)
    {
        if (!Gate::allows('crud-users')) {
            abort(403);
        }
        $userOfForce = $this->userService->findByIdIntoTrash($id);
        $this->userService->forceDelete($userOfForce);
        Session::flash('success', 'Xóa vĩnh viễn thành công');
        return redirect()->route('users.trash');
    }

}
