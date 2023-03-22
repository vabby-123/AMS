<?php
  session_start();
  include('includes/connection.php')
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
<body >
   <h3 class="text-center">Your tasks</h3>
   <table class="table table-striped" style="background-color:white;">
            <tr>
                <th>S.No</th>
                <th>Task ID</th>
                <th>Your User ID</th>
                <th>Description</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <?php
             $sno=1;
                $query ="select * from tasks where uid= $_SESSION[uid]";
                $query_run= mysqli_query($connection,$query);
                while ( $row= mysqli_fetch_assoc($query_run))
                {
                    ?>
                    <tr>
                       
                <td><?php echo $sno; ?></td>
                <td><?php echo $row['tid']; ?></td>
                <td><?php echo $row['uid']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['start_date']; ?></td>
                <td><?php echo $row['end_date']; ?></td>
                <td><?php echo $row['status']; ?></td>
                <td><a href="update_status.php?id=<?php echo $row['tid'];?>">Update</td>
             
            </tr>

            <?php
            $sno++;
                }
                

            ?>
    </table>
