<html>

<body>
    <!-- Page Content -->
    <div class="page-heading about-heading header-text"
        style="background-image: url(assets/img/heading-6-1920x500.jpg);">
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
    <div class="col-md-4">
        <div class="contact-form">
            <div class="form-group">
                <h5>Tìm kiếm bài viết</h5>
            </div>


            <form action="searchdata.php" method="post">
                <table>
                    <th>
                        <input id="search1" name="search1" type="text" class="form-control" placeholder="Search"
                            aria-label="Search" aria-describedby="basic-addon2">
                    </th>

                    <th>
                        <?php  
                   echo '<input type="submit" value="search" name ="subSearch">';
                  ?>
                    </th>
                </table>
            </form>

        </div>
        <?php
include("databaseconnect.php");
    if(isset($_POST['subSearch'])){
        
        $sql_search = "Select * from blogs where name like '%".$_POST["search1"]."%'or description like'%".$_POST["search1"]."%'";
        $res = $conn->query($sql_search);
        if($res ->num_rows>0){
            ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <?php
            while($row1 = $res->fetch_assoc()){
                ?>
                        <div class="col-md-6">
                            <div class="service-item">
                                <a href="<?php echo 'baiviet.php?task=bv&id='.$row1["id"] ?>"
                                    class="services-item-image"><img src="<?php echo $row1["linkimage"]?>"
                                        class="img-fluid" alt=""></a>

                                <div class="down-content">
                                    <h4><a
                                            href="<?php echo 'baiviet.php?task=bv&id='.$row1["id"] ?>"><?php echo $row1["description"]?></a>
                                    </h4>

                                    <p style="margin: 0;"> <?php echo $row1["name"]?> &nbsp;&nbsp;|&nbsp;&nbsp;
                                        <?php echo $row1["date"]?> &nbsp;&nbsp;|&nbsp;&nbsp; </p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>


                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        else{ echo "Không tìm thấy dữ liệu";}    
    
         }
        ?>

        <!-- Bootstrap core JavaScript -->
        <link href="assets/css/mains.css" rel="stylesheet">
        <link href="assets/css/rentalcar.css" rel="stylesheet">

        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>