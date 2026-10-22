<?php

namespace App\Controllers;

use App\Models\User;

class UsersController
{
    public function index()
    {
        $title = 'Users';
        $users = User::all();
        view('users/index', compact('title', 'users'));
    }
}
