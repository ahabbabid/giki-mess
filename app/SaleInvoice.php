<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaleInvoice extends Model
{
    protected $guarded=[];
    public function sales(){
        return $this->hasMany(Sale::class);
    }
}
