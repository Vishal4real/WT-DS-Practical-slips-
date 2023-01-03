<?php
$name=array("Sagar"=>"31", "Vicky"=>"41", "Leena"=>"39", "Ramesh"=>"40");
echo"Array is:<br>";
print_r($name);
echo"<br><br>";

asort($name);
echo"<br>value accending array:<br>";
print_r($name);
echo"<br><br>";

arsort($name);
echo"<br>value deccending array:<br>";
print_r($name);
echo"<br><br>";

ksort($name);
echo"<br>Key accending array:<br>";
print_r($name);
echo"<br><br>";

krsort($name);
echo"<br>key accending array:<br>";
print_r($name);

?>