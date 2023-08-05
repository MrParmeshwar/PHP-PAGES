<?php

	$a1=1;
	$b1=1;
	$c1=5;
	$a2=1;
	$b2=-1;
	$c2=3;
	$d=($a1*$b2)-($b1*$a2);
	echo "The Value Of D Is ".$d;
	$dx=($c1*$b2)-($c2*$b1);
	echo "<br>The Value Of Dx Is  " .$dx;
	$dy=($a1*$c2)-($a2*$c1);
	echo "<br> The Value Of Dy Is " .$dy;
	$x=($dx/$d);
	echo "<br>x= ".$x;
	$y=($dy/$d);
	echo " y= ".$y;
?>