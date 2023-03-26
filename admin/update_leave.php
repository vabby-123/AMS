<?php

include('../includes/connection.php');
if(isset($_POST['update'])){
    $query="update leaves set status='$_POST[status]' where lid= $_GET[id]";
    $query_run=mysqli_query($connection,$query);
    if($query_run){
        echo "<script type='text/javascript'>
        alert('Status updated successfully..');
        window.location.href='show_leave.php';
        </script>";
        

    }
    else{

        echo "<script type='text/javacript'>
        alert('Error..Please try again');
        window.location.href='show_leave.php';
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
</head>
<body style="background-color:#fcde67">
<div class="row">
    <div class="col-md-6">
    <h3> Update the task</h3>
    <?php 
    include('../includes/connection.php');
    $query= "select * from leaves where lid=$_GET[id]";
    $query_run=mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($query_run)){
    ?>

   
        <form action="" method="post">
        <div class="form-group">
                <input type="hidden" name="id" class="form-control" value="" required>
            <div class="form-group">
                <select class="form-control" name="status">
                    <option>-Select-</option>
                    <option>Approved</option>
                    <option>Denied</option>
                   
                </select>
               
                <input type="submit" class="btn btn-dark text-center" name="update" value="Update" />


           </form>
           <?php
           }
           ?>
       </div>
 </div>
</body>
</html>