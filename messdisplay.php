<?php
 require 'includes/config.inc.php';
?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<table class="table table-bordered">
        <thead>
          <tr>
            <th>Student ID</th>
             <th>Order</th>
             <th>Time</th>
                                    
          </tr>
        </thead>
        <tbody>
        <?php 
                                   

           $query = "SELECT * FROM mess";
           $query_run = mysqli_query($conn, $query);

             if(mysqli_num_rows($query_run) > 0)
                                
			{
                foreach($query_run as $row)
                    {
                        ?>
                        <tr>
                        <td><?= $row['Student_id']; ?></td>
                        <td><?= $row['orders']; ?></td>
                        <td><?= $row['time_of_day']; ?></td>
                                               
                        </tr>
                        <?php
                            }
                             }
                                    else
                                    {
                                        ?>
                                            <tr>
                                                <td colspan="4">No Record Found</td>
                                            </tr>
                                        <?php
                                    }
                                ?>

                            </tbody>
                        </table>
