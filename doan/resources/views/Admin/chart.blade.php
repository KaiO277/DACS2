@extends('Admin.back.master')
@section('content')
<style type="text/css">
#container {
  height: 400px;
}

.highcharts-figure,
.highcharts-data-table table {
  min-width: 310px;
  max-width: 800px;
  margin: 1em auto;
}

.highcharts-data-table table {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #ebebeb;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
}

.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}

.highcharts-data-table th {
  font-weight: 600;
  padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
  padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}

.highcharts-data-table tr:hover {
  background: #f1f7ff;
}
</style>
 <!-- Sidebar -->
 <div class="sidebar">
    <!-- Sidebar user (optional) -->
    

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div><div class="sidebar-search-results"><div class="list-group"><a href="#" class="list-group-item"><div class="search-title"><strong class="text-light"></strong>N<strong class="text-light"></strong>o<strong class="text-light"></strong> <strong class="text-light"></strong>e<strong class="text-light"></strong>l<strong class="text-light"></strong>e<strong class="text-light"></strong>m<strong class="text-light"></strong>e<strong class="text-light"></strong>n<strong class="text-light"></strong>t<strong class="text-light"></strong> <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong class="text-light"></strong>n<strong class="text-light"></strong>d<strong class="text-light"></strong>!<strong class="text-light"></strong></div><div class="search-path"></div></a></div></div>
    </div>

    <!-- Sidebar Menu -->
    
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
             <li class="nav-item">
              <a href="{{ route('adminadmin.home') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                  <p>
                      Trang Chủ
                  </p>
              </a>
          </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
            <p>
              Bảng
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('adminphong.index') }}" class="nav-link">
                  <i class="material-icons"style="font-size:15px" >radio_button_checked</i>
                <p>Phòng</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admininfor.index') }}" class="nav-link">
                  <i class="material-icons"style="font-size:15px" >radio_button_checked</i>
                <p>Thông tin đặt phòng</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('adminkhachhang.index') }}" class="nav-link">
                  <i class="material-icons"style="font-size:15px" >radio_button_checked</i>
                <p>Khách hàng</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admindanhgia.index') }}" class="nav-link">
                  <i class="material-icons"style="font-size:15px" >radio_button_checked</i>
                <p>Dánh Giá</p>
              </a>
            </li>
          </ul>
        </li>
        {{-- <li class="nav-item">
          <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
            <p>
              Chỉnh Sửa 
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Sửa thông tin Phòng</p>
              </a>
            </li>
          </ul>
        </li> --}}
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-plus-square"></i>
            <p>
              Thêm
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="{{ route('adminphong.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm Phòng</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('adminkhachhang.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm Khách Hàng</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item  active">
            <a href="#" class="nav-link  active">
                <i class="fa fa-bar-chart"></i>
              <p>
                Biểu đồ thống kê
              </p>
            </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('logout') }}" class="nav-link">
            <i style="font-size:24px" class="fa">&#xf08b;</i>
            <p>
              Đăng Xuất
            </p>
          </a>
        </li>
      </ul>
      
    </nav>
    
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
<div class="content-wrapper" style="min-height: 1345.6px;">
    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
{{-- <script src="https://code.highcharts.com/modules/export-data.js"></script> --}}
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
  <div id="container"></div>
  <?php
        $arr = [];
        foreach($result as $each){
            $arr[$each->tenkhachsan] = $each->soluong ;
        }
        $arrX = array_keys($arr);
        $arrY = array_values($arr);
        // exit();
        ?> 
</figure>
<script>
    Highcharts.chart('container', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Biểu đồ thống kê'
  },
//   xAxis: {
//     type: 'category',
//     labels: {
//       rotation: -45,
//       style: {
//         fontSize: '13px',
//         fontFamily: 'Verdana, sans-serif'
//       }
//     }
//   },
  xAxis: {
    categories: 
    <?php
        echo json_encode($arrX); 
    ?>,
    },
  yAxis: {
    min: 0,
    title: {
      text: 'Số lượng'
    }
  },
  legend: {
    enabled: false
  },
  tooltip: {
    pointFormat: 'Population in 2021: <b>{point.y:.1f} millions</b>'
  },
  series: [{
    name: 'Population',
    data: 
       <?php            
                echo json_encode($arrY);
            // json_encode
        ?>
    ,
    dataLabels: {
      enabled: true,
      rotation: -90,
      color: '#FFFFFF',
      align: 'right',
      format: '{point.y:.1f}', // one decimal
      y: 10, // 10 pixels down from the top
      style: {
        fontSize: '13px',
        fontFamily: 'Verdana, sans-serif'
      }
    }
  }]
});
</script>
</div>    

@endsection