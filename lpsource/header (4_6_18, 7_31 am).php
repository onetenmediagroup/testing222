<base href="<?php echo $baseUrl; ?>">

<!-- Tracker -->
<noscript>
    <img src="http://otmtrk.info/t/path/lp-img.php?<?php echo $thriveLPId; ?>" style="display:none;" />
</noscript>
<script type="text/javascript">
    document.write('<img src="'+window.location.protocol+'//otmtrk.info/t/path/lp-img.php?<?php echo $thriveLPId; ?>&' + window.location.search.substring(1) + '&trvrf=' + encodeURIComponent(document.referrer) + '" style="display:none;" />');
</script>
<!-- Tracker End -->

<!-- iframe ATC -->
<style>
  #loader{
    width: 100%;
    height: 100%;
    display: none;
    position: fixed;
    z-index: 1000;
    top: 0;
    left: 0;
    background: rgba(242,242,242, 0.5) url(https://s3.amazonaws.com/inc/ajax-loader.gif) no-repeat center;
    background-size: 200px auto;
  }
  body.loading #loader{
    display: block;
  }
</style>

<div id="loader"></div>
<div id="iframe-holder" style="width: 1px; height: 1px; overflow: hidden; position: absolute; z-index: 20; top: -100px; left: -100px"></div>
 <!-- iframe ATC End -->

 <!-- FB Pageview -->
 <img height="1" width="1" style="display:none" src="//www.facebook.com/tr?id=<?php echo $fbPixelId; ?>&ev=PageView&noscript=1" /> 
 <!-- FB Pageview End -->

