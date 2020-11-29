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

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Đặt lịch</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
              <form action="" id="contact" method="post">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Nhập tên của bạn" required="" id="name" name="name">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Nhập địa chỉ của bạn" required="" id="adress" name="adress">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="date" class="form-control" placeholder="Ngày thuê" required="" id="daterantel" name="daterantel">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="date" class="form-control" placeholder="Ngày trả" required="" id="datereturn" name="datereturn">
                          </fieldset>
                       </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Tên xe bạn muốn" required="" id="namecar" name="namecar">

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Địa chỉ gmail" required="" id="gmail" name="gmail">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Số điện thoại" required="" id="numberphone" name="numberphone">
                          </fieldset>
                       </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    <button type="submit" name="submit" id="submit" class="btn btn-primary"> Đặt ngay</button>
                  </div>
              </form>
           </div>
          </div>

        </div>
      </div>
    </div>

    <?php
if (isset($_POST["submit"])) {
  $username = $_POST["name"];
  $adress = $_POST["adress"];
  $daterantel = $_POST["daterantel"];
  $datereturn = $_POST["datereturn"];
  $namecar = $_POST["namecar"];
  $gmail = $_POST["gmail"];
  $numberphone = $_POST["numberphone"];
  if ($username == "" || $numberphone == "") {
  $message = "bạn vui lòng nhập đầy đủ thông tin";
  }else{
  $sql = "INSERT INTO customer1(name,adress,daterantel,datereturn,namecar,gmail,numberphone) VALUES ('$username','$adress','$daterantel','$datereturn','$namecar','$gmail','$numberphone')";
  mysqli_query($conn,$sql);
  $message = "Bạn đã đặt lịch thành công";
  }

  echo "<script type='text/javascript'>
  alert('$message');
  location.href='index.php';
  </script>";    
}   
?>
</body>

</html>