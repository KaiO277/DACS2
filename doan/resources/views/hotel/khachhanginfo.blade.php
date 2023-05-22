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
    <h2>Registration</h2>
    @php
        $user = $result['userKH'];
        $pass = $result['password'];
    @endphp
    <form action="{{ route('thongtinkhachhang', '1', '2') }}" method="post">
      @csrf
      <div class="input-box">
        <input type="text" name="tenkhachhang" placeholder="Nhập tên khách hàng" required>
      </div>
      <div class="input-box">
        <input type="email" placeholder="Nhập email" required>
      </div>
      <div class="input-box">
        <input type="text" name="sodienthoai" placeholder="Nhập số điện thoại" required>
      </div>
      
      <div class="input-box button">
        <input type="Submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="#">Login now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>
