<?php
include('../includes/connection.php');
if(isset($_POST['edit_task'])){
    $query="update tasks set uid='$_POST[id]', description='$_POST[description]',start_date='$_POST[start_date]',end_date='$_POST[end_date]' where tid= $_GET[id]";
    $query_run=mysqli_query($connection,$query);
    if($query_run){
        echo "<script type='text/javascript'>
        alert('Task edited successfully');
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
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <script
  src="https://code.jquery.com/jquery-3.6.4.js"
  integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
  crossorigin="anonymous"></script>
</head>
<body>
<div class="row">
    <div class="col-md-6">
    <h3> Edit the task</h3>
    <?php 
    include('../includes/connection.php');
    $query= "select * from tasks where tid=$_GET[id]";
    $query_run=mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($query_run)){
    ?>

   
        <form action="" method="post">
        <div class="form-group">
                <input type="hidden" name="id" class="form-control" value="" required>
            <div class="form-group">
                <label>Select User: </label>
                <select class="form-control" name="id" required>
                    <option>-Select-</option>
                    <?php
                      include('../includes/connection.php');
                      $query1="select uid,name from users";
                      $query_run1=mysqli_query($connection, $query1);
                      if(mysqli_num_rows($query_run1)){
                        
                        while($row1 = mysqli_fetch_assoc($query_run1)){
                            ?>
                            <option ><?php echo $row1['uid']; ?> <?php echo $row1['name']; ?></option>
                            <?php
                         }
                        }

                    ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Description: <?php echo $row['uid'];?></label>
                    <textarea class="form-control" rows="3" cols="50" name="description"> <?php echo $row['description'];?></textarea>
                </div>
                <div class="form-group">
                    <label>Start date:</label>
                    <input type="date" class="form-control" name="start_date" value="<?php echo $row['start_date'];?>" ></input>
                </div>
                <div class="form-group">
                    <label>End date:</label>
                    <input type="date" class="form-control" name="end_date" value="<?php echo $row['end_date'];?>" ></input>
                </div>
                <input type="submit" class="btn btn-primary" name="edit_task" value="Update" />


           </form>
           <?php
           }
           ?>
       </div>
 </div>
</body>
</html>