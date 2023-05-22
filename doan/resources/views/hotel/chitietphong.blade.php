@extends('hotel.back.datphong.master2')
@section('main')
    <div class="main-wrapper">
        <div class="main-content" style="margin-top: 30px; margin-bottom: 30px">
            <div class="left-content">

                <div class="main-post">
                    <ul class="post-list">
                        <li class="post-item">
                            <div class="post-img">
                                <a href="#">
                                    <img src="{{ url('public/uploads/' . $result->image) }}" alt="">
                                </a>
                            </div>
                            <div class="post-content">
                                <a href="#" class="post-title">
                                    {{ $result->tenkhachsan }}
                                </a>
                                <div class="post-location">
                                    <i class="fa-solid fa-wallet"></i>
                                    <span class="post-location-value">
                                        Giá phòng: {{ $result->giaphong }}
                                    </span>
                                </div>
                                <div class="post-location">
                                    <i class="fa-solid fa-map-location-dot"></i>
                                    <span class="post-location-value">
                                        Địa chỉ: {{ $result->diachi }}
                                    </span>
                                </div>
                                <div class="post-location" style="align-items: baseline;">
                                    <i class="fa-solid fa-comment"></i>
                                    <span class="post-location-value" style="white-space: normal;">
                                        Mô tả: {{ $result->mota }}
                                    </span>
                                </div>
                                <div class="post-price">
                                    <span class="post-price-value">{{ $result->sodienthoai }}</span>
                                </div>
                                <div class="post-lessor" style="justify-content: end">
                                    <button class="button"><a href="{{ route('clientviewdatphong', $result->sophong) }}">Đặt
                                            Ngay
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </li>


                    </ul>

                    <h1>Comment</h1>

                    {{-- Bình luận ở đây --}}
                    <div class="comment" style="margin-top: 20px">
                        @foreach ($result2 as $item2)
                            {{-- <div class="post-location">
                                <i class="fa-regular fa-user"></i> 
                                <div>
                                    <strong>{{$item2->tenhienthi}}</strong>
                                    {{$item2->rating}} ★
                                </div>

                                
                                <br>
                                <div class="description">
                                    <span>{{$item2->comment}}</span>
                                </div> 
                                
                            </div> --}}

                            <table style="width: 100%; margin-bottom: 5px">
                                <tr style="margin-bottom: 10px">
                                    <th rowspan="2" style="font-size: 45px; justify-content: start; width: 5px"><i
                                            class="fa-regular fa-user"></i></th>
                                    {{-- <td><strong style="font-size: 20px">{{ $item2->tenhienthi }} | {{ $item2->rating }}
                                            ★</strong></td> --}}
                                    <td><strong style="font-size: 20px;">{{ $item2->tenhienthi }} | 
                                                @for ($i = 0; $i < 5; $i++)
                                                    @if ($i < $item2->rating)
                                                        <b style="color: #ffc83d">★</b>
                                                    @else
                                                        <b style="color: #efefef">★</b>
                                                    @endif
                                                @endfor
                                            
                                        </strong></td>
                                    {{-- <td ><span style="font-size: 20px"><b>{{$item2->rating}} ★</b></span></td> --}}
                                </tr>
                                <tr>
                                    <td colspan='2'><span style="margin-left: 10px">{{ $item2->comment }}</span></td>
                                </tr>
                            </table>
                        @endforeach

                    </div>
                    {{-- Thêm bình luận --}}

                    <div class="wrapper-rating" style="margin-top: 30px">
                        <h3>Đánh giá của bạn</h3>
                        <form action="{{ route('clientrate', $result->sophong) }}" method="POST">
                            @csrf

                            <div class="rating">
                                <input type="radio" name="rating" id="fiveStar" value="5">
                                <label for="fiveStar" title="rating">5 Star</label>

                                <input type="radio" name="rating" id="fourStar" value="4">
                                <label for="fourStar" title="rating">4 Star</label>

                                <input type="radio" name="rating" id="threeStar" value="3">
                                <label for="threeStar" title="rating">3 Star</label>

                                <input type="radio" name="rating" id="twoStar" value="2">
                                <label for="twoStar" title="rating">2 Star</label>

                                <input type="radio" name="rating" id="oneStar" value="1">
                                <label for="oneStar" title="rating">1 Star</label>

                                <span class="result"></span>
                            </div>
                            {{-- <label for="">Tên hiển thị</label> --}}
                            <input type="text"
                                style="background: #f5f5f5;border-radius: 5px;padding: 7px;
                            margin: 15px 0px;"
                                name="tenhienthi" placeholder="Tên hiện thị của bạn...">

                            <textarea name="opinion" cols="30" rows="5" placeholder="Đánh giá của bạn..."></textarea>

                            <div class="btn-group">
                                <button type="submit" class="btn submit">Submit</button>
                                {{-- <button class="btn cancel">Cancel</button> --}}
                            </div>

                        </form>
                    </div>


                    @if (session('errorChuaDatPhong'))
                        <script>
                            alert('Bạn chưa đặt phòng này nên không thể đánh giá');
                        </script>
                    @endif
                    @if (session('errorDaDanhGia'))
                        <script>
                            alert('Bạn đã đánh giá phòng này rồi');
                        </script>
                    @endif

                    {{-- <script>
                        const allStar = document.querySelectorAll('.rating .star')
                        const ratingValue = document.querySelector('.rating input')

                        allStar.forEach((item, idx) => {
                            item.addEventListener('click', function() {
                                let click = 0
                                ratingValue.value = idx + 1

                                allStar.forEach(i => {
                                    i.classList.replace('bxs-star', 'bx-star')
                                    i.classList.remove('active')
                                })
                                for (let i = 0; i < allStar.length; i++) {
                                    if (i <= idx) {
                                        allStar[i].classList.replace('bx-star', 'bxs-star')
                                        allStar[i].classList.add('active')
                                    } else {
                                        allStar[i].style.setProperty('--i', click)
                                        click++
                                    }
                                }
                            })
                        })
                    </script> --}}


                    {{-- <div class="for-dia_chi" style="display: flex">
                        <div
                            style="width: 48px; display: flex; justify-content: center; align-items: center; font-size: 25px;">
                            <i class="fa-regular fa-user"></i>
                        </div>
                        <input style="margin-bottom: 0; margin-right: 5px" type="text" name="tenkhachhang" value=""
                            placeholder="Thêm bình luận ..." class="input-dia_chi">
                        <button class="button"><a href="">Bình luận
                            </a>
                        </button>
                    </div> --}}


                </div>


                <!-- pagination-->



                <!-- -->

            </div>



            <div class="right-content">
                <div class="main-sidebar">
                    <div class="ms-section ms-category">
                        <h3 class="ms-title">Tiện nghi</h3>
                        <div class="ms-content">
                            <ul class="msc-list">
                                <li class="msc-item">
                                    <a href="{{ route('clientphong.show', '1') }}" class="msc-link">Bể bơi</a>
                                </li>
                                <li class="msc-item">
                                    <a href="{{ route('clientphong.show', '2') }}" class="msc-link">Wifi(miễn phí)</a>
                                </li>
                                <li class="msc-item">
                                    <a href="{{ route('clientphong.show', '3') }}" class="msc-link">Chỗ đậu xe(miễn
                                        phí)</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="ms-section ms-prices">
                        <h3 class="ms-title">Dịch vụ</h3>
                        <div class="ms-content">
                            <ul class="msp-list" style="display: block">
                                <li class="msp-item">
                                    <a href="{{ route('clientphong.show', 'duoi1trieu') }}" class="msp-link">
                                        <i class="fa-solid fa-angle-right"></i>
                                        <span>Có quầy lễ tân hoạt động 24/24</span>
                                    </a>
                                </li>
                                <li class="msp-item">
                                    <a href="{{ route('clientphong.show', 'tu1den2trieu') }}" class="msp-link">
                                        <i class="fa-solid fa-angle-right"></i>
                                        <span>Có dịch vụ giữ hộ hành lý</span>
                                    </a>
                                </li>
                                <li class="msp-item">
                                    <a href="{{ route('clientphong.show', 'tu2den3trieu') }}" class="msp-link">
                                        <i class="fa-solid fa-angle-right"></i>
                                        <span>Có nhân viên hướng dẫn khách</span>
                                    </a>
                                </li>
                                <li class="msp-item">
                                    <a href="{{ route('clientphong.show', 'lonhon3trieu') }}" class="msp-link">
                                        <i class="fa-solid fa-angle-right"></i>
                                        <span>Dịch vụ giặt là</span>
                                    </a>
                                </li>
                                <li class="msp-item">
                                    <a href="{{ route('clientphong.show', 'lonhon3trieu') }}" class="msp-link">
                                        <i class="fa-solid fa-angle-right"></i>
                                        <span>Thang máy</span>
                                    </a>
                                </li>
                                <li class="msp-item">
                                    <a href="{{ route('clientphong.show', 'lonhon3trieu') }}" class="msp-link">
                                        <i class="fa-solid fa-angle-right"></i>
                                        <span>Có dịch vụ dọn phòng</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="ms-section">
        <h3 class="ms-title">các loại xe</h3>
        <div class="ms-content">
            <ul class="msp-list">
                <li class="msp-item">
                    <a href="#" class="msp-link">
                        <i class="fa-solid fa-angle-right"></i>
                        <span>xe 4-5 chỗ</span>
                    </a>
                </li>
                <li class="msp-item">
                    <a href="#" class="msp-link">
                        <i class="fa-solid fa-angle-right"></i>
                        <span>xe 7 chỗ</span>
                    </a>
                </li>
                <li class="msp-item">
                    <a href="#" class="msp-link">
                        <i class="fa-solid fa-angle-right"></i>
                        <span>xe 16 chỗ</span>
                    </a>
                </li>
                <li class="msp-item">
                    <a href="#" class="msp-link">
                        <i class="fa-solid fa-angle-right"></i>
                        <span>xe 29-30 chỗ</span>
                    </a>
                </li>
                
                

            </ul>
        </div>
    </div> --}}
                    <div class="ms-advertisement">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- 
@section('cssRating')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
@endsection

@section('jsRating')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

    <script>
        $(function() {

            $("#rateYo").rateYo({
                rating: 3.6
            });

        });
    </script>
@endsection --}}
