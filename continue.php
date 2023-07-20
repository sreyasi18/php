<?php
    $arr=array(6,5,8,10,2,3);
    foreach($arr as $value){
       
        
        if($value==8 || $value==10){
            continue;
        }
        echo $value . "<br>";
    }
    ?>