<?php


namespace App\Repositories;


use App\User;

class UserRepository
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getAll()
    {
        return $this->user->all();
    }

    public function save($user)
    {
        $user->save();
    }

    public function findById($id)
    {
        return $this->user->findOrFail($id);
    }
    public function delete($user)
    {
        $user->delete();
    }
    public function restore($user)
    {
        $user->restore();
    }
    public function findByIdIntoTrash($id)
    {
        return $this->user->onlyTrashed()->find($id);
    }
    public function getUsersFromTrash()
    {
        return $this->user->onlyTrashed()->get();
    }
    public function forceDelete($user)
    {
        $user->forceDelete();
    }
}
