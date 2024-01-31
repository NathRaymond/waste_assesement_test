<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function registeruser()
    {
        return view('auth.register');
    }
    public function storeuser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:8|regex:/^(?=.*[A-Z])/i',
        ]);

        if ($validator->fails()) {
            return API_Response('error', $validator->errors(), bad_response_status_code());
        }

        try {
            // Create a new User
            $user = new User;
            $user->first_name = $request->input('first_name');
            $user->last_name = $request->input('last_name');
            $user->username = $request->input('username');
            $user->password = Hash::make($request->input('password'));
            $user->save();

            return API_Response('ok', 'Record saved successfully!', success_status_code());
        } catch (\Exception $exception) {
            return API_Response('error', $exception->getMessage(), bad_response_status_code());
        }
    }
}
