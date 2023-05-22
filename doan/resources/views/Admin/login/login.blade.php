  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Login</title>
    <link rel="stylesheet" href="{{ asset('public/css/admin/login/css.css') }}">
    <link rel="icon" href="{{ asset('public/images/Logo-1.jpg') }}">
  </head>
  <body>
    <div class="login">
        <h1>Đăng Nhập</h1>
        <form action="{{ route('adchecklogin') }}" method="post">
          @csrf
            <input type="text" name="username" placeholder="Username" required="required" />
            <input type="password" name="password" placeholder="Password" required="required" />
            @include('error.error')
            <button type="submit" class="btn btn-primary btn-block btn-large">Đăng Nhập</button>
        </form>
    </div>
  </body>
  </html>