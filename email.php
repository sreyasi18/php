<?php
$to = "sreyasidev@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From:sreyasi209@gmail.com" . "\r\n" .
    "CC: sreyasi209@gmail.com";


ini_set('SMTP','smtp.gmail.com');
ini_set('smtp_port',25);

// ini_set("SMTP","ssl://smtp.gmail.com");
// ini_set("smtp_port","465");

mail($to,$subject,$txt,$headers);
?>