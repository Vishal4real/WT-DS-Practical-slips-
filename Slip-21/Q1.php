<?php
		$highTemps=array(68,70,72,58,60,79,82,73,75,77,73,58,63,79,78);
		$count=count($highTemps);
        $total=0;
        foreach($highTemps as $h){
            $total+=$h;
        }
        $avg=round($total/$count);
        echo"Average temperature is $avg\n";
		echo"high\n";
        rsort($highTemps);
        $top=array_slice($highTemps,0,5);
        foreach($top as $t){
            echo" $t";
        }
        echo"\nlow\n";
        sort($highTemps);
        $low=array_slice($highTemps,0,5);
        foreach($low as $l){
            echo" $l";
        }
	?>