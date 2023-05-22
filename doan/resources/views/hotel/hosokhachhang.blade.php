@extends('hotel.back.datphong.master2')
@section('main')
<div class="info-thong_tin" style="margin: 50px; align-items: center">

    <div class="gr-dia_chi"> 

        <div class="title-dia_chi"><h3 style="font-weight: 700; height: 40px;line-height: 40px; color: #fff;">
            Thông tin khách hàng
        </h3> 
       </div>

        <div class="body-dia_chi">
                
                <h2 style="text-align: center; margin-top: 15px">Thông tin khách hàng</h2>
            

            <form action="{{ route('updateKH') }}" method="post">                
                @csrf
                @method('PUT')
                <div class="for-dia_chi">
                    <label for="" >Tên Khách Hàng <span style="color: red;"> *</span></label>
                    <input type="text" name="tenkhachhang" value="{{$result->tenkhachhang}}" class="input-dia_chi">
                </div>
                <div class="for-dia_chi">
                    <label for="" >Số Điện Thoại<span style="color: red;"> *</span></label>
                    <input type="text" name="sodienthoaiKH" value="{{$result->sodienthoaiKH}}" class="input-dia_chi">
                </div>
                <div class="for-dia_chi">
                    <label for="" >Căn Cước Công Dân<span style="color: red;"> *</span></label>
                    <input type="text" name="cccd" value="{{$result->cccd}}" class="input-dia_chi">
                </div>
                <div class="for-dia_chi">
                    <label for="" style="display: block" >Email<span style="color: red;"> *</span></label>
                    <input type="email" name="email" value="{{$result->email}}" class="input-dia_chi">
                </div>

                {{-- button submit --}}
                <div class="post-lessor" style="justify-content: end; margin: auto 20px 20px auto">                                            
                    <button class="button" type="submit">Sửa thông tin</button>
                </div>

            </form>

        </div>

        </div>
     
    

<!-- thông tin cho thuê-->
      
<!-- IMAGES TRỌ-->
       

<!--lịch đăng tin-->



  </div>
@endsection