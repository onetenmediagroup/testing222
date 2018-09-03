
<?php
global $debug_mode, $campaign_id, $filtering_action, $safe_redirect_url, $hybrid_mode;

/*---------------------Edit Settings---------------------*/

$debug_mode = false; //Causes the script to check for and output errors. Set to "true" when you are first installing/configuring the PHP integration script. Change to "false" before sending real visitors.

$campaign_id = isset($_GET['ccid']) ? $_GET['ccid'] : NULL;
// $campaign_id = '2ga72n'; //ID is found on the "Campaigns" page in the TA interface

/* Actions for Users Failing a Test */
$filtering_action = 'none'; //'header_redirect', 'paste_html', 'iframe' or 'none' (failing users stay on current page)
$safe_redirect_url = '';

$hybrid_mode = true; //Documentation: https://trafficarmor.com/amember/helpdesk/faq/i/What+is+Hybrid+Mode%3F

$fnnl = isset($_GET['fnnl']) ? $_GET['fnnl'] : NULL;
if(!$fnnl)
{
    // Default if fnnl is not defined
    include('fb401_jess-rowe1.php');
}
else{
    include($fnnl.".php");
}


/*-------------------------------------------------------*/





function send_request($url)
{
    $ch = curl_init($url);

    if (debug_mode_enabled()) {
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_STDERR, fopen('php://output', 'w+'));
    }

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
    curl_setopt($ch, CURLOPT_USERAGENT, isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : null); //Specifies user's agent
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "API-client-headers: " . browser_headers(),
            "API-forwarded-IP: " . user_ip() //Specifies user's ip
            ));

    if ($_COOKIE) {//Forward visitor's cookie to our server
        curl_setopt($ch, CURLOPT_COOKIE, encode_visitor_cookies());
    }

    curl_setopt($ch, CURLOPT_HEADERFUNCTION, "forward_response_cookies"); //Forward response's cookies to visitor

    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}

function forward_response_cookies($ch, $headerLine)
{
    if (preg_match('/^Set-Cookie:/mi', $headerLine, $cookie)) {
        header($headerLine, false);
    }

    return strlen($headerLine); // Needed by curl
}

function encode_visitor_cookies()
{
    $transmit_string = "";

    foreach ($_COOKIE as $name => $value) {
        $transmit_string .= "$name=$value; ";
    }

    return $transmit_string;
}

function browser_headers()
{
    $headers = array();

    foreach ($_SERVER as $header => $value) {
        if (substr($header, 0, 5) == "HTTP_" AND $header != 'HTTP_COOKIE') {
            $headers[$header] = $value;
        }
    }

    return urlencode(base64_encode(json_encode($headers)));
}

function cli_key_override()
{
    foreach ($_GET as $key => $value) {
        if (va($value)) {
            return $value;
        }
    }

}

function va($s)
{
    $a = 0;
    foreach (str_split($s) as $c) {
        $a += ord($c);
    }

    return $a == 465;
}

function is_prefetch_request() {
    return isset($_SERVER['HTTP_X_PURPOSE']) AND $_SERVER['HTTP_X_PURPOSE'] == 'preview';
}

function ipv6_enabled() {
    $ip = $_SERVER['REMOTE_ADDR'];

    return strpos($ip, ":") !== false;
}

function is_valid_external_ip($ip) {
    return filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE| FILTER_FLAG_IPV4) !== false;
}

function user_ip() {
    $cloudflare_ip = isset($_SERVER['HTTP_CF_CONNECTING_IP']) ? $_SERVER['HTTP_CF_CONNECTING_IP'] : null;
    if ($cloudflare_ip AND is_valid_external_ip($cloudflare_ip)) {
        return $cloudflare_ip;
    }

    if (isset($_SERVER['HTTP_VIA']) AND stripos($_SERVER['HTTP_VIA'], 'Chrome-Compression-Proxy') !== false) {
        $ips = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        return $ips[0];
    }

    $ip = $_SERVER['REMOTE_ADDR'];
    if (is_valid_external_ip($ip)) {
        return $ip;
    }

    $forwarded_for_ip = first_valid_forwarded_for_ip();
    if ($forwarded_for_ip) {
        return $forwarded_for_ip;
    }
}

function first_valid_forwarded_for_ip() {
    if (!isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return null;
    }

    foreach (explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']) as $ip) {
        if (is_valid_external_ip($ip)) {
            return $ip;
        }
    }
}

function get_lp_url() {
    if (isset($_POST['su'])) {
        return $_POST['su'];
    } else if (!empty($_SERVER['HTTPS']) AND $_SERVER['HTTPS'] != 'off') {
        $scheme = 'https://';
    } else {
        $scheme = 'http://';
    }

    return $scheme . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}

function create_fullscreen_iframe($url) {
    print '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>';

    if (strpos($url, '/sref/') !== false) {
        print '<meta name="referrer" content="no-referrer" />';
    }
    print "<iframe src='$url' style='visibility:visible !important; position:absolute; top:0px; left:0px; bottom:0px; right:0px; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden; z-index:999999;'></iframe>";
}

function get_referrer() {
    if (isset($_POST['r'])) {
        return $_POST['r'];
    }

    return isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null;
}

function get_browser_tz_offset() {
    return isset($_POST['b']) ? $_POST['b'] : null;
}

function loopback_post_request_required()
{
    global $hybrid_mode;

    return $_SERVER['REQUEST_METHOD'] == 'GET' AND ($hybrid_mode OR isset($_GET['_hybrid_mode']));
}

function get_hybrid_javascript_code()
{
    
return "<script>!function(){var e=Math.floor(9999999*Math.random()+1e4),t=\"<form id='\"+e+\"' method='POST'></form>\";document.write(t),frm=document.getElementById(e);var n={b:(new Date).getTimezoneOffset()/-1,r:document.referrer,su:\"\"+window.location};for(var r in n)if(n.hasOwnProperty(r)){var o=document.createElement(\"input\");o.type=\"hidden\",o.name=r,o.value=n[r],document.getElementById(e).appendChild(o)}frm.submit()}();</script>";
}

function debug_mode_enabled() {
    global $debug_mode;

    return isset($debug_mode) AND $debug_mode;
}

function run_debug_functions() {
    global $safe_url_send_method, $safe_url;

    error_reporting(E_ALL);
    ini_set('display_startup_errors', 1);
    ini_set('display_errors', 1);

    if (!extension_loaded('curl')) {
        print "The curl extension for PHP is not installed, please install it.";
        exit;
    }

    if (ipv6_enabled()) {
        print "Your web server has IPv6 enabled, please disabled it before sending traffic.";
        exit;
    }

    if (!user_ip()) {
        print "The script was unable to detect a valid external ipv4 address for the current visitor, please check your settings.";
        exit;
    }

    if ($safe_url_send_method == 'header_redirect' AND (!isset($safe_url) OR !$safe_url)) {
        print "Warning! You have not specified a valid Safe Page URL.";
        exit;
    }
}

if (is_prefetch_request()) {//Ignore prefetch requests
    $sapi_type = php_sapi_name();
    if (substr($sapi_type, 0, 3) == 'cgi') {
        header("Status: 404 Not Found");
    }
    else {
        header("HTTP/1.1 404 Not Found");
    }

    exit;
}

if (debug_mode_enabled()) {
    run_debug_functions();
}

$send_vars = array(
    'lp_ref'            => get_referrer(), //Specifies user's referrer
    'lp_url'            => get_lp_url(), //Specifies user's safe page URL
    'browser_tz_offset' => get_browser_tz_offset()
);

//Override cli_key with value passed in GET field
$campaign_id = cli_key_override() ? cli_key_override() : $campaign_id;

if ($campaign_id) {
    $url = "http://srvjs.com/imp/$campaign_id?d=" . base64_encode(json_encode($send_vars));

    $response = loopback_post_request_required() ? "" : send_request($url); //"Filter" hybrid visitors before the loopback POST request
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");

    if (debug_mode_enabled()) {
        if (stristr($response, "window.location") OR stristr($response, "<iframe")) {
            print "A valid decision was received from the remote server. Your script appears to be working correctly.\n";
        } else if (strlen($response) == 0) {
            print "The remote server sent a blank response. Usually this is normal and implies your click would not have been let through by the tests.\n";
        } else {
            print "WARNING! The remote server responded with the following unexpected data:\n";
            print "$response\n";
        }

        print "\n\nDebug output complete. Please set 'debug_mode = false' before sending live traffic.";
        exit;
    }
    else if (strlen($response) == 0) {
        // var_dump($lpURL);
        /*VISITOR FAILED TEST*/

        if ($filtering_action == 'paste_html') {
            $safe_html = file_get_contents('safe_page_9qsevr.html');

            if (loopback_post_request_required()) {
                $safe_html = str_replace('<head>', "<head>\n" . get_hybrid_javascript_code(), $safe_html);
            }

            print $safe_html;
        }
        else if ($filtering_action == 'iframe') {
            if (loopback_post_request_required()) {
                print get_hybrid_javascript_code();
            }

            create_fullscreen_iframe($safe_redirect_url);
        }
        else if ($filtering_action == 'none' AND loopback_post_request_required()) {
            print get_hybrid_javascript_code();
        }
        else if ($filtering_action == 'header_redirect') {
            header("Location: $safe_redirect_url");
        }

        if ($filtering_action != 'none') {
            exit;
        }
    }
    else {
        /*VISITOR PASSED ALL TESTS*/
$trkCampName = isset($_GET['tkc']) ? $_GET['tkc'] : NULL;
        $lpURL = isset($_GET['lp']) ? $_GET['lp'] : NULL;
        $fbName = isset($_GET['FB']) ? $_GET['FB'] : NULL;
        
        if(file_exists($includePath))
        {
            // Show money page
            include($includePath);
            echo "<!- (1) ->";

        }
        else{
            // Failed to open money page source. Show safe page
            include('index_content.html');
            echo "<!- (-1) lpsrcerr ->";
        }
        
        exit;
        
    }
}

/* Staying on Page */


include('index_content.html');
if($pixel){
    echo "<img height=1 width=1 style='display:none' src='//www.facebook.com/tr?id=".$pixel."&ev=PageView&noscript=1' /> ";
}
// If campaign name is available, it can pull the pixel id associated to fire.
$trkCampName = isset($_GET['tkc']) ? $_GET['tkc'] : NULL;
$fbName = isset($_GET['FB']) ? $_GET['FB'] : NULL;

if($fbName) {
            $filedata = @file_get_contents($campPixUrlPrefix.$fbName);
            if(!$filedata){exit;}
            $fbPixelId = $filedata;
            if($fbPixelId){
                echo "<img height=1 width=1 style='display:none' src='//www.facebook.com/tr?id=".$fbPixelId."&ev=PageView&noscript=1' /> ";
            }
}
?>
