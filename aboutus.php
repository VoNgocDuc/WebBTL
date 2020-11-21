<html>

<body>
    <?php
    include("databaseconnect.php");
    $sql = "Select * from aboutus where id=1 ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
    ?>
    <div class="best-features about-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2><?php echo $row["name"]?></h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="assets/img/about-1-570x350.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <h4><?php echo $row["type"]?></h4>
                        <p><?php echo $row["content"]?></p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        }   
        } ?>
    <?php
    include("databaseconnect.php");
    $sql = "Select * from aboutus where id=2";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
    ?>
    <div class="team-members">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2><?php echo $row["type"]?></h2>
                    </div>
                    <p id="content-footer">
                        <?php echo $row["content"]?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php
        }   
        } ?>
</body>

</html>