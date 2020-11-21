<?php
	require_once("databaseconnect.php");
	if (isset($_POST["btnSub"])) {
        $fullname = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $sql = "insert into customer(name, gmail, subject, message) values ('".$fullname."','".$email."','".$subject."','".$message."')";

        if(mysqli_query($conn,$sql))
        {
            echo '<script language="javascript">';
                echo 'alert("Đăng kí thành công !")';  
                echo '</script>';
        }
        else
        {
            echo "thêm dữ liệu thất bại" . mysqli_error($conn);
        }
        $conn->close();
    }
    
    
?>