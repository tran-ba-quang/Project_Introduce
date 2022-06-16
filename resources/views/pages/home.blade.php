<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('public/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/intro.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/slider.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="{{asset('public/img/logo.png')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"
    />
    <!-- MDB -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css"
      rel="stylesheet"
    />


    <title>Công Ty Cổ Phần Đầu Tư Thương Mại SMC - Nhà Phân Phối Thép Chuyên Nghiệp</title>
</head>
<body>
    <div class="page-wrapper">
        <div class="header-wrapper" >
            <header id="header" class="header-builder">
              @yield("header")
            </header>
        </div>
        <div class="main">
          <div class="container2">
            <div class="page-content">
              <div class="slider" data-aos="fade-left">
                <div class="slides">
                  <input type="radio" name="radio-btn" id="radio1">
                  <input type="radio" name="radio-btn" id="radio2">
                  <input type="radio" name="radio-btn" id="radio3">
                  <input type="radio" name="radio-btn" id="radio4">

                  <div class="slide first">
                    <img src="{{ asset('public/img/slide-1-scaled.jpg') }}" >
                  </div>
                  <div class="slide">
                    <img src="{{ asset('public/img/slide-1-scaled.jpg') }}" >
                  </div>
                  <div class="slide">
                    <img src="{{ asset('public/img/slide-1-scaled.jpg') }}" >
                  </div>
                  <div class="slide">
                    <img src="{{ asset('public/img/slide-1-scaled.jpg') }}" >
                  </div>
                </div>
              </div>

              <div class="home-intro" data-aos="zoom-in-left">
                <div class="box-title">
                  <div class="box-title-name">
                    Công Ty Cổ Phần Đầu Tư Thương Mại SMC
                  </div>
                </div>
                  <div class="main-intro">
                    <div class="main-intro-right">
                        <div class="vd-container">
                          <video class="vd" controls>
                            <source src="{{asset('public/video/mvst.mp4')}}" type="video/mp4">
                          </video>
                        </div>
                    </div>
                    <div class="main-intro-left">
                        <div class="text-container-intro">
                            <p>Với hơn 34 năm hình thành và phát triển (19.08.1988 – 19.08.2022), 
                              18 năm Cổ phần hóa. SMC cam kết thực hiện đúng vai trò uy tín và chuyên
                              nghiệp trong lĩnh vực phân phối, hoạt động gia công và sản xuất kinh doanh thép, 
                              thường xuyên hoàn thiện và đổi mới về chất lượng và dịch vụ không ngừng nâng cao,
                              đáp ứng nhu cầu đa dạng của khách hàng và thị trường
                            </p>
                            <a id="chitiet-intro" href="#">Chi tiết >></a>
                        </div>
                    </div>
                  </div>
              </div>
              
              <div class="home-services" data-aos="fade-up"
              data-aos-anchor-placement="center-bottom">
                <div class="services-top">
                  <div class="services-top-name">
                    <h3>LĨNH VỰC HOẠT ĐỘNG</h3>
                  </div>
                </div>
                  <div class="d-flex justify-content-center">
                    <div class="main-services-1"><img src="https://smc.vn/wp-content/uploads/2020/04/4af43043c9f032ae6be1.jpg" alt=""></div>
                    <div class="main-services-2"><img src="https://smc.vn/wp-content/uploads/2020/04/4af43043c9f032ae6be1.jpg" alt=""></div>
                    <div class="main-services-3"><img src="https://smc.vn/wp-content/uploads/2020/04/4af43043c9f032ae6be1.jpg" alt=""></div>
                  </div>
              </div>

              <div class="the-media"  data-aos="fade-up">
                <div class="box-title">
                    <div class="box-title-name">
                      TRUYỀN THÔNG
                    </div>
                </div>
                <div class="main-the-media">
                    <div class="content-the-media">
                        <div class="post-media">
                          <div class="post-image">
                            <img src="https://smc.vn/wp-content/uploads/2020/04/4af43043c9f032ae6be1.jpg" alt="">
                          </div>                         
                          <div class="post-item-content">
                            <h3>tin tức nóng...</h3>
                          </div>                           
                        </div>

                        <div class=" post-media">
                          <div class="post-image">
                            <img src="https://smc.vn/wp-content/uploads/2020/04/4af43043c9f032ae6be1.jpg" alt="">
                          </div>                         
                          <div class="post-item-content">
                            <h3>tin tức nóng...</h3>
                          </div>                           
                        </div>

                        <div class="post-media">
                          <div class="post-image">
                            <img src="https://smc.vn/wp-content/uploads/2020/04/4af43043c9f032ae6be1.jpg" alt="">
                          </div>                         
                          <div class="post-item-content">
                            <h3>tin tức nóng...</h3>
                          </div>                           
                        </div>

                        <div class=" post-media">
                          <div class="post-image">
                            <img src="https://smc.vn/wp-content/uploads/2020/04/4af43043c9f032ae6be1.jpg" alt="">
                          </div>                         
                          <div class="post-item-content">
                            <h3>tin tức nóng...</h3>
                          </div>                           
                        </div>

                        <div class="post-media">
                          <div class="post-image">
                            <img src="https://smc.vn/wp-content/uploads/2020/04/4af43043c9f032ae6be1.jpg" alt="">
                          </div>                         
                          <div class="post-item-content">
                            <h3>tin tức nóng...</h3>
                          </div>                           
                        </div>

                        <div class=" post-media">
                          <div class="post-image">
                            <img src="https://smc.vn/wp-content/uploads/2020/04/4af43043c9f032ae6be1.jpg" alt="">
                          </div>                         
                          <div class="post-item-content">
                            <h3>tin tức nóng...</h3>
                          </div>                           
                        </div>
                    </div>
                </div>
              </div>

              <div class="partner" data-aos="fade-right"
              data-aos-offset="300"
              data-aos-easing="ease-in-sine">
                  <div class="box-title">
                      <div class="box-title-name">
                        ĐỐI TÁC
                      </div>
                  </div>
                  <div class="text-partner">
                      <p>Là thương hiệu hàng đầu trên lĩnh vực phân phối, hoạt động gia công và sản xuất kinh doanh thép.
                        Công ty Cổ Phần Đầu Tư Thương Mại SMC luôn được các đối tác đánh giá cao về năng lực và uy tín kinh doanh. 
                        SMC đã trở thành đối tác tin cậy của hàng loạt công ty, tập đoàn hàng đầu trong rất nhiều lĩnh vực.
                      </p>
                  </div>
                  <div class="main-partner">
                      <div class="logo-partner">
                        <div class="post-logo-partner" >
                            <div class="post-image-logo">
                              <img src="https://smc.vn/wp-content/uploads/2020/04/Posco.png" alt="">
                            </div>                             
                        </div>

                        <div class="post-logo-partner" >
                            <div class="post-image-logo">
                              <img src="https://smc.vn/wp-content/uploads/2020/04/Posco.png" alt="">
                            </div>                             
                        </div>

                        <div class="post-logo-partner" >
                            <div class="post-image-logo">
                              <img src="https://smc.vn/wp-content/uploads/2020/04/Posco.png" alt="">
                            </div>                             
                        </div>

                        <div class="post-logo-partner" >
                            <div class="post-image-logo">
                              <img src="https://smc.vn/wp-content/uploads/2020/04/Posco.png" alt="">
                            </div>                             
                        </div>

                        <div class="post-logo-partner" >
                            <div class="post-image-logo">
                              <img src="https://smc.vn/wp-content/uploads/2020/04/Posco.png" alt="">
                            </div>                             
                        </div>

                        <div class="post-logo-partner" >
                            <div class="post-image-logo">
                              <img src="https://smc.vn/wp-content/uploads/2020/04/Posco.png" alt="">
                            </div>                             
                        </div>

                        <div class="post-logo-partner" >
                            <div class="post-image-logo">
                              <img src="https://smc.vn/wp-content/uploads/2020/04/Posco.png" alt="">
                            </div>                             
                        </div>

                        <div class="post-logo-partner" >
                            <div class="post-image-logo">
                              <img src="https://smc.vn/wp-content/uploads/2020/04/Posco.png" alt="">
                            </div>                             
                        </div>

                        <div class="post-logo-partner" >
                            <div class="post-image-logo">
                              <img src="https://smc.vn/wp-content/uploads/2020/04/Posco.png" alt="">
                            </div>                             
                        </div>

                        <div class="post-logo-partner" >
                            <div class="post-image-logo">
                              <img src="https://smc.vn/wp-content/uploads/2020/04/Posco.png" alt="">
                            </div>                             
                        </div>

                        <div class="post-logo-partner" >
                            <div class="post-image-logo">
                              <img src="https://smc.vn/wp-content/uploads/2020/04/Posco.png" alt="">
                            </div>                             
                        </div>

                        <div class="post-logo-partner" >
                            <div class="post-image-logo">
                              <img src="https://smc.vn/wp-content/uploads/2020/04/Posco.png" alt="">
                            </div>                             
                        </div>

                        <div class="post-logo-partner" >
                            <div class="post-image-logo">
                              <img src="https://smc.vn/wp-content/uploads/2020/04/Posco.png" alt="">
                            </div>                             
                        </div>

                        <div class="post-logo-partner" >
                            <div class="post-image-logo">
                              <img src="https://smc.vn/wp-content/uploads/2020/04/Posco.png" alt="">
                            </div>                             
                        </div>

                        <div class="post-logo-partner" >
                            <div class="post-image-logo">
                              <img src="https://smc.vn/wp-content/uploads/2020/04/Posco.png" alt="">
                            </div>                             
                        </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>

        <div class="footer-i" data-aos="fade-right"
        data-aos-offset="300"
        data-aos-easing="ease-in-sine">
              <header>
                @yield("footer")
              </header>
        </div>
    </div>
</body>
</html>

<script src="{{asset('public/js/banner.js')}}"></script>
<script src="{{asset('public/js/header.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"
></script>