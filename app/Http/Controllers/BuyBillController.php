<?php

namespace App\Http\Controllers;

use App\Models\BuyBill;
use Illuminate\Http\Request;

class BuyBillController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'dealer_id'=>'required',
            'type'=>'required',
            'brand'=>'required',
            'model'=>'required',
            'chase'=>'required',
            'motor'=>'required',
            'date'=>'required',
            'driver'=>'required'
        ]);
        $Buybill = new BuyBill();
        $Buybill->dealer_id = $request->dealer_id;
        $Buybill->type = $request->type;
        $Buybill->brand = $request->brand;
        $Buybill->model = $request->model;
        $Buybill->chase = $request->chase;
        $Buybill->motor = $request->motor;
        $Buybill->date = $request->date;
        $Buybill->driver = $request->driver;
        $Buybill->save();
        return response()->json();
    }

    public function edit($id)
    {
        $buybill = BuyBill::find($id);
        return response()->json($buybill);
    }

    public function update(Request $request)
    {
        $this->validate($request,
        [
            'dealer_id'=>'required',
            'type'=>'required',
            'brand'=>'required',
            'model'=>'required',
            'chase'=>'required',
            'motor'=>'required',
            'date'=>'required',
            'driver'=>'required'
        ]);
        $Buybill = BuyBill::find($request->id);
        $Buybill->dealer_id = $request->dealer_id;
        $Buybill->type = $request->type;
        $Buybill->brand = $request->brand;
        $Buybill->model = $request->model;
        $Buybill->chase = $request->chase;
        $Buybill->motor = $request->motor;
        $Buybill->date = $request->date;
        $Buybill->driver = $request->driver;
        $Buybill->save();
        return response()->json();
    }


    public function destroy($id)
    {
        $dealer = BuyBill::find($id);
        $dealer->delete();
        return redirect()->route('allData');
    }

    public function chaseInfo($selected)
    {
        $chase = BuyBill::where('chase',$selected)->get()->first();
        return response()->json($chase);
    }

}
