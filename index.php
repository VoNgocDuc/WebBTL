<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <title>Car rental review</title>
    <link rel="icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/mains.css">

</head>


<body>
    <!-- ***** Tạo hiệu úng khi vào web ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ********** -->

    <!-- Thông tin trên thanh tiêu đề -->
    <header class="headerNav">
        <!-- navbar navbar-expand-lg : class này giữ cho navbar được năm ngang khi thu bé lại -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="assets/img/logo.png" alt="">
                </a>

                <!-- nút hiện ra khi màn hình quá nhỏ -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"><i class="fa fa-align-left"></i></span>
                </button>

                <!-- danh sách tiêu đề -->
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a id='pageMain' class="nav-link" href="#">Trang chủ</a>
                        </li>
                        <li class="nav-item"><a id='pageChoThe' class="nav-link" href="#">Cho thuê</a></li>
                        <li class="nav-item"><a id='pageGiaXe' class="nav-link" href="#">Giá xe ô tô</a></li>
                        <li class="nav-item active"><a id='pageBaiViet' class="nav-link" href="#">Bài viết</a></li>
                        <li class="nav-item"><a id='pageLienHe' class="nav-link" href="#">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="body">
        <div class="home">
            <?php
            include("home.php");
            ?>
        </div>

        <div class="chothue">
        <h1>cho thuê</h1>
        </div>

        <div class="giaxe">
          <h1>gia xe</h1>
        </div>

        <div class="baiviet">
            <h1>bai viet</h1>
        </div>

        <div class="lienhe">
            <h1>lien he</h1>
        </div>
    </div>


    <footer id="footer" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="logo-part">
                                <div class=" logo-footer">
                                    <a class="navbar-brand" href="#">
                                        <img id="logoFooter" src="assets/img/logo.png" alt="">
                                    </a>
                                </div>
                                <p><b>Địa chỉ</b> </p>
                                <p>Đại học mỏ địa chất</p>
                            </div>
                        </div>
                        <div class="col-md-6 px-4">
                            <h6> Về chúng tôi</h6>
                            <p>Bạn có thể xem thêm thông tin về chúng tôi tại đây</p>
                            <a href="#" class="btn-footer"> Liên hệ </a><br>
                            <a href="#" class="btn-footer"> Thông tin</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 px-4">
                            <h6> Help us</h6>
                            <div class="row ">
                                <div class="col-md-6">
                                    <ul>
                                        <li class="link-footer"> <a href="#"> Home</a> </li>
                                        <li class="link-footer"> <a href="#"> About</a> </li>
                                        <li class="link-footer"> <a href="#"> Service</a> </li>
                                        <li class="link-footer"> <a href="#"> Team</a> </li>
                                        <li class="link-footer"> <a href="#"> Help</a> </li>
                                        <li class="link-footer"> <a href="#"> Contact</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <h6> Mạng xã hội</h6>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <form class="form-footer my-3">
                                <input type="text" placeholder="search here...." name="search">
                                <input type="button" value="Go">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="assets/js/animation.js"></script>
        <script src="assets/js/control.js"></script>
    </footer>
</body>

</html>