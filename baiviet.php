<html>

<body>
    <?php 
 include("databaseconnect.php");
 $sql = "Select * from blogs where id=".$_GET["id"];
        $res = $conn->query($sql);
        $row = $res-> fetch_assoc();
?>
    <div class="page-heading about-heading header-text"
        style="background-image: url(assets/img/heading-6-1920x500.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4><i class="fa fa-user"></i>Hau Moon 2000 &nbsp;&nbsp;&nbsp;&nbsp; <i
                                class="fa fa-calendar"></i>
                            <?php    date_default_timezone_set('Asia/Ho_Chi_Minh');echo(date("F d, Y h:i:s", time()));?>
                            &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-eye"></i> 114</h4>
                        <h2><?php echo$row["name"];?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="contact-form">
            <div class="form-group">
                <h5>Tìm kiếm bài viết</h5>
            </div>


            <form action="searchdata.php" method="post">
                <div class="row">
                    <div class="col-8">
                        <input id="search1" name="search1" type="text" class="form-control" placeholder="Search"
                            aria-label="Search" aria-describedby="basic-addon2">
                    </div>

                    <div class="col-4">
                        <?php  
                    echo '<input type="submit" value="search" name ="subSearch">';
                  ?>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php 
    
    
 if(isset($_GET["task"])&& $_GET["task"]="dat") {
        
     ?>
    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h1><?php echo$row["description"];?></h1>
                    </div>
                </div>

                <div class="col-md-11">
                    <?php
                              echo"<h3>".$row["content"]."</h3>";
                            ?>
                    <div class="col-md-4">
                        <div class="left-content">

                            <?php
                            echo"<img height='682px' width ='1023px'src='".$row["linkimage"]."'>"
                            ?>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <?php
 }
?>

                <link href="assets/css/mains.css" rel="stylesheet">
                <link href="assets/css/rentalcar.css" rel="stylesheet">

                <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                <link rel="stylesheet" href="assets/css/fontawesome.css">
                <link rel="stylesheet" href="assets/css/style.css">
                <link rel="stylesheet" href="assets/css/owl.css">

</body>

</html>