<?php

namespace App\Http\Controllers;

use App\Administrator;
use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\Hash;
class TestController extends Controller
{
    public function createStudent(){
        $student =Student::create(['name'=>'ahabbabid', 'registration_number'=>3]);
        $student->user()->create(['name'=>$student->registration_number, 'email'=>'ahabbabid@example.com', 'password'=> Hash::make('ahabb')]);
        $student->statuses()->create(['status'=>'in']);
    }
    public function createAdmin(){
        $admin= Administrator::create(['name'=>'ahabb']);
        $admin->user()->create(['name'=>$admin->name, 'email'=>'ahabbabid@hello.com', 'password'=>Hash::make('hello')]);
    }
}
