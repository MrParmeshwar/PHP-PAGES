<?php 
	echo "Program  to demonstrate function using call by refrence <br>";
	$a=20;
	$b=40;
	function swap(&$x,&$y)
	{
	
	        $t=$x;
	        $x=$y;
	        $y=$t;
	echo "Inside A Function <br> ";
	echo "a= ".$x ."<br>";
	echo "b= ".$y ."<br>";
	}
	echo  "Outeside of function Before calling function <br>";
	echo "a= ".$a ."<br>";
	echo "b= ".$b ."<br>";
	swap($a,$b);
	echo "Outeside of function after calling function <br>";
	echo "a= ".$a ."<br>";
	echo "b= ".$b ."<br>";
?>