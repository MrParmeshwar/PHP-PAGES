<?php
	echo "Program For Calculate Factorial of given number using recursion <br>";
	$a=5;
	function factorial($n) 
	{
    	       if ($n == 0) 
		{
        		       return 1;
 		}
 	       else
	 	{
        	   	       return $n * factorial($n - 1);
    		}
	}
echo "The factorial of $a is: " . factorial($a);
?>
