<?php

$flux_fts="xqappicaipxlziilzaexzzcpooqqqtzaapctqd210c";
$flux_fn="310735590400005295";
$lpURL="jess-rowe1";
$offerName="Hydra-Claire";
$offerImg="https://inc.s3.amazonaws.com/hydra-claire-comp.png";
$offerName2="";
$offerImg2="";
$pixel=isset($_GET['ccid']) ? $_GET['ccid'] : '1234';

$domain = $_SERVER['HTTP_HOST'];
//edit pop image url
$popImg = "https://s3.amazonaws.com/inc/pop1.jpg";
$baseUrl = "http://".$domain."/lpsource/".$lpURL."/";
$includePath = "/home/forge/".$domain."/lpsource/".$lpURL."/index_raw.php";
$ctaiFrameURL= "http://".$domain."/thank-you/atc_pix.php?"."pix=".$pixel;
$outURL = "http://".$domain."/thank-you/out.php";


?>