@extends('pages.home')
@section('header')
    <div class="page-wrapper">
        <div class="header-wrapper">
            <header id="header" class="header-builder">
                <div class="header-gr1">
                    <div class="header-top">
                        <div class="header-row">
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