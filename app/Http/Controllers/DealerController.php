<?php

namespace App\Http\Controllers;

use App\Models\Dealer;
use Illuminate\Http\Request;

class DealerController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'name'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'bankAcc'=>'required'
        ]);
        $dealer = new Dealer();
        $dealer->name = $request->name;
        $dealer->address = $request->address;
        $dealer->phone = $request->phone;
        $dealer->bankAcc = $request->bankAcc;
        $dealer->save();
        return response()->json();
    }

    public function edit($id)
    {
        $dealer = Dealer::find($id);
        return response()->json($dealer);
    }

    public function update(Request $request)
    {
        $this->validate($request,
        [
            'name'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'bankAcc'=>'required'
        ]);
        $dealer =Dealer::find($request->id);
        $dealer->name = $request->name;
        $dealer->address = $request->address;
        $dealer->phone = $request->phone;
        $dealer->bankAcc = $request->bankAcc;
        $dealer->save();
        return response()->json();
    }

    public function destroy(Request $request,$id)
    {
        $dealer = Dealer::find($request->id);
        $dealer->delete();
        return redirect()->route('allData');
    }
}
