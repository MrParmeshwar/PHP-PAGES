<?php
echo ("Program For create date and time Using string to time function.<br><br>");

echo ("Case 1: From The Human Readable String Which Having Date Tyep.<br>");
$d1=strtotime("july 04",);
echo ("Result : ");
echo date("d-m-Y h:i:s a" , $d1)."<br>";

$d1=strtotime("sept 19",);
echo ("Result : ");
echo date("d-m-Y h:i:s a" , $d1)."<br>";


echo ("<br>");
echo ("Case 2: Today ,Tomorrow And Yesterday Using String.<br>");
$d1=strtotime("yesterday");
echo ("Yesterday : ");
echo date("d-m-Y h:i:s a" , $d1)."<br>";

$d2=strtotime("Today");
echo ("Today : ");
echo date("d-m-Y h:i:s a" , $d2)."<br>";

$d=strtotime("tomorrow");
echo ("Tomorrow : ");
echo date("d-m-Y h:i:s a",$d)."<br>";
echo ("<br>");

echo ("Case 3: By Passig Day Of The Weak.<br>");
$d=strtotime("Monday");
echo ("Monday : ");
echo date("d-m-Y h:i:s a",$d)."<br>";

$d=strtotime("Friday");
echo ("Friday : ");
echo date("d-m-Y h:i:s a",$d)."<br>";
echo ("<br>");

echo ("Case 4: Display The Dates For , After 3 Months And Before 3 Months From Today.<br>");
$d=strtotime("+3 Months",$d);
echo ("Date After 3 Months : ");
echo date("d-m-Y h:i:s a",$d)."<br>";

$d1=strtotime("-3 Months",$d1);
echo ("Date Before 3 Months:  ");
echo date("d-m-Y h:i:s a",$d1)."<br>";


?>