<?php
session_start();
$username = "";
$email = "";
$error = array();

$db = new mysqli("localhost", "root", "", "capp") or die("Could not connect");

if(isset($_POST['register'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password2 = mysqli_real_escape_string($db, $_POST['password_2']);
    

      if(empty($username)) {
        array_push($error, "<p>Username is required</p>");
      }if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($error, "<p>Email is invalid</p>");
      }if (empty($email)) { 
        array_push($error, "<p>Email is required</p>");
      }if (strlen($password1) <= 5) {
        array_push($error, "<p>Password is short</p>");
      }if ($password1 != $password2) {
        array_push($error, "<p>The two password donot match</p>");
      }      
      $s = "select * from users where email = '$email'";
      $res = mysqli_query($db, $s);
      $num = mysqli_num_rows($res);
      if($num == 1){
        array_push($error, "<p>Email already taken</p>");
      }

      if(count($error) == 0) {
        $hashedPwd = md5($password1);
        $sql = mysqli_query($db, "INSERT INTO users (username, email, password) VALUES('$username','$email','$hashedPwd')");
                
        header("Location: login.php?user_created");
      }
}

if(isset($_POST['login'])){
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password1 = mysqli_real_escape_string($db, $_POST['password_1']);
  
    if(empty($username)) {
      array_push($error, "<p>Username is required</p>");
    }if (empty($password1)) {
      array_push($error, "<p>password is required</p>");
    } 

    if(count($error) == 0) {
      $hashedPwd = md5($password1);
      $sql = mysqli_query($db, "SELECT * FROM users WHERE username = '$username' AND password ='$hashedPwd'");
      
      if(mysqli_num_rows($sql) == 1){
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "you are logged in";
        
        header("Location: home.php?user_created");
      }
      else{
        array_push($error, "username/ password is incorrect");
      }
    }

}


if(isset($_GET['logout'])){
  session_destroy();
  unset($_SESSION['username']);
  header('location: login.php?logged_out');
}



?>