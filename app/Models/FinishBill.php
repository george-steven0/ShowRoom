<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FinishBill extends Model
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
        return $client->name;
    }
}
