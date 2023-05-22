<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KhachHangController extends Controller
{
    public function edit() {
       $result = DB::table('khachhang')->where('maKH', session()->get('maKH'))->first();
    //    dd($result->tenkhachhang);
       return view('hotel.hosokhachhang', compact('result'));
    }
    public function update(Request $request) {
        $params = [
            'tenkhachhang' =>$request->tenkhachhang,
            'sodienthoaiKH' =>$request->sodienthoaiKH,
            'cccd' =>$request->cccd,
            'email' =>$request->email
        ];
       DB::table('khachhang')->where('maKH', session()->get('maKH'))->update($params);
       return redirect()->route('editKH');
    }
}
