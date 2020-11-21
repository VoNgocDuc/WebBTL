<html>

<head>

<body>
    <div class="products">
        <div class="container">
            <div class="row">
                <?php
            require("databaseconnect.php");
            $sql_select = "select * from product where status=N'Cho thuê' ";

            
            if ($ketqua= $conn -> query($sql_select))
            {
                while ($row = mysqli_fetch_assoc($ketqua))
                {
                    echo" <div class='col-md-4'>
              <div class='product-item'>
               <img src='".$row["linkimage"]."' alt=''>

               <div class='down-content'>
               <div class='wappp'>
              <h4>Tên xe: ".$row["name"]." </h4>
                  <h6><small>Gía thuê : </small>".$row["pricerental"]." VND /1 <small>day</small></h6>
                  <p>".$row["description"]."</p>
                </div>
                <small>
                    <strong title='passegengers'><i class='fa fa-user'></i> 5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title='luggages'><i class='fa fa-briefcase'></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title='doors'><i class='fa fa-sign-out'></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title='transmission'><i class='fa fa-cog'></i> A</strong>
                </small>

                <span>
                  <a href='#' data-toggle='modal' data-target='#exampleModal'><b> Đặt lịch ngay</b></a>
                </span>
              </div>
            </div>
          </div>";
                }
            }
           
                     
    ?>
            </div>
        </div>
    </div>
</body>

</html>