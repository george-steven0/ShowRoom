<?php

namespace App\Http\Controllers;

use App\Models\FinishBill;
use App\Models\SellBill;
use Illuminate\Http\Request;

class FinishBillController extends Controller
{
    public function store(Request $request)
    {
            $finish = new FinishBill();
            $finish->sellbillId = $request->sellbillId;
            $finish->trafficManger = $request->trafficManger;
            $finish->type = $request->type;
            $finish->carNumber = $request->carNumber;
            $finish->brand = $request->brand;
            $finish->model = $request->model;
            $finish->chase = $request->chase;
            $finish->motor = $request->motor;
            $finish->liters = $request->liters;
            $finish->color = $request->color;
            $finish->shape = $request->shape;
            $finish->passengerNum = $request->passengerNum;
            $finish->weight = $request->weight;
            $finish->load = $request->load;
            $finish->fuel = $request->fuel;
            $finish->client_id = $request->client_id;
            $finish->address = $request->address;
            $finish->idNumber = $request->idNumber;
            $finish->comericalRecord = $request->comericalRecord;
            $finish->installments = $request->installments;
            $finish->date = $request->date;
            $finish->serialNum = $request->serialNum;
            $finish->save();
            // return redirect()->route('showPdf',$finish);
            return response()->json();
    }

    public function edit($id)
    {
        $finishbill = FinishBill::find($id);
        $sellbills = SellBill::all();

        return view('editFinishBill',
        [
            'finishbill'=>$finishbill,
            'sellbills'=>$sellbills
        ]);
    }

    public function update(Request $request, $id)
    {
            $finish = FinishBill::find($id);
            $finish->sellbillId = $request->sellbillId;
            $finish->trafficManger = $request->trafficManger;
            $finish->type = $request->type;
            $finish->carNumber = $request->carNumber;
            $finish->brand = $request->brand;
            $finish->model = $request->model;
            $finish->chase = $request->chase;
            $finish->motor = $request->motor;
            $finish->liters = $request->liters;
            $finish->color = $request->color;
            $finish->shape = $request->shape;
            $finish->passengerNum = $request->passengerNum;
            $finish->weight = $request->weight;
            $finish->load = $request->load;
            $finish->fuel = $request->fuel;
            $finish->client_id = $request->clientId;
            $finish->address = $request->address;
            $finish->idNumber = $request->idNumber;
            $finish->comericalRecord = $request->comericalRecord;
            $finish->installments = $request->installments;
            $finish->date = $request->date;
            $finish->serialNum = $request->serialNum;
            $finish->save();
            // return redirect()->route('showPdf',$finish);
            return redirect()->route('allData');
    }

    public function destroy($id)
    {
        $finishbill = FinishBill::find($id);
        $finishbill->delete();
        return redirect()->route('allData');
    }
}
