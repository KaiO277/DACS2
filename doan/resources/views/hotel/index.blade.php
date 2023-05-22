@extends('hotel.back.home.master')
@section('main')


    <div id="root">
        <section class="filter-section">
            <div class="filter-bg">
                <img src="{{ url('public/images') }}/slide-bg.jpg" alt="">
            </div>
            <div class="filter-wrapper">
                <div class="filter-title">
                    <h1 class="title">Website đặt phòng nhanh chóng và hiệu quả</h1>
                    <h4 class="subtitle">Hãy để chúng tôi giúp bạn thay đổi cuộc sống</h4>



                </div>

                {{-- Search Box --}}

                <div class="search-box" style="display: flex; justify-content: center">
                    <form action="{{ route('clientphong.index') }}"
                        style="display: flex; justify-content: center; width: 70%; background: #fff; border-radius: 30px">
                        @csrf
                        <input style="padding: 10px 15px; width: 100%; border-radius: 30px; text-align: center"
                            type="text" name="key" placeholder="Bạn muốn tìm gì ?">
                        <button style="background: #fff; padding: 15px 15px; border-radius: 30px" type="submit"
                            class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>

            </div>
        </section>


        <!-- FORM - LOGIN -->
        {{-- <div class="form-login ">
        <div class="overlay-login">
            <div class="login active">
                <div class="btn-close">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="form">
                    <h2>Đăng nhập</h2>
                    <input type="text" placeholder="Tên đăng nhập">
                    <input type="password" placeholder="Mật khẩu">
                    <div class="login-sub-option">
                        <a href="#">Quên mật khẩu?</a>
                        <a href="#">Tạo tài khoản mới!</a>
                    </div>
                    <button class="button button--submit active">Đăng nhập</button>
                </div>
            </div>
        </div>
    </div> --}}
        <!-- FORM - SIGN UP -->
        {{-- <div class="form-sign-up ">
        <div class="overlay-sign">
            <div class="sign active">
                <div class="btn-close">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="form">
                    <h2>Đăng Kí</h2>
                    <input type="text" placeholder="Tên tài khoản">
                    <input type="text" value="exam@gmail.com" placeholder="Email của bạn">
                    <input type="password" placeholder="Password">
                    <input type="password" placeholder="Confrim Password">
                </div>
                <button class="button button--submit active">Đăng KÍ</button>
                <h5>Fast Sign Up With Your favourite Social Profile </h5>

            </div>
        </div>
    </div> --}}
        <a href="#page-top" class="gototop">
            <i class="fa-solid fa-angle-up"></i>
        </a>
        <div class="main">
            <div class="main-wrapper">
                <div class="main-breadcrumbs">
                    <a href="#" class="mb-home">
                        <i class="fa-solid fa-house"></i>
                        <span>Home</span>
                    </a>
                </div>

                <div class="main-locations">
                    <h3 class="main-loca-title">Khu vực nổi bật</h3>
                    <ul class="main-loca-list">
                        <li class="main-loca-item">
                            <a href="#" class="main-local-link">
                                <div class="ml-img">
                                    <img src="{{ url('public/images') }}/tphcm.jpg" alt="">
                                </div>
                                <div class="ml-content">
                                    Hồ chí minh
                                </div>
                            </a>
                        </li>
                        <li class="main-loca-item">
                            <a href="#" class="main-local-link">
                                <div class="ml-img">
                                    <img src="{{ url('public/images') }}/hanoi.jpeg" alt="">
                                </div>
                                <div class="ml-content">
                                    Hà nội
                                </div>
                            </a>
                        </li>
                        <li class="main-loca-item">
                            <a href="#" class="main-local-link">
                                <div class="ml-img">
                                    <img src="{{ url('public/images') }}/danang.jpg" alt="">
                                </div>
                                <div class="ml-content">
                                    Đà nẵng
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="main-content">
                    <div class="left-content">

                        <div class="main-post">
                            <h3 class="main-post-title">Danh sách tin đăng</h3>
                            <div class="main-post-sort">
                                <span>Sắp xếp:</span>
                                <button class="button">Mặc định</button>
                                <button class="button"><a href="{{ route('clientphong.show', 'giatuthapdencao') }}">Giá từ
                                        thấp đến cao <i class="fa-solid fa-angle-up"></i></a></button>
                                <button class="button"><a href="{{ route('clientphong.show', 'giatucaodenthap') }}">Giá từ
                                        cao đến thấp <i class="fa-solid fa-angle-down"></i></a></button>            
                            </div>
                            <ul class="post-list">
                                @if ($result == null)
                                    <br>
                                    <h3>Không có kết quả tìm thấy</h3>
                                    <br>
                                @else
                                    @foreach ($result as $item)
                                            <li class="post-item">
                                                <div class="post-img">
                                                    <a href="#">
                                                        <img src="{{ url('public/uploads/' . $item->image) }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="post-content">
                                                    <a href="#" class="post-title">
                                                        {{ $item->tenkhachsan }}
                                                    </a>
                                                    
                                                    <div class="post-location">
                                                        <i class="fa-solid fa-wallet"></i>
                                                        <span class="post-location-value">
                                                            Giá phòng: {{ $item->giaphong }}
                                                        </span>
                                                    </div>
                                                    <div class="post-location">
                                                        <i class="fa-solid fa-map-location-dot"></i>
                                                        <span class="post-location-value">
                                                            Địa chỉ: {{ $item->diachi }}
                                                        </span>
                                                    </div>
                                                    <div class="post-price">
                                                        <span class="post-price-value">{{ $item->sodienthoai }}</span>
                                                    </div>
                                                    <div class="post-lessor" >
                                                        @foreach ($result2 as $item2)
                                                            @if ($item2->sophong == $item->sophong)
                                                                <p style="font-size: 20px"> 
                                                                @for ($i = 0; $i < 5; $i++)
                                                                    @if ($i < round($item2->rating))
                                                                        <b style="color: #ffc83d">★</b>
                                                                    @else 
                                                                    <b style="color: #efefef">★</b>
                                                                    @endif
                                                                @endfor
                                                                </p>
                                                            @endif                                                      
                                                        @endforeach
                                                        @foreach ($result2 as $item2)
                                                            @if ($item2->sophong != $item->sophong)
                                                                <p></p>
                                                            @endif                                                      
                                                        @endforeach
                                                        <button class="button" style="align-content: flex-end"><a
                                                                href="{{ route('clientphong.edit', $item->sophong) }}">Chi tiết
                                                            </a>
                                                        </button>
                                                        
                                                    </div>
                                                </div>
                                            </li>                                                
                                            
                                    @endforeach
                                @endif


                            </ul>

                            <div style="margin: 5px 5px">{{ $result->links() }}</div>
                        </div>

                        
                        <!-- pagination-->
                        

                        {{-- <div class="pagination">
                            <nav>
                                <ul class="pagination" style="display: flex">

                                    <li class="page-item" style="margin-left: 10px">
                                        <a class="page-link" href="http://localhost:8080/doan1/client/index?page=1"
                                            rel="prev" aria-label="&laquo; Previous">&lsaquo;</a>
                                    </li>





                                    <li class="page-item" style="margin-left: 10px"><a class="page-link"
                                            href="http://localhost:8080/doan1/client/index?page=1">1</a></li>
                                    <li class="page-item active" style="margin-left: 10px" aria-current="page"><span
                                            class="page-link">2</span>
                                    </li>
                                    <li class="page-item" style="margin-left: 10px"><a class="page-link"
                                            href="http://localhost:8080/doan1/client/index?page=3">3</a></li>
                                    <li class="page-item" style="margin-left: 10px"><a class="page-link"
                                            href="http://localhost:8080/doan1/client/index?page=4">4</a></li>


                                    <li class="page-item" style="margin-left: 10px">
                                        <a class="page-link" href="http://localhost:8080/doan1/client/index?page=3"
                                            rel="next" aria-label="Next &raquo;">&rsaquo;</a>
                                    </li>
                                </ul>
                            </nav>

                        </div> --}}
                        <!-- -->

                    </div>



                    <div class="right-content">
                        <div class="main-sidebar">
                            <div class="ms-section ms-category">
                                <h3 class="ms-title">Khu vực</h3>
                                <div class="ms-content">
                                    <ul class="msc-list">
                                        <li class="msc-item">
                                            <a href="{{ route('clientphong.show', '1') }}" class="msc-link">Hà Nội</a>
                                        </li>
                                        <li class="msc-item">
                                            <a href="{{ route('clientphong.show', '2') }}" class="msc-link">Đà Nẵng</a>
                                        </li>
                                        <li class="msc-item">
                                            <a href="{{ route('clientphong.show', '3') }}" class="msc-link">Hồ Chí
                                                Minh</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ms-section ms-prices">
                                <h3 class="ms-title">Xem theo giá</h3>
                                <div class="ms-content">
                                    <ul class="msp-list">
                                        <li class="msp-item">
                                            <a href="{{ route('clientphong.show', 'duoi1trieu') }}" class="msp-link">
                                                <i class="fa-solid fa-angle-right"></i>
                                                <span>Dưới 1 triệu</span>
                                            </a>
                                        </li>
                                        <li class="msp-item">
                                            <a href="{{ route('clientphong.show', 'tu1den2trieu') }}" class="msp-link">
                                                <i class="fa-solid fa-angle-right"></i>
                                                <span>Từ 1 - 2 triệu</span>
                                            </a>
                                        </li>
                                        <li class="msp-item">
                                            <a href="{{ route('clientphong.show', 'tu2den3trieu') }}" class="msp-link">
                                                <i class="fa-solid fa-angle-right"></i>
                                                <span>Từ 2 - 3 triệu</span>
                                            </a>
                                        </li>
                                        <li class="msp-item">
                                            <a href="{{ route('clientphong.show', 'lonhon3trieu') }}" class="msp-link">
                                                <i class="fa-solid fa-angle-right"></i>
                                                <span>Trên 3 triệu</span>
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
        </div>
    </div>






@endsection
