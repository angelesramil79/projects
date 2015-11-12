<?php

/*Simplex internet  PH Developer team 
	 Project: Count the number of '8' in the range from 1 to 10,000. (ex. 8831 => 2, 8888 => 4)
	 Author: Ramil T. Angeles
	 Date: 11-11-2015
	 filename: phptest2.php
*/



function count_num($from, $to ){									//create function for counting the numbers.

		 foreach (range($from,$to) as $number) {   					// loop range fronm 1 to 10000;
			$arr_num[$number] =  substr_count("$number", '8'); 		//created $arr_num array with index value from $number
																	// array value is substr_count(string, 8);		
		 } 
		 
		 return $arr_num;											

}

		$results = count_num(1,10000); //call function count_num and pass a parameter range 1 to 10000
		$total = array_sum($results);
				
		echo "Total number of 8 range 1 to 10000 are: " . $total . "<br>" ; 



?>
