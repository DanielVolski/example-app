<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;


class UsersController extends Controller
{
    public function getUsers(): Collection
    {
        return User::all();
    }

    public function getUser(int $id): User
    {
        return User::find($id);
    }

    public function createUser(UserRequest $request): void
    {
        User::create($request->validated());
    }

    public function updateUser(UserRequest $request, int $id): void
    {
        User::find($id)->update($request->validated());
    }

    public function deleteUser(int $id): void
    {
        User::find($id)->delete();
    }
}
