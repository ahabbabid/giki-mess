<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Status;
class Student extends Model
{
    protected $guarded=[];
    public function user(){
        return $this->morphOne(User::class, 'authenticable');
    }

    public function statuses(){
        return $this->hasMany(Status::class);
    }
}
