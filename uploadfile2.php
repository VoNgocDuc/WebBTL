<?php
$response = 0;
 if (!isset($_FILES['linkanh']))
 {
     $response= "Vui long chon file";
     echo $response;
    die;
 }
// file name
$filename = $_FILES['linkanh']['name'];

// Location
$path1 = 'assets/img/'.$filename;

// file extension
$file_extension = pathinfo($path1, PATHINFO_EXTENSION);
$file_extension = strtolower($file_extension);



// Valid image extensions
$image_ext = array("jpg","png","jpeg");


$allowUpload   = true;
 // Kiểm tra nếu file đã tồn tại thì không cho phép ghi đè
  if (file_exists($path1))
  {
      $response= "Tên file đã tồn tại trên server, không được ghi đè";
      echo $response;
      $allowUpload = false;
      die;
  }
 

  // Kiểm tra kiểu file
  if (!in_array($file_extension,$image_ext))
  {
      $response= "Chỉ được upload các định dạng JPG, PNG, JPEG";
      echo $response;
      $allowUpload = false;
      die;
  }


if($allowUpload){
  // Upload file
  if(move_uploaded_file($_FILES['linkanh']['tmp_name'],$path1)){
    $response = "Đã upload file thành công :)";
    echo $response;
  }
}


?>

