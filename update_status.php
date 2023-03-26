<?php

include('includes/connection.php');
if(isset($_POST['update'])){
  
    $query="update tasks set status='$_POST[status]' where tid= '$_GET[id]'";
    $query_run=mysqli_query($connection,$query);
    
 
    if($query_run){
        echo "<script type='text/javascript'>
        alert('Status updated successfully');
       
        </script>";
        

    }
    else{

        echo "<script type='text/javacript'>
        alert('Error..Please try again');
        window.location.href='user_dashboard.php';
        </script>";

    }
}
date_default_timezone_set('Asia/Kolkata');
$t=date('h:i:s');
if(isset($_POST['clock-in'])){
  $query1="update tasks set start_time='$t' where tid= $_GET[id]";
  $query_run1=mysqli_query($connection,$query1);
  if($query_run1){
     echo "<script type='text/javascript'>
     alert('Time In Updated');
     window.location.href='user_dashboard.php';
     </script>";
  }
  else{

     echo "<script type='text/javacript'>
     alert('Error..Please try again');
     window.location.href='user_dashboard.php';
     </script>";

 }
}

date_default_timezone_set('Asia/Kolkata');
$t=date('h:i:s');
if(isset($_POST['clock-out'])){
  $query1="update tasks set end_time='$t' where tid= $_GET[id]";
  $query_run1=mysqli_query($connection,$query1);
  if($query_run1){
     echo "<script type='text/javascript'>
     alert('Time Out Updated');
     window.location.href='user_dashboard.php';
     
     </script>";
  }
  else{

     echo "<script type='text/javacript'>
     alert('Error..Please try again');
     window.location.href='user_dashboard.php';
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
  <!-- <script>
       $(document).ready(function(){
        $("#update").click(function(){
          $("#clock").css("visibility", "visible");
        });
       })
    </script> -->
</head>
<body style="background-color:#fcde67">
<div class="row">
    <div class="col-md-6">
    <h3> Update the task</h3>
    <?php 
    if(isset($_GET['id'])){
    $query1= "select * from tasks where tid='$_GET[id]'";
    $query_run1=mysqli_query($connection,$query1);
    while($row=mysqli_fetch_assoc($query_run1)){
    ?>

   
        <form action="" method="post">
        <div class="form-group">
                <input type="hidden" name="id" class="form-control" value="id" required>
            <div class="form-group">
                <select class="form-control" name="status">
                    <option>-Select-</option>
                    <option>In-Progress</option>
                    <option>Completed</option>
                   
                </select>
               
                <input type="submit" class="btn btn-dark text-center update" name="update" id="update" value="Update" />
                <hr>
                <div  id="clock">
                <input  type="submit" class="btn btn-dark text-center" name="clock-in" id="clock" value="Clock IN" />
                <input  type="submit" class="btn btn-dark text-center" name="clock-out"  value="Clock OUT" />
                </div>
           </form>
           <?php
           }
        }
           ?>
       </div>
 </div>
</body>
</html>