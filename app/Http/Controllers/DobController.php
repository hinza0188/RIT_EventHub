<?php

namespace App\Http\Controllers;

use App\Phone_number;
use App\Dob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class DobController extends Controller {

    public function create() {
        return view('account.dob.create');
    }

    public function store($request) {
        $this->validate($request, [
            'date' => 'required',
            'user_id' => 'required',
        ]);

        Dob::create($request->all());
        return redirect()->route('account.index')->with('success','Phone Number created successfully');
    }

    public function edit($user_id) {
        return null;
    }

    public function update(Request $request, $user_id) {
        return null;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Item::find($id)->delete();
        return redirect()->route('itemCRUD.index')
            ->with('success','Item deleted successfully');
    }

}