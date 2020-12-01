<?php
    require("databaseconnect.php");
    session_start();
    if(!$_SESSION["tentaikhoan"])
    {
        header('Location:login.php');
        $_SESSION["linkdangql"]="customersQL.php";
    }
    else
    {
        echo "Xin chào : " . $_SESSION["tentaikhoan"];
        echo "<a href='login.php?task=logout' class='btn btn-danger'>Đăng xuất </a>";
    }

    if(isset($_GET["task"]) && $_GET["task"] == "delete")
    {   
        //echo "mã danh mục là ". $_GET["id"];
        $sql_delete = "Delete FROM customer where id = ". $_GET["id"];
        if(mysqli_query($conn,$sql_delete))
        {
            header('Location: customersQL.php');
            echo "Xóa dữ liệu thành công ";            
        }
        else
        {
            echo "Xóa dữ liệu thất bại" . mysqli_error($conn);
        }
    }
   
    if(isset($_POST["btn_update"]))
    {
        $sql_update = "update customer set name = N'".$_POST["customerName"]."',gmail='".$_POST["customerGmail"]."',subject='".$_POST["customerSubject"]."',message='".$_POST["customerMessage"]."' where id = '".$_POST["ma_dm"]."';";
        if(mysqli_query($conn,$sql_update))
        {
            header('Location: customersQL.php');
            echo "cập nhât dữ liệu thành công";
        }
        else
        {
            echo "cập nhật thất bại" . mysqli_error($conn);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Thông Tin Xe</title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="./assets/js/uploadfile.js"></script>
</head>

<body>

    <h2 style="text-align:center; color:red" id="Title">Quản Lý Thông Tin Khách Hàng Đăng Kí</h2>

    <table class="table">
        <!--tạo tiêu đề cho bảng-->
        <tr>
            <th>Id Đăng Kí</th>
            <th>Tên Khách Hàng</th>
            <th>Gmail</th>
            <th>Subject</th>
            <th>Message</th>
            

        </tr>
        <?php
            $sql_select = "select * from customer";

            
            if ($ketqua= $conn -> query($sql_select))
            {
                while ($row = mysqli_fetch_assoc($ketqua))
                {   
                    
                    if(isset($_GET["t"]) && $_GET["t"]=="update")
                    {
                        if($_GET["ma"]== $row["id"])
                        {   
                            echo "<tr><form action='customersQL.php' method='post'>";
                            echo "<td>".$row["id"]."</td>";
                            echo "<td><input size='10'type='text' name='customerName' value='".$row["name"]."'></td>";
                            echo "<td><input size='10'type='text' name='customerGmail' value='".$row["gmail"]."'></td>";

                            echo "<td><input size='10'type='text' name='customerSubject' value='".$row["subject"]."'></td>";
                            echo "<td><input size='10' type='text' name='customerMessage' value='".$row["message"]."'></td>";
                            echo "<input name='ma_dm' type='hidden' value='".$row["id"]."'>";
                            echo "<td>";
                            echo "<input type = 'submit' name = 'btn_update' value = 'Cập nhật' class='btn btn-primary'>";
                            echo "</td>";
                            echo "</form></tr>";
                        }
                    }
                    else
                    {
                            echo "<tr>";
                            echo "<td>".$row["id"]."</td>";
                            echo "<td>".$row["name"]."</td>";
                            echo "<td>".$row["gmail"]."</td>";
                            echo "<td>".$row["subject"]."</td>";
                            echo "<td>".$row["message"]."</td>";
                            echo "<td>";
                            echo "<a href='customersQL.php?t=update&ma=".$row["id"]."' class='btn btn-warning'>Cập nhật</a>";
                            echo "<a href='customersQL.php?task=delete&id=".$row["id"]."' class='btn btn-danger'> Xóa </a>";
                            echo "</td>";
                            echo "</tr>";

                    }
                    
                }
            }
            else
            {   
                
                echo "Bảng không có dữ liệu";
            }   
            mysqli_close($conn);
            
        ?>

    </table>

</body>

</html>