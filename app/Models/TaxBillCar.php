<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxBillCar extends Model
{
    use HasFactory;
    protected $fillable=
    [
        'sellBillId','date','clientName','address','totalPrice','chase','motor',
        'model','brand','carPrice','addedMoney','developFee','insurance','insuranceFee',
        'billTotal'

    ];
}
