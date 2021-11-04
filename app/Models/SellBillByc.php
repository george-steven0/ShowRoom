<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellBillByc extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'carNumber','brand','model','chase','motor','liters','fuel','client_id','address',
        'idNumber','installments','date','color','shape','passengerNum','weight','load','comericalRecord',
        'trafficManger','type','serialNum'
    ];

    public function client()
    {
        $client = Client::find($this->client_id);
        return $client;
    }

    public function chase()
    {
        $chase = BuyBill::where('chase',$this->chase)->get()->first();
        if($chase == null)
        {
            return null;
        }
        return $chase->type;
    }
}

