<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $hotel = DB::table('phong')->count();
        $donhang = DB::table('thongtindatphong')->count();
        $khachhang = DB::table('khachhang')->count();
        return view('Admin.indexHome',['hotel'=>$hotel,'donhang'=>$donhang,'khachhang'=>$khachhang]);
    }

    public function charts()
    { 
                $sql = "select * from charts";
                $result = DB::select($sql);
                // dd($result);
            return view('Admin.chart',['result'=>$result]);
    }
}
