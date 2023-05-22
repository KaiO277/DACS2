<header id="header">
    <div class="header-wrapper">
        <div id="header-login" class="header-login">
            <div class="logo">
                <a href="" #>
                    <img src="{{ url('public/images') }}/hotellogo.jpg" alt="main logo">
                </a>
            </div>
            <div class="acc-wrapper">

                @if (session()->get('nameKH') == null)
                    <div class="acc-login acc-component">
                        <button class="button btn-login"><a href="{{ route('viewLogin') }}">Đăng nhập/Đăng
                                kí</a></button>
                        {{-- <a class="button btn-login" href="">Đăng nhập/Đăng kí</a> --}}
                    </div>
                    <span class="brand-text font-weight-light"></span>
                    <div class="acc-search acc-component">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                @else
                    <div class="dropdown">
                        <button class="dropbtn"><i class="fa-regular fa-user"></i> {{ session()->get('nameKH') }}</button>
                        <div class="dropdown-content">
                            <a href="{{ route('editKH') }}">Hồ sơ</a>
                            <a href="{{ route('viewLichsudatphong') }}">Lịch sử đặt phòng</a>
                            <a href="{{ route('logout') }}">Đăng xuất</a>
                        </div>
                    </div>
                @endif





            </div>

        </div>
        <div class="header-nav">
            <nav class="navigation">
                <ul class="nav-list">
                    <li class="nav-item active">
                        <a class="nav-link " href="{{ route('clientphong.index') }}">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Khám phá</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cộng đồng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dịch vụ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hướng dẫn</a>
                    </li>
                </ul>
                <!-- <a class="post" href="./pages/post.html">
                    <i class="fa-solid fa-pen-to-square"></i>
                    <span> Đăng tin </span>
                </a> -->
            </nav>
        </div>
    </div>
    {{-- <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if($(this).scrollTop()) {
                  alert('ok');
                }
            });
            // alert('okkkk');
        });
    </script> --}}
    
</header>
