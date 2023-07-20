
   <form  action="submit.php" method="post" enctype="multipart/form-data">
        Name:<input type="text" name="name">
        <br><br>; 
        Gender:
            <input type="radio" name="gender" value="female">Female;
            <input type="radio" name="gender" value="male">Male;
            <input type="radio" name="gender" value="other">Other;
            <br><br>
        <label for="city">city:</label>
            <select name="city" id="city">
            	<option value="">--- Choose a city ---</option>
            	<option value="barasat">barasat</option>
            	<option value="madhyamgram">madhyamgram</option>
            	<option value="hridaypur">hridaypur</option>
            </select>
        
        <h3>image</h3>
        <input type="file" name="fileToUpload" id="fileToUpload">
        
        <input type="submit" name="submit" value="Submit">  
    </form>
    
 
  

