<?php
include("show_list.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Display</title>
    <!-- Add necessary CSS links here -->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-8">

            <div class="table-responsive">
                <table class="table table-bordered" border = "1">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Password</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    	<td>name</td><td>password</td>	
                    </tr>
                    <?php
                    if (is_array($fetchData)) {
                          foreach ($fetchData as $data) {
                              echo '<tr>';
                             
                              echo '<td>' . $data['id'] . '</td>';
                              echo '<td>' . $data['name'] . '</td>';
                              echo '<td>' . $data['password'] . '</td>';
                             
                          }
                      } else {
                          echo '<tr><td colspan="3">No data available</td></tr>';
                      } 
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>


</div>
</div>
</body>
</html>