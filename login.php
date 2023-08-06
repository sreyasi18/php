<?php
if (isset($_COOKIE['name'])) {
    header("Location: home.php");
}else{
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
</head>
<body>
    <h2>User Login</h2>
    <form action="process_login.php" method="post">
    	<a href="/logout.php">Logout</a>
		<br><br>
        <label>Name:</label>
        <input type="text" name="name" required>
        <br><br>
        <label>Password:</label>
        <input type="password" name="password" required>
        <br><br>
        <input type="submit" name="submit" value="Login" required>
    </form>
</body>
</html>
<?php 
}
?>
 