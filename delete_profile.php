<?php
session_start();

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
    
//     if (!isset($_SESSION['id'])) {
//         header("Location: login.php");
//         exit();
//     }
    
    $servername = "localhost";
    $username = "root";
    $db_password = "";
    $db = "exam";
    
    $conn = mysqli_connect($servername, $username, $db_password, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $sql = "DELETE FROM users WHERE id=$user_id";
        
        if ($conn->query($sql) === TRUE) {
            session_destroy();
            setcookie('id', '', time() - 3600);
            header("Location: register.php");
        } else {
            echo "Error deleting profile: " . $conn->error;
        }
    }
    
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Profile</title>
</head>
<body>
    <p>Are you sure you want to delete your profile?</p>
    <form action="" method="post">
        <input type="submit" value="Yes, Delete">
    </form>
</body>
</html>
