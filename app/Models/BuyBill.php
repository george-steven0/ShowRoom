<?php

namespace App\Models;

use App\Models\Dealer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BuyBill extends Model
{
    use HasFactory;
    protected $fillable=
    [
        'dealer_id','type','brand','model','chase','motor','date','driver'
    ];

    public function dealer()
    {
        $dealer = Dealer::find($this->dealer_id);
        return $dealer->name;
    }
}
