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
        <form action="checkLogin.php" method = "post">
            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" name ="username">
            </div>

            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name ="pass">
            </div>

            <input type="submit" class="btn" name = "btnSub" value="Sign in">
        </form>

    </div>
</body>

</html>