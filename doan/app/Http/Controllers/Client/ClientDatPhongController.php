<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ClientDatPhongController extends Controller
{
    
    public function store(Request $request, $sophong)
    {
        $params2 = [ 
            'maKH'=>session()->get('maKH'),
            'CheckIn'=>$request->txtCheckIn, 
            'CheckOut'=>$request->txtCheckOut, 
            'sophong'=>$sophong
        ];

        DB::table('thongtindatphong')->insert($params2);

        // send mail
        $tenkhachhang = $request->tenkhachhang;
        $emailKH = $request->email;
        Mail::send('email.content', compact('tenkhachhang'), function($email) use($request) {
            $email->subject('ĐẶT PHÒNG KHÁCH SẠN');
            $email->to($request->email, $request->tenkhachhang);
        });

        return redirect()->route('clientphong.index');

        // send mail
        $tenkhachhang = $request->tenkhachhang;
        $emailKH = $request->email;
        Mail::send('email.content', compact('tenkhachhang'), function($email) use($request) {
            $email->subject('ĐẶT PHÒNG KHÁCH SẠN');
            $email->to($request->email, $request->tenkhachhang);
        });

        return redirect()->route('clientphong.index');
        // DB::table('thongtindatphong')->insert('');
    }

    public function rate(Request $request, $sophong) {
        // dd($request->all());
        $result = DB::table('thongtindatphong')->where('maKH', session()->get('maKH'))->where('sophong', $sophong)->first();
        $result2 = DB::table('thongtindatphong')->where('maKH', session()->get('maKH'));
        // dd($result);
        if (session()->get('nameKH') == null) {
            return redirect()->route('viewLogin')->with('errorRate', 'Bạn vui lòng đăng nhập để đánh giá');
        } 
        
        if ($result == null) {
            return redirect()->route('clientphong.edit', $sophong)->with('errorChuaDatPhong', 'Bạn chưa đặt phòng này');
        }
        if ($result2 != NULL) {
            return redirect()->route('clientphong.edit', $sophong)->with('errorDaDanhGia', 'Bạn đã đánh giá phòng này');
        }
        else {
            $params1 = [ 
                'maKH'=>session()->get('maKH'),
                'comment'=>$request->opinion, 
                'tenhienthi'=>$request->tenhienthi, 
                'rating'=>$request->rating, 
                'sophong'=>$sophong
            ];
    
            DB::table('danhgia')->insert($params1);
            return redirect()->route('clientphong.edit', $sophong);
        }
        

        
    }

    public function viewdatphong($id) {
        $result = DB::table('phong')->where('sophong', $id)->first();
        return view('hotel.datphong', compact('result'));
    }

   
}
