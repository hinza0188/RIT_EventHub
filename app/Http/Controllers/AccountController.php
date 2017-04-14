<?php

namespace App\Http\Controllers;

use App\User;
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

        return view('account.index')
            ->with(array('dob'=>$dob, 'phones'=>$phones));
    }

    public function show($id) {
        $user = User::find($id);
        return view('account.edit', compact('user'));
    }

    public function edit($id) {
        $user = User::find($id);
        return view('account.edit', compact('user'));
    }

    public function update_user(Request $request, $user_id) {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'old_password' => 'required',
            'new_password_1' => 'required',
            'new_password_2' => 'required',
        ]);

        User::find(Auth::id())->update($request->all());
        return redirect()->route('account.index')
            ->with('success','Item updated successfully');
    }
}
