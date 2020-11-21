<?php
    require("databaseconnect.php");
    session_start();
    if(!$_SESSION["tentaikhoan"])
    {
        header('Location:login.php');
    }
    else
    {
        echo "Xin chào : " . $_SESSION["tentaikhoan"];
        echo "<a href='login.php?task=logout' class='btn btn-danger'>Đăng xuất </a>";
    }

    if(isset($_GET["task"]) && $_GET["task"] == "delete")
    {   
        //echo "mã danh mục là ". $_GET["id"];
        $sql_delete = "Delete FROM product where id = ". $_GET["id"];
        if(mysqli_query($conn,$sql_delete))
        {
            echo "Xóa dữ liệu thành công ";
        }
        else
        {
            echo "Xóa dữ liệu thất bại" . mysqli_error($conn);
        }
    }
    if(isset($_POST["submit"])){
        //khởi tạo biến sql insert data
        $sql_insert = "insert into product(name,linkimage,price,description,pricerental,status,timerental,unit) values(N'".$_POST["productname"]."','./assets/img/".$_POST["file"]."','".$_POST["price"]."','".$_POST["description"]."','".$_POST["pricerental"]."','".$_POST["status"]."','".$_POST["timer"]."','".$_POST["unit"]."')";
        //kiêm tra insert có thanh công hay không
        
        if(mysqli_query($conn,$sql_insert))
        {
            echo "thêm mới dữ liệu thành công";
            
            //điều hướng trang web tranhs lặp insert data khi f5
            header('Location:ProductQL.php');
        }
        else
        {
            echo "không thêm mới thành công" . mysqli_error($conn);
        }
    }
    
   
    if(isset($_POST["btn_update"]))
    {
        $sql_update = "update product set name = N'".$_POST["productname"]."',linkimage='./assets/img/".$_POST["linkanh"]."',price='".$_POST["price"]."',description='".$_POST["description"]."',pricerental='".$_POST["pricerental"]."',status ='".$_POST["status"]."',timerental='".$_POST["timer"]."',unit='".$_POST["unit"]."' where id= ".$_POST["ma_dm"];
        if(mysqli_query($conn,$sql_update))
        {
            echo "cập nhât dữ liệu thành công";
            header('Location:ProductQL.php');
        }
        else
        {
            echo "câpj nhật dữ liệu thất baij" . mysqli_error($conn);
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

    <h2 style="text-align:center; color:red" id="Title">Quản Lý Thông Tin Xe</h2>
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#exampleModal">Thêm sản
        phẩm</button>

    <table class="table">
        <!--tạo tiêu đề cho bảng-->
        <tr>
            <th>Id sản phẩm</th>
            <th>Tên Sản Phẩm</th>
            <th>Link ảnh</th>
            <th>Price</th>
            <th>Thông tin sản phẩm</th>
            <th>Pricerental</th>
            <th>status</th>
            <th>Timer</th>
            <th>Unit</th>
            <th>Thao Tác</th>

        </tr>
        <?php
            $sql_select = "select * from product";

            
            if ($ketqua= $conn -> query($sql_select))
            {
                while ($row = mysqli_fetch_assoc($ketqua))
                {   
                    
                    if(isset($_GET["t"]) && $_GET["t"]=="update")
                    {
                        if($_GET["ma"]== $row["id"])
                        {   
                            echo "<tr><form action='ProductQL.php' method='post'>";
                            echo "<td>".$row["id"]."</td>";
                            echo "<td><input size='10'type='text' name='productname' value='".$row["name"]."'></td>";
                            echo "<td>
                            <form action='' method='POST' enctype='multipart/form-data'>
 
                            <input type='file' name='linkanh' id='linkanh' >
                            <input type='button' value='Upload' id='btn_upload'>
                            
                            </td>";
                           

                            //echo "<td><input size='10' type='text' name='linkanh' value='".$row["linkimage"]."'></td>";
                            echo "<td><input size='10'type='text' name='price' value='".$row["price"]."'></td>";
                            echo "<td><textarea id='description' name='description' rows='10' cols='80' >".$row["description"]."</textarea></td>";
                            echo "<td><input size='10' type='text' name='pricerental' value='".$row["pricerental"]."'></td>";
                            echo "<td><input size='10' type='text' name='status' value='".$row["status"]."'></td>";
                            echo "<td><input size='10' type='text' name='timer' value='".$row["timerental"]."'></td>";
                            echo "<td><input size='10' type='text' name='unit' value='".$row["unit"]."'></td>";
                            echo "<input type='hidden' name='ma_dm' value='".$row["id"]."'>";
                            echo "<td>";
                            echo "<input type = 'submit' name = 'btn_update' value = 'Cập nhât' class='btn btn-primary'>";
                            echo "</td>";
                            echo "</form></tr>";
                        }
                    }
                    else
                    {
                            echo "<tr>";
                            echo "<td>".$row["id"]."</td>";
                            echo "<td>".$row["name"]."</td>";
                            echo "<td>".$row["linkimage"]."</td>";
                            echo "<td>".$row["price"]."</td>";
                            echo "<td>".$row["description"]."</td>";
                            echo "<td>".$row["pricerental"]."</td>";
                            echo "<td>".$row["status"]."</td>";
                            echo "<td>".$row["timerental"]."</td>";
                            echo "<td>".$row["unit"]."</td>";
                            echo "<td>";
                            echo "<a href='ProductQL.php?t=update&ma=".$row["id"]."' class='btn btn-warning'>Cập nhật</a>";
                            echo "<a href='ProductQL.php?task=delete&id=".$row["id"]."' class='btn btn-danger'> Xóa </a>";
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



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm sản phẩm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form">
                        <form action="ProductQL.php" id="contact" method="post">
                            <table>
                                <tr>
                                    <td>Nhập tên sản phẩm</td>
                                    <td><input type="text" class="form-control" placeholder="Nhập tên sản phẩm"
                                            required="" id="productname" name="productname"></td>
                                </tr>


                                <tr>
                                    <td>Nhập giá</td>
                                    <td><input type="text" class="form-control" placeholder="Nhập giá" required=""
                                            id="price" name="price"></td>
                                </tr>

                                <tr>
                                    <td>Nhập trạng thái</td>
                                    <td><input type="text" class="form-control" placeholder="Trạng thái" required=""
                                            id="status" name="status"></td>
                                </tr>

                                <tr>
                                    <td>Nhập giá thuê</td>
                                    <td><input type="text" class="form-control" placeholder="Nhập giá thuê" required=""
                                            id="pricerental" name="pricerental"></td>
                                </tr>

                                <tr>
                                    <td>Nhập thông tin sản phẩm</td>
                                    <td><textarea id="description" name="description" rows="10" cols="80"> </textarea>
                                    </td>
                                </tr>



                                <tr>
                                    <td>Thời gian thuê</td>
                                    <td><input type="text" class="form-control" placeholder="Thời gian" required=""
                                            id="timer" name="timer"></td>
                                </tr>

                                <tr>
                                    <td>Số lượng</td>
                                    <td><input type="text" class="form-control" placeholder="Số lượng" required=""
                                            id="unit" name="unit"></td>
                                </tr>

                                <tr>
                                    <td> Link ảnh</td>
                                    <td>
                                        <form action="ProductQL.php" method="POST" enctype="multipart/form-data">

                                            <input type="file" name="file" id="file">
                                            <input type='button' class='btn btn-info' value='Upload' id='btn_upload'>
                                            <div id="preview"></div>
                                        </form>
                                    </td>

                                </tr>

                            </table>




                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                <button type="submit" name="submit" id="submit" class="btn btn-primary"> Đặt
                                    ngay</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="assets/ckeditor/ckeditor.js"></script>
    <script>
    CKEDITOR.replace('description');
    </script>
    <script src="../assets/js/uploadfile.js"></script>
</body>

</html>