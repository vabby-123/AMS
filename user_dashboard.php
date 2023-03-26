<?php
   session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <script
  src="https://code.jquery.com/jquery-3.6.4.js"
  integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
  crossorigin="anonymous"></script>

  <link rel="stylesheet" href="css/style.css">
  <script type="text/javascript">
      $(document).ready(function(){
        $("#create_task").click(function(){
            $("#left_sidebar").load("task.php");
        });
      });

   



    </script>
</head>
<body style="background-color:#fcde67">

  <div class="row">
  <div class="col-lg-6" id="right_sidebar">
  <h4 style="text-align:center">Attechx Serve Technology</h4>
  <table class="table" style="background-color:black">
    <tr>
        <td><a href="user_dashboard.php" type="button" style="text-decoration:none; color:white">Dashboard</td>
    </tr>
    <tr>
        <td><a id="create_task" type="button" style="text-decoration:none; color:white" >Update Task</td>
    </tr>
 
    <tr>
        <td><a href="leave.php" type="button" style="text-decoration:none; color:white" >Apply Leave</td>
    </tr>
    <tr>
        <td><a href="leave_status.php" style="text-decoration:none; color:white" >Leave Status</td>
    </tr>
    <tr>
        <td><a href="logout.php"style="text-decoration:none; color:red" >Log Out</td>
    </tr>
    </table>

  </div>
  <div class="col-lg-6 m-auto"  id="left_sidebar">
 
  <h5 style="text-align:center">Hi, <?php echo $_SESSION['name'];?>  </h5><br>
  <h5>Instruction for Employees</h5><br>
  <ul>
    <li>Understand the task management software you are using </li>
    <li>Review the tasks assigned to you </li>
    <li>Update the task status based on progress made</li>
    <li>Record any comments or notes related to the task</li>
    <li>If necessary, adjust the task deadline or priority</li>
    <li>Communicate with the task owner or team members about any updates or issues</li>
    <li>Mark tasks as complete when they are finished</li>
    <li>Report any issues or problems with the task to your supervisor or IT department</li>
    <li>Use the task management system regularly to stay up to date on task assignments</li>

  </div>

 </div>

</body>
</html>