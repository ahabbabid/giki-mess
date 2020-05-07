<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;
class Status extends Model
{
    protected $fillable=['status'];
    public function student(){
        $this->belongsTo(Student::class);
    }
}
