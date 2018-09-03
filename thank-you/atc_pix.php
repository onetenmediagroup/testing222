<?php header('P3P:policyref="https://googleads.g.doubleclick.net/pagead/gcn_p3p_.xml", CP="CURa ADMa DEVa TAIo PSAo PSDo OUR IND UNI PUR INT DEM STA PRE COM NAV OTC NOI DSP COR"'); ?> <!DOCTYPE html> 
<?php
$pix = isset($_GET['pix']) ? $_GET['pix'] : 0;

?>

<html> <head> 
<meta name="referrer" content="no-referrer" /> 
</head> 

<body> 
	<img height="1" width="1" style="display:none" src="//www.facebook.com/tr?id=<?php echo $pix; ?>&ev=PageView&noscript=1" /> 
	<img height="1" width="1" style="display:none" src="//www.facebook.com/tr?id=<?php echo $pix; ?>&ev=AddToCart&noscript=1" /> 

	<title>Thank You!</title> 
	<h2>ATC</h2>
</body> 

</html>