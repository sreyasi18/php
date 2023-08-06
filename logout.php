<?php

unset($_COOKIE['name']);
// setcookie('name', '', -1, '/');
setcookie("name", "", time()-3600);


// header("Location: login.php");
header("Location: login.php");
?>
