<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Client;
use App\Models\Dealer;
use App\Models\BuyBill;
use App\Models\SellBill;
use App\Models\RenewBill;
use App\Models\FinishBill;
use App\Models\TaxBillByc;
use App\Models\TaxBillCar;
use App\Models\SellBillByc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Spatie\Browsershot\Browsershot;
use Illuminate\Support\Facades\Artisan;


class DataController extends Controller
{
    public function index()
    {
        $dealers = Dealer::all();
        $clients = Client::all();
        $buybills = BuyBill::all();
        $sellbills = SellBill::all();
        $renews = RenewBill::all();
        $sellbillsByc = SellBillByc::all();
        $taxbillsCar = TaxBillCar::all();
        $taxbillsByc = TaxBillByc::all();
        $finishbills = FinishBill::all();
        return view('index',
        [
            'dealers'=>$dealers,
            'clients'=>$clients,
            'buybills'=>$buybills,
            'sellbills'=>$sellbills->merge($sellbillsByc),
            'sellbillCars'=>$sellbills,
            'sellbillByc'=>$sellbillsByc,
            'taxbillsCar'=>$taxbillsCar,
            'taxbillsByc'=>$taxbillsByc,
            'renews'=> $renews,
            'finishbills'=>$finishbills
        ]);
    }

    public function backup()
    {

        Artisan::output("backup:run --only db --disable notifications");
    }

}
