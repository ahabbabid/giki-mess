<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Administrator extends Model
{
    protected $guarded=[];
    public function user(){
        return $this->morphOne(User::class, 'authenticable');
    }
}
