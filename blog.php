

<html lang="en">

  

   

  <body>

  

 
    

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/img/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Chuyên mục tạp chí ô tô</h4>
              <h2>Blog</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <?php
              include("databaseconnect.php");
              $sql = "Select * from blogs ";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
              ?>

              <div class="col-md-6">
                <div class="service-item">
                  <a href="blog-details.php" class="services-item-image"><img src="<?php echo $row["linkimage"]?>" class="img-fluid" alt=""></a>

                  <div class="down-content">
                    <h4><a href="blog-details.php"><?php echo $row["description"]?></a></h4>

                    <p style="margin: 0;"> <?php echo $row["name"]?> &nbsp;&nbsp;|&nbsp;&nbsp; <?php echo $row["date"]?> &nbsp;&nbsp;|&nbsp;&nbsp; </p>
                  </div>
                </div>
              </div>
              <?php
              }   
              } ?>
              <div class="col-md-12">
                <ul class="pages">
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-form">
              <div class="form-group">
                <h5>Tìm kiếm bài viết</h5>
              </div>

              <div class="row">
                <div class="col-8">
                  <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                </div>

                <div class="col-4">
                  <button class="filled-button" type="button">Search</button>
                </div>
              </div>
            </div>

            <!-- <div class="form-group">
              <h5> </h5>
            </div>

            <p><a href="blog-details.html">Lorem ipsum dolor sit amet, consectetur adipisicing.</a></p>
            <p><a href="blog-details.html">Et animi voluptatem, assumenda enim, consectetur quaerat!</a></p>
            <p><a href="blog-details.html">Ducimus magni eveniet sit doloremque molestiae alias mollitia vitae.</a></p> -->
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>


   

    

    <!-- Bootstrap core JavaScript -->
    <link href="assets/css/mains.css" rel="stylesheet">
    <link href="assets/css/rentalcar.css" rel="stylesheet">
   
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/animation.js"></script>
    
  </body>

</html>
