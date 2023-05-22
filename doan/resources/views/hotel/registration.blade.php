<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<title> Registration or Sign Up form in HTML CSS | CodingLab </title>-->
    <link rel="stylesheet" href="{{url('public/site')}}/css/rgs.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Đăng ký tài khoản</h2>
    <form action="{{ route('register') }}" method="post">
      @csrf
      <div class="input-box">
        <input type="text" name="name" placeholder="Nhập tên đăng nhập" required>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Nhập mật khẩu" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Nhập lại mật khẩu" required>
      </div>

      <hr>

      <div class="input-box">
        <input type="text" name="tenkhachhang" placeholder="Nhập tên khách hàng" required>
      </div>
      <div class="input-box">
        <input type="email" name="email" placeholder="Nhập email" required>
      </div>
      <div class="input-box">
        <input type="text" name="sodienthoai" placeholder="Nhập số điện thoại" required>
      </div>

      {{-- <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div> --}}
      <div class="input-box button">
        <input type="Submit" value="Hoàn tất đăng ký">
      </div>
      <div class="text">
        <h3>Tôi đã có tài khoản? <a href="#">Đăng nhập ngay</a></h3>
      </div>
    </form>
  </div>
</body>
</html>
