<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('public/images/Logo-1.jpg') }}">
    <title>Admin</title>
    @include('Admin\back\AdminCss')
    
</head>
<body class="wrapper">
    @include('Admin.back.header')
    @yield('content')
    @include('Admin.back.footer')
    @include('Admin.back.Js')
</body>
</html>