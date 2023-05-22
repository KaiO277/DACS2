<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RatingController extends Controller
{
    public function index() {
        $result = DB::table('danhgia')->get();
        return view('Admin.DanhGia.index',['result'=>$result]);
    }
}
