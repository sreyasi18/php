<?php
if(isset($_POST['submit'])){
    
    
    print_r($_POST);
    
    
    
echo "<h2>Your Input:</h2>";
echo $_POST["name"];
echo "<br>";
echo $_POST["password"];
echo "<br>";
$newName=$_POST['name'];
$newPassword=$_POST['password'];
$userId=$_POST['id'];
echo "=========".$userId;
// Upload image
$target_file="images/".$_FILES['fileToUpload']['name'];
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

    // Database credential
    $servername = "localhost";
    $username = "root";
    $db_password = "";
    $db = "exam";
    
    // Create databse connection
    $conn = mysqli_connect($servername, $username, $db_password, $db);
    
     // Check connection
     if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
     }
     echo "Connected successfully";
    
    // Inserting data to mysql
    
     $sql = "UPDATE users SET name='".$newName ."',password='".$newPassword."' WHERE id='".$userId."'";
     
     echo $sql;
     
     if ($conn->query($sql) === TRUE) {
         echo "<br>";
         echo "User information updated successfully.";
         // You can also redirect the user to another page if needed
     } else {
         echo "Error updating user information: " . $conn->error;
     }
     
     // Close the database connection
     $conn->close();
}

 