<?php
/*Simplex internet  PH Developer team 
	 Project: zero byte checker
	 Author: Ramil T. Angeles
	 Date: 11-16-2015
	 filename: upload.php
*/

function check_zerobyte_file($file){

	if(@preg_match("/(\||%00|system\(|eval\(|`|\\)/i", $file['file'])) {     /////Check File Array if contains null byte char and injection code.
			echo "A match was found. <br>";
			echo "Error zero byte file..";
	} 
	else if($file['file']['size']<= 0){						///////Check actual file size if 0.
			echo "A match was found. <br>";
			echo "Error zero byte file..";
		
	}else{
		echo "Passed your file size is " . $file['file']['size'];
	}
			
}


if(isset($_POST['submit'])){
	check_zerobyte_file($_FILES);	////////call function check_zerobyte_file
}else{
echo "
	Note This checker Program Only Checks for Nullbyte character and actual file size <br>

	
	<form method='POST' enctype='multipart/form-data' action='upload.php'>
		File: <input type='file' name='file'>
		<input type='submit' name='submit'>
	</form>	
";
}

?>
