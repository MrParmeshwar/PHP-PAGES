<?php

echo ("Program For Display Date And Time From The Number <br> Of Parameter  Even Through mktime function.<br>");
	$a=mktime(5,10,10,9,23,2001);
	echo date("d/m/y l h:i:s a",$a)."<br>";
	echo date("d/m/Y l h:i:s a",$a)."<br>";
?>