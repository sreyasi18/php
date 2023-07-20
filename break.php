<?php
$arr=array(6,5,8,10,2,3);
foreach($arr as $value){
    echo $value . "<br>";
    if($value==8){
        break;
    }
   
}
?>