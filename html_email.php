<?php
$to = "sreyasideev@example.com, sreyasi209@example.com";
$subject = "HTML email";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>Sreyasi</td>
<td>Dev</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <sreyasi209@example.com>' . "\r\n";
$headers .= 'Cc: sreyasidev@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>
