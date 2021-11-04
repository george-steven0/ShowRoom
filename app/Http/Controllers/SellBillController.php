<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\SellBill;
use App\Models\BuyBill;
use App\Models\SellBillByc;
use Illuminate\Http\Request;

class SellBillController extends Controller
{
    public function store(Request $request)
    {
        if($request->type == 'سيارة')
        {
            $sellBill = new SellBill();
            $sellBill->trafficManger = $request->trafficManger;
            $sellBill->type = $request->type;
            $sellBill->carNumber = $request->carNumber;
            $sellBill->brand = $request->brand;
            $sellBill->model = $request->model;
            $sellBill->chase = $request->chase;
            $sellBill->motor = $request->motor;
            $sellBill->liters = $request->liters;
            $sellBill->color = $request->color;
            $sellBill->shape = $request->shape;
            $sellBill->passengerNum = $request->passengerNum;
            $sellBill->weight = $request->weight;
            $sellBill->load = $request->load;
            $sellBill->fuel = $request->fuel;
            $sellBill->client_id = $request->client_id;
            $sellBill->address = $request->address;
            $sellBill->idNumber = $request->idNumber;
            $sellBill->comericalRecord = $request->comericalRecord;
            $sellBill->installments = $request->installments;
            $sellBill->date = $request->date;
            $sellBill->serialNum = $request->serialNum;
            $sellBill->save();
            // return redirect()->route('showPdf',$sellBill);
            return response()->json();
        }

        $sellBill = new SellBillByc();
            $sellBill->trafficManger = $request->trafficManger;
            $sellBill->type = $request->type;
            $sellBill->carNumber = $request->carNumber;
            $sellBill->brand = $request->brand;
            $sellBill->model = $request->model;
            $sellBill->chase = $request->chase;
            $sellBill->motor = $request->motor;
            $sellBill->liters = $request->liters;
            $sellBill->color = $request->color;
            $sellBill->shape = $request->shape;
            $sellBill->passengerNum = $request->passengerNum;
            $sellBill->weight = $request->weight;
            $sellBill->load = $request->load;
            $sellBill->fuel = $request->fuel;
            $sellBill->client_id = $request->client_id;
            $sellBill->address = $request->address;
            $sellBill->idNumber = $request->idNumber;
            $sellBill->comericalRecord = $request->comericalRecord;
            $sellBill->installments = $request->installments;
            $sellBill->date = $request->date;
            $sellBill->serialNum = $request->serialNum;
            $sellBill->save();
            // return redirect()->route('showPdf',$sellBill);
            return response()->json();

    }

    public function edit($id)
    {
        if(SellBill::find($id)==null)
        {
            $sellbill = SellBillByc::find($id);

        }else if( $sellbill = SellBillByc::find($id) == null)
        {
            $sellbill = SellBill::find($id);
        }
        $clients = Client::all();
        $buybills = BuyBill::all();
        return view('editSellBill',
        [
            'sellbill'=> $sellbill,
            'buybills'=>$buybills,
            'clients'=>$clients
        ]);
    }

    public function update($id ,Request $request)
    {

        // $this->validate($request,
        // [
        //     'dealer_id'=>'required',
        //     'type'=>'required',
        //     'brand'=>'required',
        //     'model'=>'required',
        //     'chase'=>'required',
        //     'motor'=>'required',
        //     'date'=>'required',
        //     'driver'=>'required'
        // ]);
        if(SellBill::find($id)==null)
        {
            $sellBill = SellBillByc::find($id);

        }else if( $sellBill = SellBillByc::find($id) == null)
        {
            $sellBill = SellBill::find($id);
        }
        $sellBill->trafficManger = $request->trafficManger;
        $sellBill->type = $request->type;
        $sellBill->carNumber = $request->carNumber;
        $sellBill->brand = $request->brand;
        $sellBill->model = $request->model;
        $sellBill->chase = $request->chase;
        $sellBill->motor = $request->motor;
        $sellBill->liters = $request->liters;
        $sellBill->color = $request->color;
        $sellBill->shape = $request->shape;
        $sellBill->passengerNum = $request->passengerNum;
        $sellBill->weight = $request->weight;
        $sellBill->load = $request->load;
        $sellBill->fuel = $request->fuel;
        $sellBill->client_id = $request->client_id;
        $sellBill->address = $request->address;
        $sellBill->idNumber = $request->idNumber;
        $sellBill->comericalRecord = $request->commericalRecord;
        $sellBill->installments = $request->installments;
        $sellBill->date = $request->date;
        $sellBill->serialNum = $request->serialNum;
        $sellBill->save();
        // return redirect()->route('downloadPdf',$sellBill);
        return redirect()->route('allData');
    }

    public function destroy($id)
    {
        if(SellBill::find($id)==null)
        {
            $sellbill = SellBillByc::find($id);

        }else if( $sellbill = SellBillByc::find($id) == null)
        {
            $sellbill = SellBill::find($id);
        }
        $sellbill->delete();
        return redirect()->route('allData');
    }

    public function show($id)
    {
        if(SellBill::find($id)==null)
        {
            $sellbill = SellBillByc::find($id);

        }else if( $sellbill = SellBillByc::find($id) == null)
        {
            $sellbill = SellBill::find($id);
        }
        return view('showSellBill',
        [
            'sellbill'=>$sellbill
        ]);
    }

    public function getSellBillBycInfo($id)
    {
        if(SellBill::find($id)==null)
        {
            $sellbill = SellBillByc::find($id);

        }else if( $sellbill = SellBillByc::find($id) == null)
        {
            $sellbill = SellBill::find($id);
        }

        $sellbill->load = $sellbill->client()->name;

        return response()->json($sellbill);
    }

    public function getSellBillCarInfo($id)
    {
        if(SellBill::find($id)==null)
        {
            $sellbill = SellBillByc::find($id);

        }else if( $sellbill = SellBillByc::find($id) == null)
        {
            $sellbill = SellBill::find($id);
        }

        $sellbill->load = $sellbill->client()->name;

        return response()->json($sellbill);
    }
}
