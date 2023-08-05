<?php
	$a="Hello";
	$length=strlen($a);
	echo "String Length Is : ".$length."<br>";
	
	$b="I Am A Student Of Ditms";
	$word=str_word_count($b);
	echo "Words Of String Is : ".$word ."<br>";

	$c="I Am From Chatrapati Sahbhajinagar";
	$pos=strpos($c,"Sahbhajinagar");
	echo "Position Of String Is : ".$pos ."<br>";

	$d="I Am A Student Of BCA";
	echo str_replace ("BCA","BCS","I Am A Student Of BCA");
?>