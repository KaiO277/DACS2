<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

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

   

    public function login()
    {
        return view('Admin.login.login');
    }

    public function checklogin(Request $request)
    {
        try {
            $user = User::query()
            ->where('name', $request->username)
            ->where('password', $request->password)
            ->firstOrFail(); 
            session()->put('name',$user->name);
            session()->put('id', $user->id);

            return redirect()->route('adminadmin.home');
        }catch(\Throwable $e){
            return redirect()->route('adlogin')->with('error', 'Email hoặc password sai');
        }
        
    }

    public function logout()
    {
        session()->forget(['name', 'id']);

        return redirect()->route('adlogin');
    }
}
