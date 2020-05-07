<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $guarded=[];
    public function SaleInvoice(){
        return $this->belongsTo(SaleInvoice::class);
    }
}
