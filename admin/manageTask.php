<html>
        <body>
        <h3>All assigned tasks</h3>
        <table class="table  table-striped"  style="background-color:white;">
            <tr>
                <th>S.No</th>
                <th>Task ID</th>
                <th>Assigned User ID</th>
                <th>Description</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <?php
            include('../includes/connection.php');
            $sno=1;
            $query="select * from tasks";
            $query_run=mysqli_query($connection,$query);
            while ($row=mysqli_fetch_assoc($query_run)){
                ?>
                <tr>
                <td><?php echo $sno; ?></td>
                <td><?php echo $row['tid']; ?></td>
                <td><?php echo $row['uid']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['start_date']; ?></td>
                <td><?php echo $row['end_date']; ?></td>
                <td><?php echo $row['status']; ?></td>
                <td><a href="edit_task.php?id=<?php echo $row['tid']; ?>">Edit</a>|<a href="delete_task.php?id=<?php echo $row['tid']; ?>">Delete</a></td>
            </tr>
              <?php
              $sno++;
            }
        
        ?>



        </table>
</body>
</html>


         