<?php

namespace App\Http\Controllers;

use App\User;
use App\Address;
use App\Phone_number;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function get_user_info() {
        $users = User::all();
        return view('account.account_view', compact('users'));
    }

    public function edit_user_info() {
        $users = User::all();
        return view('account.account_edit', compact('users'));
    }

    public function delete_user() {
        $users = User::all();
        return view('account.account_delete', compact('users'));
    }


}
