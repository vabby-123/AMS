<?php
session_start();
include('../includes/connection.php');
if(isset($_POST['adminLogin']))
{
    $query="select * from admins where email= '$_POST[email]' AND password= '$_POST[password]'";
    $query_run= mysqli_query($connection,$query);
    if(mysqli_num_rows($query_run))
    {
        while($row=mysqli_fetch_assoc($query_run)){
             $_SESSION['email']=$row['email'];
             $_SESSION['name']=$row['name'];


        }
        echo "<script type='text/javascript'>
        
        window.location.href='admin_dashboard.php';
        </script>";
    }
    else{
        echo "<script type='text/javascript'>
        alert('Please enter correct email and password');
        window.location.href='admin_login.php';
        </script>";
    }
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <script
  src="https://code.jquery.com/jquery-3.6.4.js"
  integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
  crossorigin="anonymous"></script>

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="row">
        <div class="col-md-4 m-auto">
           <form  action ="" method = "post">
            <h3>Admin Login</h3>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="PAssword" required>
            </div>
            <div class="form-group">
                <input type="submit" name="adminLogin" value="Login" class="btn btn-primary">
             </div>
             </form>
            <a href="../index.php" class="btn btn-danger">Go to Home</a>
        </div>
    </div>
</body>
</html>