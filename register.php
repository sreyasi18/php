<?php
if (isset($_COOKIE['name'])) {
    header("Location: home.php");
}else{
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>

    <h2>User Registration</h2>
    <form action="process_registration.php" method="post" enctype="multipart/form-data">
    	
    	<a href="/logout.php">Logout</a>
		<br><br>
        <label>Name:</label>
        <input type="text" name="name" required>
        <br><br>
        <label>Password:</label>
        <input type="password" name="password" required>
        <br><br>
        <label>images:</label>
        <input type="file" name="fileToUpload" id="fileToUpload" required> 
        <br><br>
        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>


<?php 
} 
?>
 