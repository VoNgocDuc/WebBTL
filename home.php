<html>
<body>

    <!-- show slider -->
    <div class="container-fluid">
        <div id="slider" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/slider-1.jpg" alt="slider-1" height="500">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/slider-2.jpg" alt="slider-2" height="500">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/slider-3.jpg" alt="slider-3" height="500">
                </div>
            </div>

            <a class="carousel-control-prev" href="#slider" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#slider" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <br>

    <!-- lấy data xe mới -->
    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h3>Giá xe</h3>
                        <a href="#">Hiển thị thêm<i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <!-- kết nối -->

                <?php
                    include("dataCar.php")
                ?>

                </div>
        </div>
    </div>

    <!-- lấy cảm nhận khách hàng -->

    <div class="happy-clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h3>Cảm nhận khách hàng</h3>

                        <a href="#">Xem thêm <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="Coment">
                        <?php include("clientComent.php") ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>