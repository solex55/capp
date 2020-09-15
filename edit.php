<?php 

include "server.php";

if(isset($_GET['edit_todo'])){
    $edit_id = $_GET['edit_todo'];  
}

if(isset($_POST['edit_btn'])){
    $edit_todoo = $_POST['todo'];
    $query = "UPDATE todo SET t_name = '$edit_todoo' WHERE t_id = $edit_id";
    $run = mysqli_query($db, $query);
    if(!$run){
        die("failed");
    }
    else{     
         header('location: home.php?todo_updated');
    }
    
}
?>

<?php
if(!isset($_SESSION['username'])){
  header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

    <title>TODO APP</title>
</head>
<body>
    <div class="content">
        <?php if (isset($_SESSION['success'])):?>
        <div class="error success">
            <h3>
                <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                ?>
            </h3>
        </div>
        <?php endif ?>
    </div>
    <div class="container">
        <div class="todo">
            <h1><a href="home.php">CAPP</a>  </h1>
            <h3> For all your Todo's</h3>
            <?php if (isset($_SESSION['username'])):?>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p><a href="home.php?logout='1'" style="color:red;">logout</a></p>
            <?php endif ?>

            <form action="" method="POST">
                
            <?php 
            $sql = "SELECT * FROM todo WHERE t_id = $edit_id";
            $result = mysqli_query($db, $sql);
            $data = mysqli_fetch_array($result);
            ?>
                <div class="form-group">
                    <input class="form-control" value="<?php echo $data['t_name']; ?>" type="text" name="todo" placeholder="Todo Name">
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" value="Add a new Todo" name="edit_btn" type="submit" placeholder="Todo Name">
                </div>
            </form>
        </div>
        
    </div>
</body>
</html>