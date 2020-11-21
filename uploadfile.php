<?php

// file name
$filename = $_FILES['file']['name'];

// Location
$path = 'assets/img/'.$filename;

// file extension
$file_extension = pathinfo($path, PATHINFO_EXTENSION);
$file_extension = strtolower($file_extension);

// Valid image extensions
$image_ext = array("jpg","png","jpeg");

$response = 0;
if(in_array($file_extension,$image_ext)){
  // Upload file
  if(move_uploaded_file($_FILES['file']['tmp_name'],$path)){
    $response = $path;
  }
}

echo $response;
?>

