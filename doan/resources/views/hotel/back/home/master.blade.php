
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('hotel\back\home\thuviencss')
    <title>Home page</title>
</head>

<style>
    /* Style The Dropdown Button */
    .dropbtn {
      background-color: #fff;
      color: black;
      padding: 10px;
      font-size: 16px;
      border: none;
      cursor: pointer;
      min-width: 160px;

    }
    
    /* The container <div> - needed to position the dropdown content */
    .dropdown {
      position: relative;
      display: inline-block;
    }
    
    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      border-style: solid;
      font-size: 13px;
      border-width: 2px;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    
    /* Links inside the dropdown */
    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }
    
    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
        background-color: #f1f1f1;
        border: 10px;
    }
    
    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
      display: block;
      /* border: 10px; */
    }
    
    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {
      /* background-color: #3e8e41; */
    }


    

    </style>

<body id="page-top">
    
    @include('hotel\back\home\header')

    {{-- Main --}}
    @yield('main')
    
    @include('hotel\back\home\footer')
    
    @include('hotel\back\home\thuvienjs')

    {{-- <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script>
        $(document).ready(function() {
            // $(window).scroll(function() {
            //     if($(this).scrollTop()) {
            //       alert('ok');
            //     }
            // });
            alert('okkkk');
        });
    </script> --}}

    

</body> 

</html>