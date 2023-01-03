<?php

$maths=$_POST['maths'];
$english=$_POST["english"];
$marathi=$_POST["marathi"];
$hindi=$_POST["hindi"];
$history=$_POST["history"];
$total=$marathi+$english+$marathi+$hindi+$history;
$percent=$total/5;

function getgrade($percent){
if($percent<40)
return"F";
elseif($percent<60)
return"B";
elseif($percent<75)
return"A";
else
return"O";
}

$grade = getgrade($percent);
echo<<< DD
<table border="1">
<tr>
<th rowspan="1">Total</th>
<th rowspan="1">Percent</th>
<th rowspan="1">Grade</th>
</tr>
<tr>
<td>{$total}</td>
<td>{$percent}</td>
<td>{$grade}</td>
</tr>
</table>
DD;

?>