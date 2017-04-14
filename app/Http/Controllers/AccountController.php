<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller {

    /**
     * @param $user_id: authorized user's id
     *
     * @return view
     */
    public function show($user_id) {
        $user = User::find($user_id);
        return view('account.account_show');
    }

    public function edit_user($user_id) {
        $users = User::find($user_id);
        return null;
    }

    public function update_user($user_id) {
        $users = User::find($user_id);
        return null;
    }

    public function delete_user($user_id) {
        $users = User::find($user_id);
        return view('account.account_delete', compact('users'));
    }

}
