<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
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

    public function SpecialValidationAgainstHacking($inputs)
    {
        //input is in array
        //iterate that array of data in this function
        //let's prevent SQL Injection and hacking
        foreach ($inputs as $key => $value) {
            $checkData = str_contains(strtolower($value), "select");
            $checkData2 = str_contains(strtolower($value), "sleep");
            $checkData3 = str_contains(strtolower($value), "--");
            $checkData4 = str_contains(strtolower($value), "dbms_pipe");
            $checkData4 = str_contains(strtolower($value), "dbms_pipe");
            $checkData5 = str_contains(strtolower($value), "concat");
            $checkData6 = str_contains(strtolower($value), "*");
            $checkData7 = str_contains(strtolower($value), "information_schema");
            //if data contains select, prevent it from submiting.
            if (
                $checkData2 ||
                $checkData ||
                $checkData4 ||
                $checkData5 ||
                $checkData6 ||
                $checkData7 ||
                $checkData3
            ) {
                return true;
            }

            return false;
        }
    }
    
    public function userlogin(Request $request)
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {

        $ValidateRecords = $this->SpecialValidationAgainstHacking($request->all());
        if ($ValidateRecords == true) {
            return redirect()->back()->withErrors('Invalid data');
        }
        $username = User::where('username', $request->username)->first();
        $getUsername = 'not exist';
        if ($username) {
            $getUsername = $username->username;
        }

        if ($getUsername == 'not exist') {
            return redirect()->back()->withErrors(["exception" => 'These credentials do not match our records']);
        }
        if (Auth::attempt(['username' => $getUsername, 'password' => $request->password])) {
            // $user = Auth::user();
            // $updateLastLogin = $user->update(['last_login' => now()]);
            return redirect()->intended('assesement');
        }  else {
            return redirect()->back()->withErrors(["exception" => 'These credentials do not match our records']);
        }
    }
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}