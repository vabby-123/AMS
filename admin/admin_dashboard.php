<?php
include('../includes/connection.php');
if(isset($_POST['create_task']))
{   
      $query="insert into tasks values(null, '$_POST[id]','$_POST[description]','$_POST[start_date]','$_POST[end_date]','Not Started')";
    $query_run=mysqli_query($connection,$query);

if($query_run){
        echo "<script type='text/javascript'>
        alert('Task created successfully');
        window.location.href='admin_dashboard.php';
        </script>";
        

    }
    else{

        echo "<script type='text/javacript'>
        alert('Error..Please try again');
        window.location.href='admin_dashboard.php';
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
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <script
  src="https://code.jquery.com/jquery-3.6.4.js"
  integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
  crossorigin="anonymous"></script>

  <link rel="stylesheet" href="css/style.css">
  <script type="text/javascript">
      $(document).ready(function(){
        $("#create_task").click(function(){
            $("#left_sidebar").load("createTask.php");
        });
      });

      $(document).ready(function(){
        $("#manage_task").click(function(){
            $("#left_sidebar").load("manageTask.php");
        });
      });



    </script>


</head>
<body style="background-color:#fcde67">

  <div class="row">
  <div class="col-lg-6" id="right_sidebar">
  <h4 class="text-center">Attechx Serve Technology</h4>
  <table class="table" style="background-color:black">
    <tr>
        <td><a href="admin_dashboard.php" type="button" style="text-decoration:none; color:white;">Dashboard</td>
    </tr>
    <tr>
        <td><a id="create_task" type="button" style="text-decoration:none; color:white" >Create Task</td>
    </tr>
 
    <tr>
        <td><a  id="manage_task" type="button" style="text-decoration:none; color:white">Manage Task</td>
    </tr>
    <tr>
        <td><a href="show_leave.php" id="view_leave" style="text-decoration:none; color:white" >Leave Applications</td>
    </tr>
    <tr>
        <td><a href="../logout.php" id="view_leave" style="text-decoration:none; color:red" >Log Out</td>
    </tr>
    </table>

  </div>
  <div class="col-lg-6 m-auto" id="left_sidebar">
  <br>
  
  <h4>Instruction for Admin</h4><br>
  <ul>
    <li>Understand the task management software you are using</li>
    <li>Create tasks with accurate and complete information </li>
    <li>Set appropriate deadlines for tasks</li>
    <li>Prioritize tasks based on importance and urgency</li>
    <li>Assign tasks to the right team member based on their skills and workload</li>
    <li>Monitor progress to ensure tasks are completed on time</li>
    <li>Report any issues with the website to IT department</li>
    <li>Prioritize tasks based on importance and urgency</li>
  </div>

 </div>

</body>
</html>