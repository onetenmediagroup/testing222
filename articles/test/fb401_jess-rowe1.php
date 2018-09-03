<?php

$flux_fts="xqappicaipxlziilzaexzzcpooqqqtzaapctqd210c";
$flux_fn="310735590400005295";
$lpURL="jess-rowe1"; //folder name from the /lpsource
$offerName="Hydra-Claire"; //Display Link of the product in the page
$offerImg="https://inc.s3.amazonaws.com/hydra-claire-comp.png"; //image source of the offer image to display after the article content
$offerName2=""; //Not applicable in this LP
$offerImg2="";  //Not applicable in this LP
$pixel="1234"; //FB pixel ID called in $ctaiFrameURL and index_content.html

$domain = $_SERVER['HTTP_HOST'];
//edit pop image url
$popImg = "https://s3.amazonaws.com/inc/pop1.jpg"; //content for the exit pop image
$baseUrl = "http://".$domain."/lpsource/".$lpURL."/"; //base url for the landing page folder
$includePath = "/home/forge/".$domain."/lpsource/".$lpURL."/index_raw.php"; //source path of Landing Page
$ctaiFrameURL= "http://".$domain."/thank-you/atc_pix.php?"."pix=".$pixel;
$outURL = "http://".$domain."/thank-you/out.php";


?>