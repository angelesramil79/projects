<?php 
/*Simplex internet  PH Developer team
Project: Replace the tabs in file PhpTest.txt with 4 space and save it as file Output.txt.
Author: Ramil T. Angeles
Date: 11-11-2015
filename: phptest1.php
*/
	
	$a = file_get_contents("Phptest.txt");   	// Get the contents of the file "Phptest.txt".
	$text = preg_replace("/\t/", "    ", $a);	// Funtction to replace tabs to 4 for spaces.
	$file = fopen("Output.txt","w");			// Open file Output.txt;
	fwrite($file,$text);						// Write to a file.
	fclose($file);								// Close file.
	
?>