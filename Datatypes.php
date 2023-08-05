<?php 
{
	echo "This is An Example Of String ManiPluation.<br>";
	$a=10;
	echo var_dump($a)."<br>";
	$b="Rocky";
	echo var_dump($b)."<br>";
	$c=50.23;
	echo var_dump($c)."<br>";
	$d=array("20",30,34.55);
	echo var_dump($d)."<br>";
	$e=Null;
	echo var_dump($e)."<br>";
	$f=true;
	echo var_dump($f)."<br>";
	class xyz
	{ 
	   function show()
	     {
		echo "Below Is The Object<br>";
		}
	}
	$ditms=new xyz;
	$ditms->show();
	echo var_dump($ditms)."<br>";
	
}
?>