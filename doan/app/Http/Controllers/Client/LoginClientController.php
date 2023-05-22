<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class LoginClientController extends Controller
{
    public function viewLogin() {
        return view('hotel.login');
    }
    public function checkLogin(Request $request) {
        // dd($request->all());
        // $check = [
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ];
        // // dd($check);
        // dd(Auth::attempt(['email' => $request->email, 'password' => $request->password]));
        // if (Auth::attempt($request->only('email', 'password'))){
        //     return view('hotel.index');
        // }
        try {
            $user = User::query()
            ->where('email', $request->email)
            ->where('password', $request->password)
            ->where('access', '1')
            ->firstOrFail(); 
            session()->put('nameKH',$user->name);
            session()->put('idKH', $user->id);
            session()->put('maKH', $user->maKH);

            return redirect()->route('clientphong.index');
        }catch(\Throwable $e){
            return redirect()->route('viewLogin')->with('error', 'Email hoặc password sai');
        }
    }

    public function next(Request $request) {
        $result = $request;
        return view('hotel.khachhanginfo', compact('result'));
    }

    public function register(Request $request) {


        $params = [
            'tenkhachhang' => $request->tenkhachhang,
            'sodienthoaiKH' => $request->sodienthoai,
            'email' => $request->email
        ];

        $idKH = DB::table('khachhang')->insertGetId($params);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'access'=>'1',
            'maKH' => $idKH
        ]);
        return redirect()->route('viewLogin');
    }
    public function logout() {
        session()->forget(['nameKH', 'idKH', 'maKH']);

        return redirect()->route('clientphong.index');
    }
}
