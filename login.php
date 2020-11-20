<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="login-box">
        <h1>Login</h1>
        <form action="login.php" method="POST">
            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Username">
            </div>

            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" name="pass" placeholder="Password">
            </div>

            <input type="submit" name="btnSub" class='btn' value="Sign in">
        </form>
    </div>

    <?php
      include('checkLogin.php')
    ?>
</body>

</html>