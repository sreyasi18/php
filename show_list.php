<!DOCTYPE html>
<html>
<head>
    <title>User Data</title>
   
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$db_password = "";
$db = "exam";

// Create connection
$conn = mysqli_connect($servername, $username, $db_password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, password,images FROM users";
$result = $conn->query($sql);
?>
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
                        <th>Image</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                   
<?php 
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["id"] . '</td>';
        echo '<td>' . $row["name"] . '</td>';
        echo '<td>' . $row["password"] . '</td>';
        
//         echo "<pre>";
//         print_r($_FILES);
        // Display the image
        echo '<td ><img src="'.$row['images'].'" width="50" height="60"></td>';
//        $target_file="images/".$_FILES['fileToUpload']['name'];
//        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        
        echo '<td><a href="user_update.php?id=' . $row["id"] . '">Edit ' . $row["id"] . '</a></td>';
        
        
         if (isset($_GET['id'])) {
            // Process the edit action for the user with the provided ID
            
            // After processing the edit, redirect to another page
             header("Location: user_update.php");
             exit(); // Make sure to exit to prevent further script execution
         }
        
        echo '</tr>';
    }
} else {
    echo '<tr><td colspan="4">0 results</td></tr>';
}
$conn->close();
?> </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>