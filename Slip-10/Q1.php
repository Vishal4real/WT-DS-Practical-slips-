<?php
$a=$_POST['t1'];
$b=$_POST['t2'];

mod($a,$b);
power($a,$b);
sum($a);
fact($b);

function mod($a,$b)
{
	$c=$a%$b;
	echo "Mod of Number is: $c <br>";
}

function power($a,$b)
{
	$d=pow($a,$b);
	echo "Power of Number is: $d<br>";
}
function sum($a)
{
    $e=0;
	for($i=1;$i<=$a;$i++)
	{
		$e=$e+$i;
	}
	echo "Sum of first $a numbers is: $e<br>";
}

function fact($b)
{
	$f=1;
	for($i=$b;$i>=1;$i--)
	{
		$f=$f*$i;
	}
	echo "The factorial of Second $b numbers is: $f";

}