<?php

DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_USER', 'forge');
DEFINE ('DB_PSWD', 'b18rT7uiUWxutU5G2OMZ');
DEFINE ('DB_NAME', 'testphp');

$sql_connect = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME);
if (!$sql_connect) {
	die('Cannot Connect To DATABASE!');
} else {echo 'Database connection successful';}
?>