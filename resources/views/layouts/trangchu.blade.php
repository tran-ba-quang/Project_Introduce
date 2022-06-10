<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../resources/css/home/header.css">
    <link rel="stylesheet" type="text/css" href="../resources/css/home/slider.css">
    <link rel="stylesheet" type="text/css" href="../resources/css/home/intro.css">
    <link rel="shortcut icon" href="https://smc.vn/wp-content/uploads/2019/12/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    @yield("head")
</head>
<body>

  <div class="page-wrapper">
    <div class="header-wrapper">
      <header id="header" class="header-builder">
        @yield("header")
      </header>
    </div>

    <div class="main">
      <div class="container">
        <div class="page-content">   
            <!--image slider start-->
            <div class="slider">
              <div class="slides">
                <!--radio buttons start-->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <!--radio buttons end-->
                <!--slide images start-->
                <div class="slide first">
                  <img src="https://smc.vn/wp-content/uploads/2020/03/slide-1-scaled.jpg" alt="">
                </div>
                <div class="slide">
                  <img src="https://smc.vn/wp-content/uploads/2020/03/slide-1-scaled.jpg" alt="">
                </div>
                <div class="slide">
                  <img src="https://smc.vn/wp-content/uploads/2020/03/slide-1-scaled.jpg" alt="">
                </div>
                <div class="slide">
                  <img src="https://smc.vn/wp-content/uploads/2020/03/slide-1-scaled.jpg" alt="">
                </div>
                <!--slide images end-->               
              </div>             
            </div>
            <!--image slider end-->
            <script type="text/javascript">
              var counter = 1;
              setInterval(function(){
                document.getElementById('radio' + counter).checked = true;
                counter++;
                if(counter > 4){
                  counter = 1;
                }
              }, 5000);
            </script>
          <div class="home-intro">
            <div class="box-title">
              <div class="box-title-name">
                Công Ty Cổ Phần Đầu Tư Thương Mại SMC
              </div>
            </div>
            <div class="main-intro">
                <div class="main-intro-right">
                    <div class="vd-container">
                      <video class="vd" controls>
                        <source src="../resources/img/mvst.mp4" type="video/mp4">
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
          <div class="home-services">
            <div class="services-top">
                <div class="services-top-name">
                    <h3>LĨNH VỰC HOẠT ĐỘNG</h3>
                </div>
            </div>
            <div class="main-services">
                <div class="main-services-1">
                  <img src="https://smc.vn/wp-content/uploads/2020/04/4af43043c9f032ae6be1.jpg" alt="">
                </div>
                <div class="main-services-2">
                  <img src="https://smc.vn/wp-content/uploads/2020/04/4af43043c9f032ae6be1.jpg" alt="">
                </div>
                <div class="main-services-3">
                  <img src="https://smc.vn/wp-content/uploads/2020/04/4af43043c9f032ae6be1.jpg" alt="">
                </div>
            </div>
          </div>
          <div class="home-news">
            @yield("news")
          </div>
          <div class="home-partner">
            @yield("partner")
          </div>
        </div>
      </div>
    </div>

    <div class="footer-wrapper">
      <div class="footer-main">
        @yield("footer-main")
      </div>
      <div class="footer-bottom">
        @yield("footer-bottom")
      </div>
    </div>
  </div>
  <script type ="text/javascript" src ="../resources/js/header.js">
	</script>
</body>
</html>