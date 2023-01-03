<?php
    $str=$_POST['str'];
    $s=$_POST['sep'];
    $s_r=$_POST['sep_rc'];
    $op=$_POST['op'];

    switch ($op) {
        case '1':
            $str_arr= explode ($s, $str);
		    print_r($str_arr);
            break;
        case'2':
            echo str_replace($s_r,$s,$str);;
            break;
        case'3':
            $str5=strchr($str,' ');
		    echo "\n Last word from the given string ".$str5;
            break;
    }
?>