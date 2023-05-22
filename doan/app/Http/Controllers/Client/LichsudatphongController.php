<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LichsudatphongController extends Controller
{
    public function viewLichsudatphong() {
       $result = DB::table('thongtindatphong')->where('maKH', session()->get('maKH'))->get();
    //    dd($result->maKH);
       return view('hotel.lichsudatphong', compact('result'));
    }
}
