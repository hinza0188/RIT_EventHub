<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class AccountController extends Controller {

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * It returns the direct blade template to display user data
     */
    public function show() {
        $uid = Auth::id();
        $dob = DB::table('dobs')->where('user_id',$uid)->value('date');
        $phones = DB::table('phone_numbers')->where('user_id',$uid)->get();

        return view('account.account_show')->with(array('dob'=>$dob, 'phones'=>$phones));
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
