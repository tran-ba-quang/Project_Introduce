@extends('pages.home')
@section('header')
<nav class="navbar" style="box-shadow:none;">
  <div class="container-fluid">
    <a class="navbar-brand">Văn phòng điện tử</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
<nav class="navbar navbar-expand-lg"  style="box-shadow:none;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img id="logo" src="https://smc.vn/wp-content/uploads/2019/12/logo.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
    aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">TRANG CHỦ</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          GIỚI THIỆU
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">THÔNG ĐIỆP TỪ CHỦ TỊCH</a></li>
            <li><a class="dropdown-item" href="#">GIỚI THIỆU CHUNG</a></li>
            <li><a class="dropdown-item" href="#">LỊCH SỬ PHÁT TRIỂN</a></li>
            <li><a class="dropdown-item" href="#">BAN LÃNH ĐẠO</a></li>
            <li><a class="dropdown-item" href="#">CÔNG TY THÀNH VIÊN</a></li>        
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            LĨNH VỰC HOẠT ĐỘNG 
          </a>
          <ul class="dropdown-menu">
            <li><span class="dropdown-item-text">THƯƠNG MẠI</span></li>
            <li><a class="dropdown-item" href="#">Thép Xây Dựng</a></li>
            <li><a class="dropdown-item" href="#"> Thép Tấm Lá</a></li>
            <li><a class="dropdown-item" href="#">Thép Hình, Xà Gồ</a></li>
            <li><a class="dropdown-item" href="#">Các Dự Án Cung Cấp Thép</a></li>

            <li><span class="dropdown-item-text">COIL CENTER</span></li>
            <li><a class="dropdown-item" href="#">Gia Công Cắt, Chặt, Xả Băng Thép Tấm Cán Nóng</a></li>
            <li><a class="dropdown-item" href="#">Gia Công Cắt, Chặt, Xả Băng Thép Lá Cán Nguội</a></li>

            <li><span class="dropdown-item-text">SẢN XUẤT</span></li>
            <li><a class="dropdown-item" href="#">Thép Lá Nguội, Thép Lá Mạ Kẽm</a></li>
            <li><a class="dropdown-item" href="#">Ống Thép</a></li>
            <li><a class="dropdown-item" href="#">Lưới Thép Hàn</a></li>
        </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          TRUYỀN THÔNG
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">TIN DOANH NGHIỆP</a></li>
            <li><a class="dropdown-item" href="#">TIN TỨC KHÁC</a></li>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">THƯ VIỆN
                <li><a class="dropdown-item" href="#">HÌNH ẢNH</a></li>
                <li><a class="dropdown-item" href="#">PHIM TƯ LIỆU</a></li>
            </ul>      
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          QUAN HỆ CỔ ĐÔNG
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">CÔNG BỐ THÔNG TIN</a></li>
            <li><a class="dropdown-item" href="#">BÁO CÁO TÀI CHÍNH</a></li>
            <li><a class="dropdown-item" href="#">ĐẠI HỘI CỔ ĐÔNG</a></li>
            <li><a class="dropdown-item" href="#">BÁO CÁO THƯỜNG NIÊN</a></li>
            <li><a class="dropdown-item" href="#">QUẢN TRỊ CÔNG TY</a></li>      
            <li><a class="dropdown-item" href="#">THÔNG TIN CỔ PHIẾU</a></li>  
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">HỒI KÝ SMC</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          TUYỂN DỤNG
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">LÝ DO CHỌN SMC</a></li>
            <li><a class="dropdown-item" href="#">CƠ HỘI NGHỀ NGHIỆP</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">LIÊN HỆ</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
@endsection
@section('header')
    <div class="page-wrapper">
        <div class="header-wrapper">
            <header id="header" class="header-builder">
                <div class="header-gr1">
                    <div class="header-top">
                        <div class="header-row">
                                <div class="header-col header-left">
                                    <ul class="custom-menu">
                                        <li>
                                            <a href="#">Văn phòng điện tử</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-col header-right">
                                    <div class="search-form">
                                        <span class="icon"><i class="fa fa-search"></i></span>
                                        <input type="search" id="search" placeholder="Search..." />
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                    <!--trang chu-->
                    <div class="header-main">
                        <nav class="">
                            <div class="contraine">

                                <!-- logo -->
                                <a class="navbar-brand" href="">
                                    <img id="logo" src="https://smc.vn/wp-content/uploads/2019/12/logo.png" alt="">
                                </a>

                                <!-- menu items -->
                                <div class="header">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">
                                                TRANG CHỦ
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="#">
                                                GIỚI THIỆU
                                            </a>
                                            <div class="dropdown" >
                                                <a class="dropdown-item" 
                                                    href="#" target="_self" >
                                                    THÔNG ĐIỆP TỪ CHỦ TỊCH
                                                </a>
                                                <a class="dropdown-item" 
                                                    href="#" target="_self"> 
                                                    GIỚI THIỆU CHUNG
                                                </a>
                                                <a class="dropdown-item" 
                                                    href="#" target="_self"> 
                                                    LỊCH SỬ PHÁT TRIỂN
                                                </a>
                                                <a class="dropdown-item" 
                                                    href="#" target="_self"> 
                                                    BAN LÃNH ĐẠO
                                                </a>
                                                <a class="dropdown-item" 
                                                    href="#" target="_self"> 
                                                    CÔNG TY THÀNH VIÊN
                                                </a>
                                            </div>
                                        </li>
                        <!---------------------------------------------------------------->

                                        <li class="nav-item">  
                                            <a href="#" class="nav-link">
                                                LĨNH VỰC HOẠT ĐỘNG 
                                            </a>
                                            <div class="dropdown">
                                                <a class="dropdown-link" >
                                                    THƯƠNG MẠI
                                                </a>
                                                <div class="dropdown-item">
                                                    <a href="#" >
                                                        Thép Xây Dựng
                                                    </a>
                                                    <a href="#" >
                                                        Thép Tấm Lá
                                                    </a>
                                                    <a href="#" >
                                                        Thép Hình, Xà Gồ
                                                    </a>
                                                    <a href="#" >
                                                        Các Dự Án Cung Cấp Thép
                                                    </a>
                                                </div>
                                                <a class="dropdown-link" >
                                                    COIL CENTER
                                                </a>
                                                <div class="dropdown-dropdown">
                                                    <a class="dropdown-item" href="#">
                                                        Gia Công Cắt, Chặt, Xả Băng Thép Tấm Cán Nóng
                                                    </a>
                                                    <a  class="dropdown-item" href="#">
                                                        Gia Công Cắt, Chặt, Xả Băng Thép Lá Cán Nguội
                                                    </a>
                                            </div>
                                            <a href="" class="">
                                                SẢN XUẤT
                                            </a>
                                            <div class="dropdown-dropdown">
                                                <a href="" class="dropdown-item">
                                                    Thép Lá Nguội, Thép Lá Mạ Kẽm
                                                </a>
                                                <a href="" class="dropdown-dropdown">
                                                    Ống Thép
                                                </a>
                                                <a href="" class="dropdown-dropdown">
                                                    Lưới Thép Hàn
                                                </a>
                                            </div>
                                        </li>
                                        <!--Truyền Thông-->
                                        <li class="nav-item">
                                            <a href="" class="nav-link">
                                                TRUYỀN THÔNG
                                            </a>
                                            <div class="dropdown">
                                                <a href="" class="dropdown-item">
                                                    Tin Doanh Nghiệp
                                                </a>
                                                <a href="" class="dropdown-item">
                                                    Tin Tức Khác
                                                </a>
                                                <a href="" class="dropdown-item">
                                                    Thư Viện
                                                </a>
                                                <div class="dropdown-dropdown">
                                                    <a href="" class="dropdown-dropdown-item">
                                                        Hình Ảnh
                                                    </a>
                                                    <a href="" class="dropdown-dropdown-item">
                                                        Phim Tư Liệu
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <!--Quan hệ cổ đông-->
                                        <li class="dropdown">
                                            <a href="" class="nav-link">
                                                QUAN HỆ CỔ ĐÔNG
                                            </a>
                                            <div class="dropdown">
                                                <a href="" class="dropdown-item">
                                                    Công Bố Thông Tin
                                                </a>
                                                <a href="" class="dropdown-item">
                                                    Báo Cáo Tài Chính
                                                </a>
                                                <a href="" class="dropdown-item">
                                                    Đại Hội Cổ Đông
                                                </a>
                                                <a href="" class="dropdown-item">
                                                    Báo Cáo Thường Niên
                                                </a>
                                                <a href="" class="dropdown-item">
                                                    Quản Trị Công Ty
                                                </a>
                                            </div>
                                        </li>  
                                        <!--Hồi Ký SMC-->
                                        <li class="nav-item">
                                            <a href="" class="nav-link">
                                                HỒI KÝ SMC
                                            </a>
                                            <div class="dropdown">
                                                <a href="" class="dropdown-iem">
                                                    Lý Do Chọn SMC
                                                </a>
                                                <a href="" class="dropdown-iem">
                                                    Cơ Hội Nghề Nghiệp
                                                </a>
                                            </div>
                                        </li>
                                        <!--Liên Hệ-->
                                        <li class="nav-item">
                                            <a href="" class="nav-link">
                                                LIÊN HỆ
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>
        </div>
    </div>
@endsection

@section('footer')
<!-- Footer -->
<footer class="text-center text-lg-start  text-muted"  style="background-color:#005da3 ; color: #f5f5f5!important;">
  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            THÔNG TIN LIÊN HỆ
          </h6>
          <p><i class="fas fa-home me-3"></i> 396 Ung Văn Khiêm, Phường 25, Quận Bình Thạnh, TP. Hồ Chí Minh.</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            tranbaquangoooo@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            GIỚI THIỆU
          </h6>
          <p>
            <a href="#!" class="text-reset">Thông Điệp Từ Chủ Tịch</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Giới Thiệu Chung</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Lịch Sử Phát Triển</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Ban Lãnh Đạo</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Công Ty Thành Viên</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            TRUYỀN THÔNG
          </h6>
          <p>
            <a href="#!" class="text-reset">Tin Doanh Nghiệp</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Tin Tức Khác</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Hình Ảnh</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Phim Tư Liệu</a>
          </p>
        </div>
        <!-- Grid column -->
        
        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            QUAN HỆ CỔ ĐÔNG
          </h6>
          <p>
            <a href="#!" class="text-reset">Công Bố Thông Tin</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Báo Cáo Tài Chính</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Đại Hội Cổ Đông</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Báo Cáo Thường Niên</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Quản Trị Công Ty</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Thông Tin Cổ Phiếu</a>
          </p>
        </div>
        <!-- Grid column -->
        
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color:#004e8b;">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
@endsection