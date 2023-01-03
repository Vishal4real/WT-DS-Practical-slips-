<?php
    $number=array(1,2,3,4,5,6,7);
    print_r($number);
    echo"<br>";
    if(array_key_exists(3,$number)){
        echo"found";
    }
    else{
        echo"not found";
    }
?>