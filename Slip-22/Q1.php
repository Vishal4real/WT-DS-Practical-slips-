<?php
		if($_SERVER['REQUEST_METHOD']==='POST')
		{
			$a=$_POST['op'];
			$b=array(1,2,3,4,5,6,7,8,9);
			switch($a)
			{
				case'4':
					print_r($b);
					array_unshift($b,45);
					echo"<br>";
					echo"After insert an element in queue:<br>";
					print_r($b);
				break;
				case'5':
					print_r($b);
					array_shift($b);
					echo"<br>";
					echo"After delete an element in queue:<br>";
					print_r($b);
				break;
				case'6':
				    print_r($b);
				break;
			}
		}
	?>