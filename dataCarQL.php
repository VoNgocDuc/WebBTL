<?php
include("databaseconnect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Thông Tin Xe</title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
</head>

<body>

    <h2 style="text-align:center; color:red" id="Title">Quản Lý Thông Tin Xe</h2>

    <a href="#" class="btn btn-success">Thêm</a>
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
         
        ?>
        <!-- <tr>
            <td>1</td>
            <td>Tin tức</td>
            <td>1</td>
            <td>
                <a href='#' class='btn btn-warning'>Cập nhật</a>
                <a href='#' class='btn btn-danger'>Xoá</a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Thông báo</td>
            <td>1</td>
            <td>
                <a href='#' class='btn btn-warning'>Cập nhật</a>
                <a href='#' class='btn btn-danger'>Xoá</a>
            </td>
        </tr> -->
    </table>
</body>

</html>