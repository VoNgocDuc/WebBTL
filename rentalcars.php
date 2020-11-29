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
  $sql = "INSERT INTO customer(name,adress,daterantel,datereturn,namecar,gmail,numberphone) VALUES ('$username','$adress','$daterantel','$datereturn','$namecar','$gmail','$numberphone')";
  mysqli_query($conn,$sql);
  $message = "Bạn đã đặt lịch thành công";
  }

  echo "<script type='text/javascript'>
  alert('$message');
  location.href='index.php';
  </script>";    
  $conn ->close();
} 