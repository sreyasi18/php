
<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    
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
    echo "<br>";
    
   $sql = "SELECT * FROM users WHERE name='$name' AND password='$password'";
    $result = $conn->query($sql);
    
    if ($result->num_rows >0) {
        $users = $result->fetch_assoc();
    //  if (password_verify($password, $users['password'])) {
   //         Login successful
//           Store user data in cookies for 2 days
            setcookie('name', $users['name'], time() + (2 * 24 * 3600));
            header("Location: home.php");
            exit();
        } else {
            echo "Invalid password";
        }
    } else {
        echo "User found";
    }
    
    $conn->close();

?>
