<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Student;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
//    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
//    public function username(){
//        return 'name';
//    }

    public function login(Request $request)
    {


        $name = $request->get('name');
        $password = $request->get('password');
        $credentials = compact('name', 'password');
        if (Auth::attempt($credentials)) {
//            dd('success');
            $user = Auth::user();
            if ($user -> authenticable_type == Student::class) {
                return view('student.portal');
            } else {
                return view('admin.portal');
            }
        }else{
            return redirect()->back();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    public function showLoginForm(){
        return view('auth.login');
    }







}
