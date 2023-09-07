<?php
echo ("Program For Display Current Date And Current indian Time.<br>");
	echo ("Timezone : ");
	date_default_timezone_set("Asia/kolkata");
	echo date_default_timezone_get()."<br>";
	echo date("d/m/y l h:i:s a")."<br>";
?>