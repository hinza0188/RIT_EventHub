<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class AccountController extends Controller {

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * It returns the direct blade template to display user data
     */
    public function index() {
        $uid = Auth::id();
        $dob = DB::table('dobs')->where('user_id',$uid)->get();
        $phones = DB::table('phone_numbers')->where('user_id',$uid)->get();

        return view('account.index')->with(array('dob'=>$dob, 'phones'=>$phones));
    }

    public function edit_user($user_id) {
        return null;
    }

    public function update_user(Request $request, $user_id) {
        return null;
    }
}
