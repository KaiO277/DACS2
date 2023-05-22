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
              </ul>
            </li>
            <li class="nav-item">
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
            </li>  
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
              </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-search"></i>
                  <p>
                    Tìm Kiếm 
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../search/simple.html" class="nav-link active">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Tìm kiếm tất cả</p>
                    </a>
                  </li>
                </ul>
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
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 1445.6px;">
        <section class="content">
            <div class="container-fluid">
                <h2 class="text-center display-4">Tìm Kiếm tên Khách Sạn:</h2>
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <form action="simple-results.html">
                            <div class="input-group">
                                <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-lg btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <div class="card-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Số Phòng</th>
                  <th>Tên Khách Sạn</th>
                  <th>Đánh giá</th>
                  <th>Giá Phòng</th>
                  <th>Địa chỉ</th>
                  <th>Số Điện Thoại</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($result as $product)
                  <tr>
                    <td>{{ $product->sophong }}</td>
                    <td>{{ $product->tenkhachsan }}</td>
                    <td>{{ $product->loaiphong }}</td>
                    <td>{{ $product->giaphong }}</td>
                    <td>{{ $product->diachi }}</td>
                    <td>{{ $product->sodienthoai }}</td>
                    
                    <th>
                        <img src="{{url('public/uploads')}}/{{ $product->image }}" alt=""width='60'>
                    </th>
                    <td class='text-right'>
                      <form action="{{ route('adminphong.destroy', $product->sophong) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Xoá" class="btn btn-danger btn-sm">
                      </form>
                      <a href="{{ route('adminphong.edit', $product->sophong) }}" class="btn btn-warning btn-sm">Sửa</a> 
                    </td>
                  </tr> 
                  @endforeach
              </tbody>
            </table>
          </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    
  <!-- ./wrapper -->
@endsection



      