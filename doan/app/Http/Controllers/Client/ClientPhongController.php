<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientPhongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = DB::table('phong')->paginate(5);
        if ($key = request()->key) {
            $result = DB::select('SELECT * FROM phong WHERE CONCAT (tenkhachsan, diachi, giaphong) LIKE ?', ['%' . request()->key . '%']);
            // $result->paginate();
        }
        $result2 = DB::select('SELECT AVG(rating) "rating", sophong
        FROM danhgia
        GROUP BY sophong;');
        // dd($result2);

        // $orders = DB::table('orders')
        //         ->select('city', 'state')
        //         ->groupByRaw('city, state')
        //         ->get();


        // dd($result);
        return view('hotel.index', compact('result', 'result2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if ($id == 1) {
            $result = DB::select('select * from phong where khuvuc = "hanoi"');
            $result2 = DB::select('SELECT AVG(rating) "rating", sophong
        FROM danhgia
        GROUP BY sophong;');
        }
        if ($id == 2) {
            $result = DB::select('select * from phong where khuvuc = "danang"');
            $result2 = DB::select('SELECT AVG(rating) "rating", sophong
        FROM danhgia
        GROUP BY sophong;');
        }
        if ($id == 3) {
            $result = DB::select('select * from phong where khuvuc = "hochiminh"');
            $result2 = DB::select('SELECT AVG(rating) "rating", sophong
        FROM danhgia
        GROUP BY sophong;');
        }
        if ($id == 'duoi1trieu') {
            $result = DB::select('select * from phong where giaphong <= 1000000');
            $result2 = DB::select('SELECT AVG(rating) "rating", sophong
        FROM danhgia
        GROUP BY sophong;');
        }
        if ($id == 'tu1den2trieu') {
            $result = DB::select('select * from phong where giaphong >= 1000000 and giaphong <= 2000000');
            $result2 = DB::select('SELECT AVG(rating) "rating", sophong
        FROM danhgia
        GROUP BY sophong;');
        }
        if ($id == 'tu2den3trieu') {
            $result = DB::select('select * from phong where giaphong >= 2000000 and giaphong <= 3000000');
            $result2 = DB::select('SELECT AVG(rating) "rating", sophong
        FROM danhgia
        GROUP BY sophong;');
        }
        if ($id == 'lonhon3trieu') {
            $result = DB::select('select * from phong where giaphong >= 3000000');
            $result2 = DB::select('SELECT AVG(rating) "rating", sophong
        FROM danhgia
        GROUP BY sophong;');
        }
        if ($id == 'giatuthapdencao') {
            $result = DB::select('select * from phong where giaphong >= 0 order by giaphong');
            $result2 = DB::select('SELECT AVG(rating) "rating", sophong
        FROM danhgia
        GROUP BY sophong;');
        }
        if ($id == 'giatucaodenthap') {
            $result = DB::select('select * from phong where giaphong >= 0 order by giaphong desc');
            $result2 = DB::select('SELECT AVG(rating) "rating", sophong
        FROM danhgia
        GROUP BY sophong;');
        }
        // dd($result);
        return view('hotel.index', compact('result', 'result2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = DB::table('phong')->where('sophong', $id)->first();
        $result2 = DB::table('danhgia')->where('sophong', $id)->get();
        // $result3 = DB::table('khachhang')->where('maKH', $id)->first();
        // dd($result2);
        return view('hotel.chitietphong', compact('result', 'result2'));
        // $result = DB::table('phong')->where('sophong', $id)->first();
        // // dd($result);
        // return view('hotel.chitietphong', compact('result'));
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
        //
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
    }

    public function lichsudatphong()
    {
        $result = DB::table('thongtindatphong')->get();
        return view('hotel.lichsudatphong', compact('result'));
    }
}
