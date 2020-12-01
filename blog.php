<html>
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
                            <form action="baiviet.php?task=bv&id=<?php echo $row["id"]; ?>" method="post">
                  <?php
                  echo "<a href='baiviet.php?task=bv&id=".$row["id"]."'>";
                  ?>
                  
                    <button name="anh" class="services-item-image"><img src="<?php echo $row["linkimage"]?>" class="img-fluid" alt=""></button>

                    <div class="down-content">
                      <h4><?php echo $row["description"]?></h4>

                      <p style="margin: 0;"> <?php echo $row["name"]?> &nbsp;&nbsp;|&nbsp;&nbsp; <?php echo $row["date"]?> &nbsp;&nbsp;|&nbsp;&nbsp; </p>
                    </div>
                  </a>
                  </form>
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
                            <form action="searchdata.php" method="post">
                                    <table>
                                        <th>
                                            <input id="search1" name="search1" type="text" class="form-control"
                                                placeholder="Search" aria-label="Search"
                                                aria-describedby="basic-addon2">
                                        </th>

                                        <th>
                                            <?php  
                                                  echo '<input type="submit" value="search" name ="subSearch">';
                                    ?>
                                        </th>
                                    </table>
                                </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>