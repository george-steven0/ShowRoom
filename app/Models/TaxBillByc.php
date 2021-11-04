<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxBillByc extends Model
{
    protected $fillable =
    [
        'sellBillId','date','clientName','address','totalPrice','count','carPrice',
        'brand','model','chase','motor','price','addedMoney','billTotal'
    ];
}
