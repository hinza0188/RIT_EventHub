<?php

namespace App\Http\Controllers;

use App\User;
use App\Address;
use App\Phone_number;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller {

    /////////////////////////////////////////////// SHARED SECTION /////////////////////////////////////////////////////
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $users = User::all();
        $address = Address::all();
        $phone_number = Phone_number::all();
        return view::make('account.account_index')->with('users', $users);
    }

    public function show($user_id) {
        $users = User::find($user_id);
        return null;
    }

    ////////////////////////////////////////////////// USER SECTION ////////////////////////////////////////////////////

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

    ///////////////////////////////////////////// PHONE NUMBER SECTION /////////////////////////////////////////////////

    public function store_phone($user_id) {
        $users = User::find($user_id);
        return null;
    }

    public function edit_phone($user_id, $phone_id) {
        $users = User::find($user_id);
        $phone_id = Address::find($phone_id);
        return null;
    }

    public function update_phone($user_id, $phone_id) {
        $users = User::find($user_id);
        $phone_id = Address::find($phone_id);
        return null;
    }

    public function delete_phone($user_id, $phone_id) {
        $users = User::find($user_id);
        $phone_id = Address::find($phone_id);
        return null;
    }

    /////////////////////////////////////////////// ADDRESS SECTION ////////////////////////////////////////////////////
    public function store_address($user_id) {
        $users = User::find($user_id);
        return null;
    }

    public function edit_address($user_id, $address_id) {
        $users = User::find($user_id);
        $address = Address::find($address_id);
        return null;
    }

    public function update_address($user_id, $address_id) {
        $users = User::find($user_id);
        $address = Address::find($address_id);
        return null;
    }

    public function delete_address($user_id, $address_id) {
        $users = User::find($user_id);
        $address = Address::find($address_id);
        return null;
    }


}
