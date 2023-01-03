<?php
    $str=$_POST['str'];
    $wrd=$_POST['wrd'];
    $ch=$_POST['ch'];
    $num=3;

    switch ($ch) {
        case '1':
            $s=substr($str, 0, strpos($str,));
            echo $s;
            break;
        
        case '2':
            
            break;
        
        case '3':
            echo str_replace(substr($str,$num),$wrd,$str);
            break;
    }
?>