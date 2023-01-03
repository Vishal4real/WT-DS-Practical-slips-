<?php
	
	$a=$_POST['op'];
	$b=array(1,2,3,4,5,6,7,8,9);
	switch($a)
	{
		case 1:
			print_r($b);
			$rv=array_reverse($b);
			echo"<br>";
			echo"Reverse Order Of elements:<br>";
			print_r($rv);
		break;
		case 2:
			print_r($b);
			shuffle($b);
			echo"<br>";
			echo"Traversed Elements of an array:<br>";
			print_r($b);
		break;
		case 3:
			print_r($b);
			list($A,$B,$C,$D,$E,$F,$G,$H,$I)=$b;
			echo"<br>";
			echo"Convert Array Elements Into Variables.<br>";
            echo"$A ";
            echo"$B ";
            echo"$C ";
            echo"$D ";
            echo"$E ";
            echo"$F ";
            echo"$G ";
            echo"$H ";
            echo"$I ";
		break;
		case 4:
			print_r($b);
			echo"<br>";
			echo"Array Elements With Key:<br>";
			print_r($b);
		break;
	}

?>