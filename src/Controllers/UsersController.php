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

    public function view() {
        $user = User::find($_GET['id']);
        if($user) {
            return view('users/view', compact('user'));
        }
        echo 404;
    }
}
