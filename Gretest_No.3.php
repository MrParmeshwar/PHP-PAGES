<?php
$a = 10;
$b = 50;
$c = 30;

$greatest = ($a > $b) ? ($a > $c ? $a : $c) : ($b > $c ? $b : $c);

echo "The greatest number is: " . $greatest;
?>
