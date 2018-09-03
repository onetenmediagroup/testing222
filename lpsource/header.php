<base href="<?php echo $baseUrl; ?>">

<!-- iframe ATC -->
<style>
  #loader{
    width: 1%;
    height: 1%;
    display: none;
    position: fixed;
    z-index: 1000;
    top: 0;
    left: 0;
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

