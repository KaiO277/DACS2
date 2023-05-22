@extends('Admin.back.master')
@section('content')
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
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
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
                  <a href="{{ route('admininfor.index') }}" class="nav-link active">
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
                    <p>Đánh Giá</p>
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
            <li class="nav-item">
              <a href="{{ route('adminadmin.chart') }}" class="nav-link">
                  <i class="fa fa-bar-chart"></i>
                <p>
                  Biểu đồ thống kê
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('adlogout') }}" class="nav-link">
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
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 1345.6px;">
      <h1>Thông tin về Đặt Phòng trên App:</h1>
      <!-- Content Header (Page header) -->
      <table class="table table-striped">
          <thead>
            <tr>
              <th>Mã đặt phòng</th>
              <th>Mã Khách Hàng</th>
              <th>Thời gian nhận phòng</th>
              <th>Thời Gian ở (Ngày)</th>
              <th>Số Phòng</th>
              <th>Status</th>
              <th class="text-right">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($result as $product)
            <tr>
              <td>{{ $product->id }}</td>
              <td>{{ $product->maKH }}</td>
              <td>{{ $product->startDate }}</td>
              <td>{{ $product->night }}</td>
              <td>{{ $product->sophong }}</td>   
              <td>
                <?php 
                  if ($product->status == 0){
                    echo '<span class="badge badge-danger">not approve</span>';
                  
                  }else {
                    echo '<span class="badge badge-success">approved</span>';
                  }
                ?>
              </td>
             
              <td class="text-right" >
                      <a href="{{ route('admininforapp.edit', $product->id) }}" class="btn btn-warning btn-sm">Duyệt</a>                     
              </td>
             
            </tr> 
            @endforeach
          </tbody>
        </table>
  
      <!-- Main content -->
      
      <!-- /.content -->
    </div>
@endsection