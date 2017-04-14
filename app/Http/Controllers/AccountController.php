<?php

namespace App\Http\Controllers;

use App\User;


class AccountController extends Controller {

    /**
     * @param $user_id: authorized user's id
     *
     * @return view
     */
    public function show() {
        return view('account.account_show');
    }

    public function edit_user() {
        return null;
    }

    public function update_user() {
        return null;
    }

    public function delete_user() {
        return view('account.account_delete', compact('users'));
    }

}
