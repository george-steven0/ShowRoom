<?php

namespace App\Http\Controllers;

use App\Models\renew;
use App\Models\SellBill;
use App\Models\RenewBill;
use App\Models\SellBillByc;
use Illuminate\Http\Request;

class ReNewController extends Controller
{
    public function getInfo($id)
    {
        if(SellBill::find($id)==null)
        {
            $sellbill = SellBillByc::find($id);

        }else if( $sellbill = SellBillByc::find($id) == null)
        {
            $sellbill = SellBill::find($id);
        }
        $sellbill->installments = $sellbill->client_id;
        $sellbill->client_id = $sellbill->client()->name;
        return response()->json($sellbill);
    }

    public function store(Request $request)
    {
            $renew = new RenewBill();
            $renew->sellbillId = $request->sellbillId;
            $renew->trafficManger = $request->trafficManger;
            $renew->type = $request->type;
            $renew->carNumber = $request->carNumber;
            $renew->brand = $request->brand;
            $renew->model = $request->model;
            $renew->chase = $request->chase;
            $renew->motor = $request->motor;
            $renew->liters = $request->liters;
            $renew->color = $request->color;
            $renew->shape = $request->shape;
            $renew->passengerNum = $request->passengerNum;
            $renew->weight = $request->weight;
            $renew->load = $request->load;
            $renew->fuel = $request->fuel;
            $renew->client_id = $request->client_id;
            $renew->address = $request->address;
            $renew->idNumber = $request->idNumber;
            $renew->comericalRecord = $request->comericalRecord;
            $renew->installments = $request->installments;
            $renew->date = $request->date;
            $renew->serialNum = $request->serialNum;
            $renew->save();
            // return redirect()->route('showPdf',$renew);
            return response()->json();
    }

    public function editRenew($id)
    {
        $renew = RenewBill::find($id);
        $sellbills = SellBill::all();

        return view('editRenewBill',
        [
            'renew'=>$renew,
            'sellbills'=>$sellbills
        ]);
    }


    public function update(Request $request, $id)
    {
            $renew = RenewBill::find($id);
            $renew->sellbillId = $request->sellbillId;
            $renew->trafficManger = $request->trafficManger;
            $renew->type = $request->type;
            $renew->carNumber = $request->carNumber;
            $renew->brand = $request->brand;
            $renew->model = $request->model;
            $renew->chase = $request->chase;
            $renew->motor = $request->motor;
            $renew->liters = $request->liters;
            $renew->color = $request->color;
            $renew->shape = $request->shape;
            $renew->passengerNum = $request->passengerNum;
            $renew->weight = $request->weight;
            $renew->load = $request->load;
            $renew->fuel = $request->fuel;
            $renew->client_id = $request->clientId;
            $renew->address = $request->address;
            $renew->idNumber = $request->idNumber;
            $renew->comericalRecord = $request->comericalRecord;
            $renew->installments = $request->installments;
            $renew->date = $request->date;
            $renew->serialNum = $request->serialNum;
            $renew->save();
            // return redirect()->route('showPdf',$renew);
            return redirect()->route('allData');
    }

    public function destroy($id)
    {
        $renew = RenewBill::find($id);
        $renew->delete();

        return redirect()->route('allData');
    }


}
