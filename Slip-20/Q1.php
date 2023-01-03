<?php
    $choice=$_POST['ch'];

    $arr=array('k'=>1,'b'=>2,'d'=>3,'r'=>4);

    switch($choice){
        case 1:
            $sarr=array_chunk($arr,2);
            print_r($sarr);
        break;
        case 2:
            asort($arr);
            echo"<br>Accending<br>";
            print_r($arr);
            arsort($arr);
            echo"<br>Deccending<br>";
            print_r($arr);
        break;
        case 3:
            foreach($arr as $value){
                if($value%2!=0)
                print($value);
            }
        break;
    }
?>