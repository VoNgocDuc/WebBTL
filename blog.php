<html >

<body>
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
                                <a href="blog-details.php" class="services-item-image"><img
                                        src="<?php echo $row["linkimage"]?>" class="img-fluid" alt=""></a>

                                <div class="down-content">
                                    <h4><a href="blog-details.php"><?php echo $row["description"]?></a></h4>

                                    <p style="margin: 0;"> <?php echo $row["name"]?> &nbsp;&nbsp;|&nbsp;&nbsp;
                                        <?php echo $row["date"]?> &nbsp;&nbsp;|&nbsp;&nbsp; </p>
                                </div>
                            </div>
                        </div>
                        <?php
              }   
              } ?>
                        
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-form">
                        <div class="form-group">
                            <h5>Tìm kiếm bài viết</h5>
                        </div>

                        <div class="row">
                            <div class="col-8">
                                <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                                    aria-describedby="basic-addon2">
                            </div>

                            <div class="col-4">
                                <button class="filled-button" type="button">Search</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>