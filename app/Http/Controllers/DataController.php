<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Dealer;
use App\Models\BuyBill;
use App\Models\SellBill;
use App\Models\SellBillByc;
use App\Models\TaxBillByc;
use App\Models\TaxBillCar;
use Illuminate\Http\Request;
use PDF;

class DataController extends Controller
{
    public function index()
    {
        $dealers = Dealer::all();
        $clients = Client::all();
        $buybills = BuyBill::all();
        $sellbills = SellBill::all();
        $sellbillsByc = SellBillByc::all();
        $taxbillsCar = TaxBillCar::all();
        $taxbillsByc = TaxBillByc::all();
        return view('index',
        [
            'dealers'=>$dealers,
            'clients'=>$clients,
            'buybills'=>$buybills,
            'sellbills'=>$sellbills->merge($sellbillsByc),
            'sellbillCars'=>$sellbills,
            'sellbillByc'=>$sellbillsByc,
            'taxbillsCar'=>$taxbillsCar,
            'taxbillsByc'=>$taxbillsByc
        ]);
    }


}
