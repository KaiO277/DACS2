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
                    <a href="widgets.html" class="nav-link active">
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
                  <a href="{{ route('admininforapp.index') }}" class="nav-link">
                      <i class="material-icons"style="font-size:15px" >radio_button_checked</i>
                    <p>Đặt phòng trên app</p>
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
                  <a href="../tables/simple.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sửa thông tin Phòng</p>
                  </a>
                </li>
              </ul>
            </li>   --}}
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-plus-square"></i>
                <p>
                  Add 
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
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-6">
                      <!-- small box -->
                      <div class="small-box bg-info">
                        <div class="inner">
                          <h3>{{ $hotel }}</h3>
          
                          <p>Khách Sạn</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{ route('adminphong.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                      <!-- small box -->
                      <div class="small-box bg-success">
                        <div class="inner">
                          <h3>...<sup style="font-size: 20px"></sup></h3>
          
                          <p>Biểu Đồ thống kê</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{ route('adminadmin.chart') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                      <!-- small box -->
                      <div class="small-box bg-warning">
                        <div class="inner">
                          <h3>{{ $khachhang }}</h3>
          
                          <p>Khách Hàng</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{ route('adminkhachhang.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                      <!-- small box -->
                      <div class="small-box bg-danger">
                        <div class="inner">
                          <h3>{{ $donhang }}</h3>
          
                          <p>Đơn đặt phòng</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="{{ route('admininfor.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <!-- ./col -->
                  </div>
                  <div class="card bg-gradient-success">
              <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                {{-- <iframe src="https://calendar.google.com/calendar/embed?src=en.vietnamese%23holiday%40group.v.calendar.google.com&ctz=Asia%2FHo_Chi_Minh" style="border: 0" width="100%" height="600" frameborder="0" scrolling="no"></iframe> --}}
              </div>
            </div>
             </div><!-- /.container-fluid -->
          </section>
      <!-- Main content -->
      
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    
  <!-- ./wrapper -->
@endsection