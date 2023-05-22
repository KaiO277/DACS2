@extends('hotel.back.datphong.master2')
@section('main')
<div class="info-thong_tin" style="margin: 50px; align-items: center">

    <h1>Lịch sử đặt phòng</h1>

    <table class="styled-table">
        <thead>
            <tr>
                <th>Mã đặt phòng</th>
                    <th>CheckIn</th>
                    <th>CheckOut</th>
                    <th>Số phòng</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($result as $item)
                    <tr >
                        
                        <td>{{$item->madatphong}}</td>
                        <td>{{$item->CheckIn}}</td>
                        <td>{{$item->CheckOut}}</td>
                        <td scope="row">{{$item->sophong}}</td>
                    </tr>
                    @endforeach
            <!-- and so on... -->
        </tbody>
    </table>
    
    

</div>
@endsection