<?php
	//Gọi file connection.php ở bài trước
	require_once("databaseconnect.php");
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["btnSub"])) {
		// lấy thông tin người dùng
		$username = $_POST["username"];
		$password = $_POST["pass"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($username == "" || $password =="") {
			echo '<script language="javascript">';
            echo 'alert("tài khoản mất khẩu không được để trống")';
            echo '</script>';
		}else{
			$sql = "select * from admin where user = '".md5($username)."' and password = '".md5($password)."' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
                echo '<script language="javascript">';
                echo 'alert("tên đăng nhập hoặc mật khẩu không đúng !")';  
                echo '</script>';
			}else{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				$_SESSION['tentaikhoan'] = $username;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                header('Location: index.php');
			}
		}
	}
?>