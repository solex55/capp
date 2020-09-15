<?php include('server.php'); ?>

<?php
if(!isset($_SESSION['username'])){
  header('location: login.php');
}
?>

<?php 

$query = "SELECT * FROM todo";
$result = mysqli_query($db, $query);

if(isset($_POST['submit'])){
    $todo = $_POST['todo'];
    $date = date('l dS F\, Y');
    if(empty($_POST['todo'])){
        array_push($error, "<p><b>*YOU MUST FILL THE TODO</b></p>");
        //$error = "you must fill in task";
    }
    else{
        
        $sql = "INSERT INTO todo (t_name, t_date) VALUES('$todo', '$date')";
        $results = mysqli_query($db, $sql);

    if(!$results){
        die("failed");
    }
    else{     
         header('location: home.php?todo_added');
        }
    }
}

if(isset($_GET['delete_todo'])){
    $del_todo = $_GET['delete_todo'];
    $sqli = "DELETE FROM todo WHERE t_id = $del_todo";
    $res = mysqli_query($db, $sqli);
    if(!$res){
        die("failed");
    }
    else{     
         header('location: home.php?todtodo_deleted');
        }
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
            <h1><a href="home.php">CAPP</a></h1>
            <h3> For all your Todo's</h3>
            <?php if (isset($_SESSION['username'])):?>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p><a href="home.php?logout='1'" style="color:red;">logout</a></p>
            <?php endif ?>
            <div class="error"><?php include('errors.php') ?></div>
            
            
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                <div class="form-group">
                    <input class="form-control" type="text" name="todo" placeholder="Todo Name">
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" value="Add a new Todo" name="submit" type="submit" placeholder="Todo Name">
                </div>
            </form>
        </div>
        <div class="search">
        <form action="search.php" method="POST">
            <input type="text" name="search" placeholder="Search Todo.....">
        </form>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <th>id</th>
                    <th>todo</th>
                    <th>date added</th>
                    <th>edit todo</th>
                    <th>delete todo</th>
                </thead>
                <tbody>
                    <?php
                    while($row = mysqli_fetch_assoc($result)){
                        $t_id= $row['t_id'];
                        $t_name= $row['t_name'];
                        $t_date= $row['t_date'];

                        ?>

                    <tr>
                        <td><?php echo $t_id;?></td>
                        <td><?php echo $t_name;?></td>
                        <td><?php echo $t_date;?></td>
                        <td><a href="edit.php?edit_todo=<?php echo $t_id; ?>" class="btn btn-success">Edit</a></td>
                        <td><a href="home.php?delete_todo=<?php echo $t_id; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>

                    <?php }
                    
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>