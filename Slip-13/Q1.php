<!DOCTYPE html>
<html lang="en">
<body>
	<table border=1 cellpadding=20 cellspacing=0>
		<?php
		$value=0;

		for($col=0;$col<8;$col++){
			echo"<tr>";
			$value=$col;
			for($row=0;$row<8;$row++){
				if($value%2==0){
					echo"<td hight=40px width=20px bgcolor='white'>";
					$value++;
				}
				else{
					echo"<td hight=40px width=20px bgcolor='black'>";
					$value++;
				}
			}
			echo"</tr>";
		}

		?>
	</table>
	
</body>
</html>