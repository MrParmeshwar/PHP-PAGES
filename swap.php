<?php 
	echo "program  to demonstrate function using call by value <br>";
	$a=20;
	$b=40;
	function swap($x,$y)
	{
	
	        $t=$x;
	        $x=$y;
	        $y=$t;
	echo "Inside A Function <br> ";
	echo "a= ".$x ."<br>";
	echo "b= ".$y ."<br>";
	}
	echo  "Outeside function Before calling function <br>";
	echo "a= ".$a ."<br>";
	echo "b= ".$b ."<br>";
	swap($a,$b);
	echo "Outeside of function after calling function <br>";
	echo "a= ".$a ."<br>";
	echo "b= ".$b ."<br>";
?>