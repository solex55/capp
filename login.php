
<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.png" >

    <title>LOGIN</title>
</head>
<body>
    <div class="login-box">
        <h1>Login</h1>
        <form action="login.php" method="POST" auto-complete="off">
        <div class="error"><?php include('errors.php') ?></div>
            <div class="textbox"><i class="fa fa-user" aria-hidden="true"></i><input type="text" name="username" placeholder="Username"></div>
            <div class="textbox"><i class="fa fa-lock" aria-hidden="true"></i><input type="password" name="password_1" placeholder="Password"></div>
            <button type="submit" name="login">Login</button>
            <h4>Not yet a member <a href="reg.php">sign up</a></h4>
        </form>
    </div>
</body>
</html>