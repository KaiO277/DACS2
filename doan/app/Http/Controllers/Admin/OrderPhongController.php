<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderPhongController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = DB::table('thongtindatphong')->get();
        return view('Admin.Order.index',['result'=>$result]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Order.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderRequest $request)
    {
        dd($request->txtCheckIn);
        $d1 = request()->txtCheckIn;
        $d2 = request()->txtCheckOut;
        if (strtotime($d1) > strtotime($d2)) {
        return redirect()->route('admininfor.create')->withErrors('Hãy nhập ngày trả phòng sau ngày nhận phòng!!');
        } 
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
        $result = DB::table('thongtindatphong')->where('madatphong',$id)->first();
        return view('admin.order.edit',['result'=>$result]);
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
            'maKH'=>$request->txtMaKH,  
            'CheckIn'=>$request->txtCheckIn, 
            'CheckOut'=>$request->txtCheckOut,
            'sophong'=>$request->txtSoPhong , 
        ];
        DB::table('thongtindatphong')->where('madatphong',$id)->update($params);
         return redirect()->route('admininfor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('thongtindatphong')->where('madatphong',$id)->delete();
        return redirect()->route('admininfor.index');
    }
}
