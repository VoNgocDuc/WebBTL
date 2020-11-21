
<?php
    require("databaseconnect.php");
    session_start();
    /*if(!$_SESSION["tentaikhoan"])
    {
        header('Location:login.php');
    }
    else
    {
        echo "Xin chào : " . $_SESSION["tentaikhoan"];
        echo "<a href='login.php?task=logout' class='btn btn-danger'>Đăng xuất </a>";
    }
    */
    if(isset($_GET["task"]) && $_GET["task"] == "delete")
    {   
        //echo "mã danh mục là ". $_GET["id"];
        $sql_delete = "Delete FROM blogs where id = ". $_GET["id"];
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
        $sql_insert = "insert into blogs(name,description,linkimage,content,date,author) values(N'".$_POST["tenbaiviet"]."','".$_POST["tieude"]."','./assets/img/".$_POST["file"]."','".$_POST["content"]."','".$_POST["date"]."','".$_POST["author"]."')";
        //kiêm tra insert có thanh công hay không
        
        if(mysqli_query($conn,$sql_insert))
        {
            echo "thêm mới dữ liệu thành công";
            
            //điều hướng trang web tranhs lặp insert data khi f5
            header('Location:blogsQL.php');
        }
        else
        {
            echo "không thêm mới thành công" . mysqli_error($conn);
        }
    }
    
   
    if(isset($_POST["btn_update"]))
    {
    // {
    //     $sql_update = "update blogs set name = N'".$_POST["tenbaiviet"]."',description=N'".$_POST["tieude"]."',linkimage='".$_POST["linkanh"]."',content=N'".$_POST["content"]."',date='".$_POST["date"]."',author =N'".$_POST["author"]."' where id= '".$_POST["ma_dm"]."';";
        
        $sql = "update blogs set name =N'".$_POST['tenbaiviet']."', description =N'".$_POST['tieude']."', linkimage ='./assets/img/".$_POST['linkanh']."', content=N'".$_POST['content']."',date ='".$_POST['date']."', author =N'".$_POST['author']."'  where id = '".$_POST['ma_dm']."' ";
        if(mysqli_query($conn,$sql))
        {
            echo "cập nhât dữ liệu thành công";
            header('Location:blogsQL.php');
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
    <title>Quản Lý Blog</title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    
    <script src="./assets/js/uploadfile.js"></script>
</head>

<body>
    
    <h2 style="text-align:center; color:red" id="Title">Quản Lý Blog</h2>
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#exampleModal">Thêm sản phẩm</button>
    
    <table class="table">
        <!--tạo tiêu đề cho bảng-->
        <tr>
            <th>Id bài viết</th>
            <th>Tên Bài Viết</th>
            <th>Tiêu đề</th>
            <th>Link ảnh</th>
            <th>Nội dung</th>
            <th>Ngày đăng</th>
            <th>Tác giả</th>
            <th>Thao Tác</th>

        </tr>
        <?php
            $sql_select = "select * from blogs";

            
            if ($ketqua= $conn -> query($sql_select))
            {
                while ($row = mysqli_fetch_assoc($ketqua))
                {   
                    
                    if(isset($_GET["t"]) && $_GET["t"]=="update")
                    {
                        if($_GET["ma"]== $row["id"])
                        {   
                            echo "<tr><form action='blogsQL.php' method='post'>";
                            echo "<td>".$row["id"]."</td>";
                            echo "<td><input size='10' type='text' name='tenbaiviet' value='".$row["name"]."'></td>";
                            echo "<td><input size='10'type='text' name='tieude' value='".$row["description"]."'></td>";
                            echo "<td>
                            <form action='' method='POST' enctype='multipart/form-data'>
 
                            <input type='file' name='linkanh' id='linkanh' >
                            
                            
                            </td>";
                            
                            echo "<td><textarea id='content' name='content' rows='10' cols='80'>".$row["content"]."</textarea></td>";
                            echo "<td><input size='10' type='text' name='date' value='".$row["date"]."'></td>";
                            echo "<td><input size='10' type='text' name='author' value='".$row["author"]."'></td>";
                            
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
                            echo "<td>".$row["description"]."</td>";
                            echo "<td>".$row["linkimage"]."</td>";
                            echo "<td>".$row["content"]."</td>";
                            echo "<td>".$row["date"]."</td>";
                            
                            echo "<td>".$row["author"]."</td>";
                            
                            echo "<td>";
                            echo "<a href='blogsQl.php?t=update&ma=".$row["id"]."' class='btn btn-warning'>Cập nhật</a>";
                            echo "<a href='blogsQl.php?task=delete&id=".$row["id"]."' class='btn btn-danger'> Xóa </a>";
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Thêm bài viết</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
              <form action="blogsQL.php" id="contact" method="post">
                  <table>
                  <tr>
                  <td>Nhập tên bài viết</td>
                  <td><input type="text" class="form-control" placeholder="Nhập tên bài viết" required="" id="tenbaiviet" name="tenbaiviet"></td>
                  </tr>
                  
                  
                  <tr>
                  <td>Nhập tiêu đề</td>
                  <td><input type="text" class="form-control" placeholder="Nhập tiêu đề" required="" id="tieude" name="tieude"></td>
                  </tr>

                  

                  <tr>
                  <td>Nhập nội dung bài viết</td>
                  <td><textarea id="content" name="content"  rows="10" cols="80"> </textarea></td>
                  </tr>

                  
                  
                  <tr>
                  <td>Ngày đăng</td>
                  <td><input type="date" class="form-control" id="date" name="date"></td>
                  </tr>

                  <tr>
                  <td>Tác giả</td>
                  <td><input type="text" class="form-control" value="dat"  id="author" name="author"></td>
                  </tr>

                  <tr>
                  <td> Link ảnh</td>
                  <td>
                  <form action="blogsQL.php" method="POST" enctype="multipart/form-data">
 
                  <input type="file" name="file" id="file">
                  <input type='button' class='btn btn-info' value='Upload' id='btn_upload'>
                  <div id="preview"></div>
                  </form>
                  </td>

                  </tr>
                  
                  </table>
                  
                  
            
                  
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    <button type="submit" name="submit" id="submit" class="btn btn-primary"> Đặt ngay</button>
                  </div>
                </form>
           </div>
          </div>
          <script src="assets/ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('content');
        </script>
        </div>
      </div>
    </div>
    
    
</body>
</html>
