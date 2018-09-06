<?php

$cookie_name = "CTAOut";
$cookie_value = "true";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day


//this is the text file, which will be stored in the same directory as this file, 
//count.txt needs to be CHMOD to 777, full privlledges, to read and write to it.
$myFile = "count.txt";

//open the txt file
$fh = @fopen($myFile, 'r');
$count = @fread($fh, 5);
@fclose($fh);

if(!isset($_COOKIE[$cookie_name])) {
	$count = $count + 1;
}



//write to the txt file.
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = $count;
fwrite($fh, $stringData);
fclose($fh);

//header("Location: http://otmftk.info/?flux_action=1");

header("Location: http://www.model-board-inside.com/6ERqT9NoctDhwbGqMonZI6bqCHLetdCBQR3S5KqgDvXrhBAERmLUMlyavr9XZlIOzDWTkT1YOXf5WVm4_yccvQ~~/{hit-id}//FB3401/");

?>