<?php

namespace App\Http\Controllers;

use App\Dob;
use Illuminate\Http\Request;


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

    public function edit($id) {
        return null;
    }

    public function update(Request $request, $id) {
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
        Dob::find($id)->delete();
        return redirect()->route('account.index')->with('success','Date of Birth deleted successfully');
    }

}
