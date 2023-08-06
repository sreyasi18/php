<?php
if (isset($_GET['id']) ) {
     $user_id = $_GET['id'];
//      $row = ($_GET['name']);
    
   
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
    
     

$sql="SELECT * FROM users Where id=$user_id";
$result = $conn->query($sql); // Execute the mysql query
if ($result->num_rows > 0) { // Check is there any rows
    $row = $result->fetch_assoc();
//     echo "<pre>";
//     print_r($row);0p
?>
<!DOCTYPE html>
<html>
<head>
<title>User update</title>
</head>
<body>

<h2>User update</h2>

<form action="process_user_update.php" method="post" enctype="multipart/form-data">
	
	<input type="hidden" name="id" value="<?php echo $user_id;?>">
	<br><br>
    <label>Name:</label>
    <input type="text" name="name" value="<?php echo $row['name'];?>" />
    <br><br>
    <label>Password:</label>
    <input type="password" name="password" required value="<?php echo $row['password'];?>">
    <br><br>
    <label>Images:</label>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <img src="<?php echo $row['images'];?>" width="40" height = "40">
    <br><br>
  
    <input type="submit" name="submit" value="Update">
</form>form>

</body>
</html>
<?php
    }
 }
 ?>