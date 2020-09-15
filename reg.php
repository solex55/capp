<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>REGISTRATION</title>
</head>
<body>
    <div class="login-box">
        <h1>Register</h1>
        <form action="reg.php" method="POST" auto-complete="off">
        <?php include('errors.php') ?>
        <div class="textbox"><i class="fa fa-user" aria-hidden="true"></i><input type="text" value="<?php echo $username; ?>" name="username" placeholder="Username"></div>
        <div class="textbox"><i class="fa fa-envelope" aria-hidden="true"></i><input type="email" value="<?php echo $email; ?>" name="email" placeholder="example@mail.com"></div>
        <div class="textbox"><i class="fa fa-lock" aria-hidden="true"></i><input type="password" name="password_1" placeholder="Passeword"></div>
        <div class="textbox"><i class="fa fa-lock" aria-hidden="true"></i><input type="password" name="password_2" placeholder="Confirm Password"></div>
        <button type="submit" name="register">Register</button>
        <h4>Already a member <a href="login.php">sign in</a></h4>
        </form>
    </div>
</body>
</html>