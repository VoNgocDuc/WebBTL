<?php
    include("databaseconnect.php");
    $sql = "Select * from testimonials LIMIT 0,3;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
    ?>
<div class="service-item">
    <div class="icon">
        <img src="<?php echo $row["linkImage"]?>" alt="">
    </div>
    <div class="down-content">
        <h4><?php echo $row["namecus"]?></h4>
        <p ><em><?php echo $row["description"]?></em></p>
    </div>
</div>
<?php
        }   
        } ?>