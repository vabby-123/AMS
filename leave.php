<?php
session_start();
include('includes/connection.php');
if(isset($_POST['apply_leave']))
{
    $query="insert into leaves values(null, '$_SESSION[uid]','$_SESSION[name]','$_POST[description]','$_POST[from_date]','$_POST[end_date]','Pending')";
    $query_run=mysqli_query($connection,$query);

if($query_run){
        echo "<script type='text/javascript'>
        alert('Leave applied successfully');
        window.location.href='leave.php';
        </script>";
        

    }
    else{

        echo "<script type='text/javascript'>
        alert('Error..Please try again');
        window.location.href='leave.php';
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
    <title>Apply for Leave</title>
</head>
<body>
    <h3>Apply for Leave</h3>
    <div class="row">
        <div class="col-md-6">
            <form action="" method="post">
            <div class="form-group">
                    <label>Description:</label>
                    <textarea class="form-control" rows="3" cols="50" name="description" placeholder="Mention the task"></textarea>
            </div>
            <div class="form-group">
                    <label>from date:</label>
                    <input type="date" class="form-control" name="from_date" ></input>
                </div>
                <div class="form-group">
                    <label>To date:</label>
                    <input type="date" class="form-control" name="end_date" ></input>
                </div>
                <input type="submit" class="btn btn-primary" name="apply_leave" value="Apply" />

        
          </form>


        </div>

</div>
</body>
</html>