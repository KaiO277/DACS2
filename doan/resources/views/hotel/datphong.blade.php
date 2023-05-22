@extends('hotel.back.datphong.master2')
@section('main')
<div class="info-thong_tin" style="margin: 50px; align-items: center">

    <div class="gr-dia_chi"> 

        <div class="title-dia_chi"><h3 style="font-weight: 700; height: 40px;line-height: 40px; color: #fff;">
            ĐỊA CHỈ CHO THUÊ
        </h3> 
       </div>

        <div class="body-dia_chi">
                
                <h2 style="margin-left: 30px; margin-top: 10px">Khách Sạn: {{$result->tenkhachsan}}</h2>
                <h2 style="margin-left: 30px; margin-top: 10px">Số Phòng: {{$result->sophong}}</h2>
                <h2 style="margin-left: 30px; margin-top: 10px">Giá Phòng: {{$result->giaphong}}</h2>
                <h2 style="margin-left: 30px; margin-top: 10px; margin-bottom: 20px">Địa chỉ: {{$result->diachi}}</h2>

                <hr style="margin: auto; width: 70%; background-color: rgb(10, 172, 80);size: 10px">
                <h2 style="text-align: center; margin-top: 15px">Thông tin khách hàng</h2>
            

            <form action="{{ route('clientdatphong', $result->sophong)}}" method="post">
                @csrf
                <div class="for-dia_chi">
                    <label for="" >Tên Khách Hàng <span style="color: red;"> *</span></label>
                    <input type="text" name="tenkhachhang" class="input-dia_chi">
                </div>
                <div class="for-dia_chi">
                    <label for="" >Số Điện Thoại<span style="color: red;"> *</span></label>
                    <input type="text" name="sodienthoaiKH" class="input-dia_chi">
                </div>
                <div class="for-dia_chi">
                    <label for="" style="display: block" >Email<span style="color: red;"> *</span></label>
                    <input type="email" name="email" class="input-dia_chi">
                </div>

                <hr style="margin: auto; width: 70%; background-color: rgb(10, 172, 80);size: 10px">
                <h2 style="text-align: center; margin-top: 15px">Thời gian đặt phòng và trả phòng</h2>

                <div class="for-dia_chi">
                    <label  for="PriceOld">Thời gian nhận phòng:<span style="color: red;"> *</span></label>
                    <input type="datetime-local" class="input-dia_chi" id="old"  name="txtCheckIn">
                  </div>
                  <div class="for-dia_chi">
                      <label for="PriceSale">Thời gian trả phòng:<span style="color: red;"> *</span></label>
                      <input type="datetime-local" class="input-dia_chi" id="new" name="txtCheckOut">
                  </div>

                {{-- button submit --}}
                <div class="post-lessor" style="justify-content: end; margin: auto 20px 20px auto">                                            
                    <button class="button" type="submit">Tiếp theo</button>
                </div>

            </form>

        </div>

        </div>
     
    

<!-- thông tin cho thuê-->
      
<!-- IMAGES TRỌ-->
       

<!--lịch đăng tin-->



  </div>
@endsection