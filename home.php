<?php
if (isset($_COOKIE['name'])) {
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
</head>
<body>
 <?php  

    $name = $_COOKIE['name'];
    echo "<h2>Welcome, $name!</h2>";
//     echo "<img src='fileToUpload/$images' alt='images'>";
   

?>
<a href="logout.php">Logout</a>
		<br><br>
</body>
</html>
<?php 
} else{
    header("Location: login.php");
} 

?>
