<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PhongRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminPhongController extends Controller
{
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = DB::table('phong')->paginate(7);
        if($key = request()->key)
        {
            $result = DB::table('phong')->where('tenkhachsan','like','%'.$key.'%')->paginate(7);
        }
        return view('Admin.Phong.index',compact('result'))->with('i', (request()->input('result', 1) -1) *7);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Phong.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PhongRequest $request)
    {
        // dd($request->sltKhuVuc);
        if($request->has('txtImage')){
            $file = $request->txtImage;
            $ext = $request->txtImage->extension();
            $file_name = time().'-product'.'.'.$ext;
            $file->move(public_path('uploads'), $file_name);
        }
        $request->merge(['image'=>$file_name]);
        $params = [ 
            'tenkhachsan'=>$request->txtTenKS, 
            'giaphong'=>$request->txtGiaPhong, 
            'mota'=>$request->txtMota, 
            'khuvuc'=>$request->sltKhuVuc,
            'diachi'=>$request->txtDiachi , 
            'sodienthoai'=>$request->txtSoDT, 
            'image'=>$file_name,
        ];
        DB::table('phong')->insert($params);
        return redirect()->route('adminphong.index');
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
        $result = DB::table('phong')->where('sophong',$id)->first();
        return view('admin.phong.edit',['result'=>$result]);
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
        if($request->has('txtImage')){
            $file = $request->txtImage;
            $ext = $request->txtImage->extension();
            $file_name = time().'-product'.'.'.$ext;
            $file->move(public_path('uploads'), $file_name);
        }
        $request->merge(['image'=>$file_name]);
        $params = [ 
            'tenkhachsan'=>$request->txtTenKS,  
            'giaphong'=>$request->txtGiaPhong, 
            'khuvuc'=>$request->khuvuc,
            'diachi'=>$request->txtDiachi , 
            'sodienthoai'=>$request->txtSoDT, 
            'image'=>$file_name,
        ];
        DB::table('phong')->where('sophong',$id)->update($params);
         return redirect()->route('adminphong.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        DB::table('phong')->where('sophong',$id)->delete();
        return redirect()->route('adminphong.index');
    }
}
