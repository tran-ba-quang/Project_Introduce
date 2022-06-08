@extends("layouts.trangchu")

@section("header")
<div class="header-gr1">
    <div class="header-top">
        <div class="header-row">
            <div class="header-col header-left">
                <ul class="custom-menu">
                <li>
                    <a href="#" target="_blank">Văn phòng điện tử</a>
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
    <div class="header-main">
        <nav class="">
            <div class="contraine">         
                        <a class="navbar-brand" href="">
                            <img id = "logo" src="https://smc.vn/wp-content/uploads/2019/12/logo.png" alt="">
                        </a>     
                    <div class="header" id="">                           
                        <ul class ="navbar-nav">
                            <li class="nav-item ">
                                <a class="nav-link">
                                    TRANG CHỦ
                                </a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link">
                                    GIỚI THIỆU
                                </a>
                                <div class="dropdown" >
                                        <a class="dropdown-item" 
                                            href="" target="_self" >
                                            THÔNG ĐIỆP TỪ CHỦ TỊCH
                                        </a>
                                        <a class="dropdown-item" 
                                            href="" target="_self"> 
                                            GIỚI THIỆU CHUNG
                                        </a>
                                        <a class="dropdown-item" 
                                            href="" target="_self"> 
                                            LỊCH SỬ PHÁT TRIỂN
                                        </a>
                                        <a class="dropdown-item" 
                                            href="" target="_self"> 
                                            BAN LÃNH ĐẠO
                                        </a>
                                        <a class="dropdown-item" 
                                            href="" target="_self"> 
                                            CÔNG TY THÀNH VIÊN
                                        </a>
                                </div>
                            </li>
                                        
                            <li class="nav-item ">
                                <a class="nav-link">
                                    LĨNH VỰC HOẠT ĐỘNG
                                </a>
                                <div class="dropdown" >
                                        <a class="dropdown-link">
                                            THƯƠNG MẠI
                                        </a>
                                        <div class="dropdown-dropdown">
                                            <a class="dropdown-item" 
                                                href="" target="_self"> 
                                                XÂY DỰNG THÉP
                                            </a>
                                            <a class="dropdown-item" 
                                                href="" target="_self"> 
                                                XÂY DỰNG THÉP
                                            </a>
                                            <a class="dropdown-item" 
                                                href="" target="_self"> 
                                                XÂY DỰNG THÉP
                                            </a>
                                        </div>
                                        <a class="dropdown-link">
                                            COIL CENTER
                                        </a>
                                        <div class="dropdown-dropdown">
                                            <a class="dropdown-item" 
                                                href="" target="_self"> 
                                                GIA CÔNG CẮT, CHẶT, XẢ BĂNG
                                                THÉP TẤM CÁN NÓNG
                                            </a>
                                            <a class="dropdown-item" 
                                                href="" target="_self"> 
                                                GIA CÔNG CẮT, CHẶT, XẢ BĂNG
                                                THÉP LÁ CÁN NGUỘI
                                            </a>
                                        </div>
                                        <a class="dropdown-link">
                                            SẢN XUẤT
                                        </a>
                                        <div class="dropdown-dropdown">
                                            <a class="dropdown-item" 
                                                href="" target="_self"> 
                                                THÉP LÁ CÁN NGUỘI, THÉP LÁ MẠ KẼM
                                            </a>
                                            <a class="dropdown-item" 
                                                href="" target="_self"> 
                                                ỐNG THÉP
                                            </a>
                                            <a class="dropdown-item" 
                                                href="" target="_self"> 
                                                LƯỚI THÉP HÀN
                                            </a>
                                        </div>
                                </div>
                            </li>
                                      
                            <li class="nav-item ">
                                <a class="nav-link">
                                    TRUYỀN THÔNG
                                </a>
                                <div class="dropdown" >
                                        <a class="dropdown-item" 
                                            href="" target="_self" >
                                            TIN DOANH NGHIỆP
                                        </a>
                                        <a class="dropdown-item" 
                                            href="" target="_self"> 
                                            TIN TỨC KHÁC   
                                        </a>
                                        <a class="dropdown-link">
                                            THƯ VIỆN
                                        </a>
                                        <div class="dropdown-dropdown">
                                            <a class="dropdown-item" 
                                                href="" target="_self"> 
                                                HÌNH ẢNH
                                            </a>
                                            <a class="dropdown-item" 
                                                href="" target="_self"> 
                                                PHIM TƯ LIỆU
                                            </a>
                                        </div>
                                </div>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link">
                                    QUAN HỆ CỔ ĐÔNG
                                </a>
                                <div class="dropdown" >
                                        <a class="dropdown-item" 
                                            href="" target="_self" >
                                            CÔNG BỐ THÔNG TIN
                                        </a>
                                        <a class="dropdown-item" 
                                            href="" target="_self"> 
                                            BÁO CÁO TÀI CHÍNH
                                        </a>
                                        <a class="dropdown-item" 
                                            href="" target="_self"> 
                                            ĐẠI HỘI CỔ ĐÔNG
                                        </a>
                                        <a class="dropdown-item" 
                                            href="" target="_self"> 
                                            BÁO CÁO THƯỜNG NIÊN
                                        </a>
                                        <a class="dropdown-item" 
                                            href="" target="_self"> 
                                            QUẢN TRỊ CÔNG TY
                                        </a>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link">
                                    HỒI KÝ SMC
                                </a>
                            </li>
                                    
                            <li class="nav-item ">
                                <a class="nav-link">
                                    TUYỂN DỤNG
                                </a>
                                <div class="dropdown" >
                                        <a class="dropdown-item" 
                                            href="" target="_self" >
                                            LÝ DO CHỌN SMC
                                        </a>
                                        <a class="dropdown-item" 
                                            href="" target="_self" >
                                            CƠ HỘI NGHỀ NGHIỆP
                                        </a>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link">
                                    LIÊN HỆ
                                </a>
                            </li>
                        </ul>
                    </div>   
            </div>
        </nav>
    </div>
</div>
<div class="header-gr2">
    <div class="header-top2">
            <div class="header-row2">
                <span>nhà phân phối thép chuyên nghiệp</span>
            </div>
    </div>
    <div class="header-main2">
        <nav class="">
            <div class="contraine2">     
                <div class="logo">    
                    <a class="navbar-brand2" href="">
                        <img id = "logo2" src="https://smc.vn/wp-content/uploads/2019/12/logo.png" alt="">
                    </a>  
                </div>
                <div class="header2">
                    <ul class="navbar-nav2">
                        <div  class="dropdown2">
                            <button class="dropbtn" onclick="myFunction()" >
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown-content"  id="myDropdown">
                                <li class="nav-item2">
                                    <a class="nav-link2">
                                        TRANG CHỦ
                                    </a>
                                </li>

                                <li class="nav-item2">
                                    <a class="nav-link2">
                                        GIỚI THIỆU
                                    </a>
                                    <div class="dropdown2" >
                                            <a class="dropdown-item2" 
                                                href="" target="_self" >
                                                THÔNG ĐIỆP TỪ CHỦ TỊCH
                                            </a>
                                            <a class="dropdown-item2" 
                                                href="" target="_self"> 
                                                GIỚI THIỆU CHUNG
                                            </a>
                                            <a class="dropdown-item2" 
                                                href="" target="_self"> 
                                                LỊCH SỬ PHÁT TRIỂN
                                            </a>
                                            <a class="dropdown-item2" 
                                                href="" target="_self"> 
                                                BAN LÃNH ĐẠO
                                            </a>
                                            <a class="dropdown-item2" 
                                                href="" target="_self"> 
                                                CÔNG TY THÀNH VIÊN
                                            </a>
                                    </div>
                                </li>
                                            
                                <li class="nav-item2 ">
                                    <a class="nav-link2">
                                        LĨNH VỰC HOẠT ĐỘNG
                                    </a>
                                    <div class="dropdown2" >
                                            <a class="dropdown-item2">
                                                THƯƠNG MẠI
                                            </a>
                                            <div class="dropdown-dropdown2">
                                                <a class="dropdown-dropdown-item2" 
                                                    href="" target="_self"> 
                                                    XÂY DỰNG THÉP
                                                </a>
                                                <a class="dropdown-dropdown-item2" 
                                                    href="" target="_self"> 
                                                    XÂY DỰNG THÉP
                                                </a>
                                                <a class="dropdown-dropdown-item2" 
                                                    href="" target="_self"> 
                                                    XÂY DỰNG THÉP
                                                </a>
                                            </div>
                                            <a class="dropdown-item2">
                                                COIL CENTER
                                            </a>
                                            <div class="dropdown-dropdown2">
                                                <a class="dropdown-dropdown-item2" 
                                                    href="" target="_self"> 
                                                    GIA CÔNG CẮT, CHẶT, XẢ BĂNG
                                                    THÉP TẤM CÁN NÓNG
                                                </a>
                                                <a class="dropdown-dropdown-item2" 
                                                    href="" target="_self"> 
                                                    GIA CÔNG CẮT, CHẶT, XẢ BĂNG
                                                    THÉP LÁ CÁN NGUỘI
                                                </a>
                                            </div>
                                            <a class="dropdown-item2">
                                                SẢN XUẤT
                                            </a>
                                            <div class="dropdown-dropdown2">
                                                <a class="dropdown-dropdown-item2" 
                                                    href="" target="_self"> 
                                                    THÉP LÁ CÁN NGUỘI, THÉP LÁ MẠ KẼM
                                                </a>
                                                <a class="dropdown-dropdown-item2" 
                                                    href="" target="_self"> 
                                                    ỐNG THÉP
                                                </a>
                                                <a class="dropdown-dropdown-item2" 
                                                    href="" target="_self"> 
                                                    LƯỚI THÉP HÀN
                                                </a>
                                            </div>
                                    </div>
                                </li>
                                        
                                <li class="nav-item2">
                                    <a class="nav-link">
                                        TRUYỀN THÔNG
                                    </a>
                                    <div class="dropdown" >
                                            <a class="dropdown-item" 
                                                href="" target="_self" >
                                                TIN DOANH NGHIỆP
                                            </a>
                                            <a class="dropdown-item" 
                                                href="" target="_self"> 
                                                TIN TỨC KHÁC   
                                            </a>
                                            <a class="dropdown-item">
                                                THƯ VIỆN
                                            </a>
                                            <div class="dropdown-dropdown">
                                                <a class="dropdown-dropdown-item" 
                                                    href="" target="_self"> 
                                                    HÌNH ẢNH
                                                </a>
                                                <a class="dropdown-dropdown-item" 
                                                    href="" target="_self"> 
                                                    PHIM TƯ LIỆU
                                                </a>
                                            </div>
                                    </div>
                                </li>

                                <li class="nav-item ">
                                    <a class="nav-link">
                                        QUAN HỆ CỔ ĐÔNG
                                    </a>
                                    <div class="dropdown" >
                                            <a class="dropdown-item" 
                                                href="" target="_self" >
                                                CÔNG BỐ THÔNG TIN
                                            </a>
                                            <a class="dropdown-item" 
                                                href="" target="_self"> 
                                                BÁO CÁO TÀI CHÍNH
                                            </a>
                                            <a class="dropdown-item" 
                                                href="" target="_self"> 
                                                ĐẠI HỘI CỔ ĐÔNG
                                            </a>
                                            <a class="dropdown-item" 
                                                href="" target="_self"> 
                                                BÁO CÁO THƯỜNG NIÊN
                                            </a>
                                            <a class="dropdown-item" 
                                                href="" target="_self"> 
                                                QUẢN TRỊ CÔNG TY
                                            </a>
                                    </div>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link">
                                        HỒI KÝ SMC
                                    </a>
                                </li>
                                        
                                <li class="nav-item ">
                                    <a class="nav-link">
                                        TUYỂN DỤNG
                                    </a>
                                    <div class="dropdown" >
                                            <a class="dropdown-item" 
                                                href="" target="_self" >
                                                LÝ DO CHỌN SMC
                                            </a>
                                            <a class="dropdown-item" 
                                                href="" target="_self" >
                                                CƠ HỘI NGHỀ NGHIỆP
                                            </a>
                                    </div>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link">
                                        LIÊN HỆ
                                    </a>
                                </li>
                            </div>
                        </div>
                    </ul>

                </div>
            </div>
        </nav>
    </div>
</div>
@endsection


