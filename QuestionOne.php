<?php

/* Write a function that prints the numbers from 1 to 100.
But for multiples of three print “Fizz” instead of the number 
and for the multiples of five print “Buzz”.
For numbers which are multiples of both three and five print “FizzBuzz”. */

$three = 3;
$five = 5;

for($i = 1; $i <= 100; $i++) {

	if ($i % $three == 0 && $i % $five == 0){
		echo("FizzBuzz" . "<br>");
	}

	elseif ($i % $three == 0) {
		echo("Fizz" . "<br>");
	}

	elseif ($i % $three == 0) {
		echo("FizzBuzz" . "<br>");
	}
	
	else {
		echo($i . "<br>");
	}
}
?>