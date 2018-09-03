<?php 
header("Access-Control-Allow-Origin: *");
// var_dump($_POST);
if(!empty($_POST)) {
	$funnel = $_POST['funnel'];
	$funnel_name = $funnel.'.php';
	$file = file($funnel_name);
	$final_string = '<?php'.PHP_EOL;

	foreach($file as $key => $line) {
		$val = explode("=", $line);
		if(isset($val[1]))
			$values[$val[0]] = $val[1];
	}

	foreach($values as $key => $value) {
		$keywodollar = str_replace(" ", "", str_replace("$", "", $key));
		$post_string = htmlspecialchars_decode($_POST[$keywodollar]);
		$final_string .= $key.' = '.$post_string.';'.PHP_EOL;
		// echo $final_string;
	}
	$final_string .= '?>';
	writeToFile($final_string, $funnel_name);
	echo htmlspecialchars(urldecode($final_string));

	// writeToFile($final_string, $funnel_name);
}
function writeToFile($data, $file) {
	$contents = file($file);
	file_put_contents($file, urldecode($data)); 
}

?>