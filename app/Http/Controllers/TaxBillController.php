<?php

namespace App\Http\Controllers;

use App\Models\SellBill;
use App\Models\SellBillByc;
use NumberFormatter;
use App\Models\TaxBillByc;
use App\Models\TaxBillCar;
use Illuminate\Http\Request;
use SujalPatel\IntToEnglish\IntToEnglish;
use Stichoza\GoogleTranslate\GoogleTranslate;


class TaxBillController extends Controller
{
    public function storeByc(Request $request)
    {
        $taxBillbyc = new TaxBillByc();

        $taxBillbyc->sellBillId = $request->sellBillId;
        $taxBillbyc->date = $request->date;
        $taxBillbyc->clientName = $request->clientName;
        $taxBillbyc->address = $request->address;
        $taxBillbyc->totalPrice = $request->totalPrice;
        $taxBillbyc->count = $request->count;
        $taxBillbyc->carPrice = $request->carPrice;
        $taxBillbyc->brand = $request->brand;
        $taxBillbyc->model = $request->model;
        $taxBillbyc->chase = $request->chase;
        $taxBillbyc->motor = $request->motor;
        $taxBillbyc->price = $request->price;
        $taxBillbyc->addedMoney = $request->addedMoney;
        $taxBillbyc->billTotal = $request->billTotal;
        $taxBillbyc->save();
        return response()->json();
    }

    public function updateByc($id, Request $request)
    {
        $taxBillbyc = TaxBillByc::find($id);

        $taxBillbyc->sellBillId = $request->sellBillId;
        $taxBillbyc->date = $request->date;
        $taxBillbyc->clientName = $request->clientName;
        $taxBillbyc->address = $request->address;
        $taxBillbyc->totalPrice = $request->totalPrice;
        $taxBillbyc->count = $request->count;
        $taxBillbyc->carPrice = $request->carPrice;
        $taxBillbyc->brand = $request->brand;
        $taxBillbyc->model = $request->model;
        $taxBillbyc->chase = $request->chase;
        $taxBillbyc->motor = $request->motor;
        $taxBillbyc->price = $request->price;
        $taxBillbyc->addedMoney = $request->addedMoney;
        $taxBillbyc->billTotal = $request->billTotal;
        $taxBillbyc->save();
        return redirect()->route('allData');
    }


    public function deleteByc($id)
    {
        $taxbill = TaxBillByc::find($id);
        $taxbill->delete();
        return redirect()->route('allData');
    }

    public function showByc($id)
    {
        $taxbill = TaxBillByc::find($id);
        $word ='Only '. IntToEnglish::Int2Eng($taxbill->billTotal).' Egyptian Pound';
        $tr = GoogleTranslate::trans($word,'ar'). ' لا غير ';
        return view('showTaxBillByc',
        [
            'taxbill' => $taxbill,
            'tr'=>$tr
        ]);


    }

    public function editByc($id)
    {
        $taxbill = TaxBillByc::find($id);
        $sellbills = SellBillByc::all();
        return view('editTaxBillByc',
        [
            'taxbill' => $taxbill,
            'sellbills'=>$sellbills
        ]);
    }

    public function editCar($id)
    { 
        $taxbill = TaxBillCar::find($id);
        $sellbills = SellBill::all();
        return view('editTaxBillCar',
        [
            'taxbill' => $taxbill,
            'sellbills'=>$sellbills
        ]);
    }

    public function storeCar(Request $request)
    {
        $taxBillbyc = new TaxBillCar();

        $taxBillbyc->sellBillId = $request->sellBillId;
        $taxBillbyc->date = $request->date;
        $taxBillbyc->clientName = $request->clientName;
        $taxBillbyc->address = $request->address;
        $taxBillbyc->totalPrice = $request->totalPrice;
        $taxBillbyc->chase = $request->chase;
        $taxBillbyc->motor = $request->motor;
        $taxBillbyc->brand = $request->brand;
        $taxBillbyc->model = $request->model;
        $taxBillbyc->carPrice = $request->carPrice;
        $taxBillbyc->addedMoney = $request->addedMoney;
        $taxBillbyc->developFee = $request->developFee;
        $taxBillbyc->insurance = $request->insurance;
        $taxBillbyc->insuranceFee = $request->insuranceFee;
        $taxBillbyc->billTotal = $request->billTotal;
        $taxBillbyc->save();
        return response()->json();
    }

    public function updateCar($id , Request $request)
    {
        $taxBillbyc = TaxBillCar::find($id);

        $taxBillbyc->sellBillId = $request->sellBillId;
        $taxBillbyc->date = $request->date;
        $taxBillbyc->clientName = $request->clientName;
        $taxBillbyc->address = $request->address;
        $taxBillbyc->totalPrice = $request->totalPrice;
        $taxBillbyc->chase = $request->chase;
        $taxBillbyc->motor = $request->motor;
        $taxBillbyc->brand = $request->brand;
        $taxBillbyc->model = $request->model;
        $taxBillbyc->carPrice = $request->carPrice;
        $taxBillbyc->addedMoney = $request->addedMoney;
        $taxBillbyc->developFee = $request->developFee;
        $taxBillbyc->insurance = $request->insurance;
        $taxBillbyc->insuranceFee = $request->insuranceFee;
        $taxBillbyc->billTotal = $request->billTotal;
        $taxBillbyc->save();
        return redirect()->route('allData');
    }

    public function showCar($id)
    {
        $taxbill = TaxBillCar::find($id);
        $word = IntToEnglish::Int2Eng($taxbill->billTotal).' Egyptian Pound';
        $tr = 'فقط '.GoogleTranslate::trans($word,'ar'). ' لا غير ';
        return view('showTaxBillCar',
        [
            'taxbill' => $taxbill,
            'tr'=>$tr
        ]);
    }

    public function deleteCar($id)
    {
        $taxbill = TaxBillCar::find($id);
        $taxbill->delete();
        return redirect()->route('allData');
    }


}
