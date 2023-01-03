<?php

    $str1=$_POST['str1'];
    $str2=$_POST['str2'];
    $num=$_POST['num'];
    echo"frist string is: $str1<br>";
    echo"Second string is: $str2<br>";

    if($str1<$str2)
        echo"Small string appears at start of large string<br><br>";
    else
        echo"Small string does not appears at start of large string<br><br>";

    $val=strpos($str2,$str1);
    if($val===false)
        echo"Small string is NOT in Large string.<br><br>";
    else
        echo"Small string found at position $valinLargestring.<br><br>";

    $cv=strcasecmp(substr($str1,0,$num),substr($str2,0,$num));
    if($cv==0)
        echo"Both strings are same for first $num characters.<br><br>";
    else
        echo"Both strings are not same for first $num characters.<br><br>";
    
?>