<?php

namespace App\Http\Controllers;

use App\Phone_number;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\PHP;


class PhoneController extends Controller {

    public function create() {
        return view('account.phone.create');
    }

    public function store($request) {
        $this->validate($request, [
            'name' => 'required',
            'number' => 'required',
            'user_id' => 'required',
        ]);

        Phone_number::create($request->all());
        return redirect()->route('account.index')->with('success','Phone Number created successfully');
    }

    public function show($id) {
        $phone = Phone_number::find($id);
        return view('account.dob.edit', compact('phone'));
    }

    public function edit($id) {
        $phone = Phone_number::find($id);
        return view('account.dob.edit', compact('phone'));
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'name' => 'required',
            'number' => 'required',
        ]);

        Phone_number::find($id)->update($request->all());
        return redirect()->route('account.index')
            ->with('success','Date of Birth updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        Phone_number::find($id)->delete();
        return redirect()->route('account.index')->with('success','Phone number deleted successfully');
    }

}
