<?php
if(isset($_POST['submit'])){
echo "<h2>Your Input:</h2>";
echo $_POST["name"];
echo "<br>";
echo $_POST["email"];
echo "<br>";
echo $_POST["password"];
echo "<br>";
echo $_POST["confirm_password"];
echo "<br>";
// Upload image
$target_file="images/".$_FILES['fileToUpload']['name'];
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

    // Database credential
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "exam";
    
    // Create databse connection
    $conn = mysqli_connect($servername, $username, $password, $db);
    
     // Check connection
     if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
     }
     echo "Connected successfully";
    
    // Inserting data to mysql
    
     $sql = "INSERT INTO user (name, email, password, confirm_password,image) VALUES ('".$_POST['name']."','".$_POST['email']."', '". $_POST['password']."','". $_POST['confirm_password']."','".$target_file."')";
         echo "<br/>";
         echo $sql;
         echo "<br/>";
         if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
