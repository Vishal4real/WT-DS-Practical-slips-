<?php
    $str=$_POST['str'];
    $choice=$_POST['ra'];

   switch ($choice) {
    case '1':
        $count=strlen($str);
        $wt=0;
        for($i=0;$i<$count;$i++){
            echo $str[$i];
            if($str[$i]==" "){
                $wt++;
            }
            if($wt==5){
                break;
            }
        }
        break;
    case '2':
        echo strtolower($str);
        echo "<br>";
        echo strtoupper($str);
        break;
    case '3':
        echo str_pad($str,20,"â€œ*â€",STR_PAD_BOTH);
        break;    
    case '4':
        echo rtrim($str);
        break;
    case '5':
        echo strrev($str);
        break;
   }
?>