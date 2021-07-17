<?php

/* Given a possibly very long string (which could be from 1 to MAX_INT).
Write a function that returns the word with highest frequency together with the total count of that word. */

function countOccurrences($str) 
{
	// count word occurrences
	$HFword = array_count_values(explode(' ', $str));
	
	// sort associative arrays in descending order, according to the value
	arsort($HFword);

	// Post processing for output
	return  key($HFword) . " => " . array_values($HFword)[0];
}
  
$str = "I am assuming you need long string. Let make assuming is most occured word that";

print_r(countOccurrences($str));
?>