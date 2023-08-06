<?php
if(isset($_POST['submit'])){
echo "<h2>Your Input:</h2>";
echo $_POST["name"];
echo "<br>";
echo $_POST["password"];
echo "<br>";

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
    
     $sql = "INSERT INTO users (name, password, images) VALUES ('".$_POST['name']."', '". $_POST['password']."','".$target_file."')";
    if ($conn->query($sql) === TRUE) {
         echo "<br/>";
         header("Location: login.php");
         exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>

 