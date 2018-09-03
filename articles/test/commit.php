<?php 

header("Access-Control-Allow-Origin: *"); //Allows access from another domain

if(!empty($_POST)) {
	
	$funnel = $_POST['funnel'];
	$funnel_name = $funnel.'.php';

	$funnelDir = "../".$_POST['folder'];
	$funnel_scan = scandir($funnelDir);
	$funnelCheck = null;
	foreach($funnel_scan as $files => $file) {
		if($file == $funnel_name) {
			$funnelCheck = 1;
			$file = file($funnel_name); //read funnel file
		}
	}

	
	$final_string = '<?php'.PHP_EOL; //start of funnel file, PHP_EOL adds new line
	$gsValues = $_POST;


	#parse/read through current funnel file
	//foreach($file as $key => $line) {
	//	$val = explode("=", $line); //breaks each line of code into array 
	//	if(isset($val[1])) //end and start of code cannot be broken into 2 strings
	//		$values[$val[0]] = $val[1]; //array - format (array[VARIABLE_NAME] = VARIABLE_VALUE)
	//}

	foreach($gsValues as $val => $value) {
		$cleanVal = htmlspecialchars($value);
		switch ($val) {
			case "domain":
				$final_string .= '$'.$val.' = '.$cleanVal.';'.PHP_EOL;
				break;
			case "ctaiFrameURL":
				$final_string .= '$'.$val.' = "'.$cleanVal.';'.PHP_EOL;
				break;
			case "funnel":
				break;
			case "updomain":
				break;
			case "folder":
				break;
			default:
				$final_string .= '$'.$val.' = "'.$cleanVal.'";'.PHP_EOL;	
		}
	}

	#parse/read through prev array containing funnel's previous variables
	//foreach($values as $key => $value) {
	//	$keywodollar = str_replace(" ", "", str_replace("$", "", $key)); //strips dollar sign from variable name
	//	$post_string = htmlspecialchars_decode($_POST[$keywodollar]); //looks for updated values in $_POST
	//	$final_string .= $key.' = '.$post_string.';'.PHP_EOL; //assigns variables to new values - format (VARIABLE_NAME = NEW VARIABLE VALUE)

	//}
	
	$final_string .= '?>'; //end of php file

	if ($funnelCheck) {
		writeToFile($final_string, $funnel_name); //updates/writes to funnel file
		echo htmlspecialchars(urldecode($final_string)); //send written text back to front end server
	} else {
		echo "FILE NOT FOUND";
	}
	
}

#function to write to funnel file (takes parameters DATA: text to be written, FILE: funnel file)
function writeToFile($data, $file) {
	$contents = file($file);
	file_put_contents($file, urldecode($data)); 
}

?>