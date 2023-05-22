<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KhachHangController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = DB::table('khachhang')->get();
        return view('Admin.KhachHang.index',['result'=>$result]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.khachhang.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $params = [ 
            'tenkhachhang'=>$request->txtTenKhachHang, 
            'cccd'=>$request->txtCCCD, 
            'sodienthoaiKH'=>$request->txtSĐT, 
            'email'=>$request->txtEmail            
        ];
        DB::table('khachhang')->insert($params);
        return redirect()->route('adminkhachhang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = DB::table('khachhang')->where('maKH',$id)->first();
        return view('admin.khachhang.edit',['result'=>$result]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $params = [ 
            'tenkhachhang'=>$request->txtTenKhachHang, 
            'cccd'=>$request->txtCCCD,
            'sodienthoaiKH'=>$request->txtSĐT , 
            'email'=>$request->txtEmail , 
        ];
        DB::table('khachhang')->where('maKH',$id)->update($params);
         return redirect()->route('adminkhachhang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('khachhang')->where('maKH',$id)->delete();
        return redirect()->route('adminkhachhang.index');
    }
}
