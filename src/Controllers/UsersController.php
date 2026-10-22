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

    public function create() {
        view('users/create');
    }

    public function store() {
        $users = User::where('email', $_POST['email']);
        if($users) {
            return redirect('/admin/users/create');
        }
        $user = new User();
        $user->name = $_POST['name'];
        $user->email = $_POST['email'];
        $user->password = password_hash($user->name . $user->email . $_POST['password'] . md5('yolo'), PASSWORD_BCRYPT);
        $user->save();
        redirect('/admin/users');
    }

    public function view() {
        $user = User::find($_GET['id']);
        if($user) {
            return view('users/view', compact('user'));
        }
        echo 404;
    }

    public function edit() {
        $user = User::find($_GET['id']);
        if($user) {
            return view('users/edit', compact('user'));
        }
        echo 404;
    }

    public function update(){
        $user = User::find($_GET['id']);
        if($user) {
            $user->name = $_POST['name'];
            $user->email = $_POST['email'];
            if(!empty($_POST['password'])) {
                $user->password = password_hash($user->name . $user->email . $_POST['password'] . md5('yolo'), PASSWORD_BCRYPT);
            }
            $user->save();
            return redirect('/admin/users');
        }
        echo 404;
    }

    public function delete() {
        $user = User::find($_GET['id']);
        if($user) {
           $user->delete();
           return redirect('/admin/users');
        }
        echo 404;
    }
}
