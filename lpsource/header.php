<base href="<?php echo $baseUrl; ?>">
<script type="text/javascript">
  function ffluxQuery() {
    ;document._ffqValues=[];document._ffqOptions={timeOnPage:!1,timeOnPageResolution:null,tokenInjection:{}};function track(e){if(e){for(var r in e){document._ffqOptions[r]=e[r]}};if(document.ffmvt){fflux.mvt().reset();for(var n in document.ffmvt){fflux.mvt().add(n,document.ffmvt[n])};fflux.mvt().process()};bodyCallback(t,'_ffqtl')};function bodyCallback(e,n){if(document.body){e()}else if(!document[n]){document[n]=!0;document.addEventListener('DOMContentLoaded',e)}};function insertUniqueFrame(e,n){var t=document.getElementById(n);if(t){t.parentNode.removeChild(t)};t=document.createElement('iframe');t.id=n;t.src=e+'&frameId='+n;t.style.display='none';document.body.appendChild(t)};function t(){var e='_ffq_track_';window.addEventListener('message',function(n){if(n.data.ok){var p=n.data['frameId'];if(p===e){if(document._ffqOptions.timeOnPage&&!document._ffTopTracker){document._ffTopTracker=new TimeOnPageTracker();document._ffTopTracker.start()};if(n.data.hasOwnProperty('flux_inject')){var r=n.data['flux_inject'];if(r.intoUrl){history.replaceState({},'',r['flux_url'])};if(r.intoForms.selector){var o=JSON.parse(JSON.stringify(r.tokens)),l=document.querySelectorAll(r.intoForms.selector);if(l&&l.length){for(var m=0;m<l.length;m++){var v=l[m],u=v.getElementsByTagName('input');if(u&&u.length){for(var s=0;s<u.length;s++){var t=u[s];if(o.hasOwnProperty(t.name)){t.value=o[t.name];delete o[t.name]}}};for(var f in o){var t=document.createElement('input');t.type='hidden';t.name=f;t.value=o[f];v.appendChild(t)}}}};if(r.intoLinks.selector){var a=document.querySelectorAll(r.intoLinks.selector);if(a&&a.length){var i=[];for(var f in r.tokens){i.push(f+'='+encodeURIComponent(r.tokens[f]))};i=i.join('&');for(var c=0;c<a.length;c++){var d=a[c];d.href+=(d.href.indexOf('?')==-1?'?':'&')+i}}}}}}},!1);insertUniqueFrame(getUrlSrc(),e)};function getNodeId(){var t=fflux.getURLParam('flux_fn');if(!t){for(var n=0;n<document._ffqValues.length;n++){var e=document._ffqValues[n].split('|ff|');if(e[0]=='set'&&e[1]=='flux_fn'){t=e[2];break}}};return t};function getServerUrl(){return'//otmftk.info/tracking/universalJSRequest.php'};function getUrlSrc(){var n=getServerUrl(),e=getAllURLParameters();fflux.ffq('set',['flux_inject',JSON.stringify(document._ffqOptions.tokenInjection)]);if(document._ffqValues.length){e.push('ffq='+document._ffqValues.join('|ff|'))};if(document._ffqOptions.noCookies){e.push('noCookies=1')};return e.length?n+'?'+e.join('&'):n};function formatFFQEntry(e,n){var r=e;if(n.length){for(var t=0;t<n.length;t++){n[t]=encodeURIComponent(n[t])};r+='|ff|'+n.join('|ff|')};return r};function ffq(e,n,f){var t=formatFFQEntry(e,n);if(document._ffqValues.indexOf(t)==-1){if(f){for(var r=0;r<document._ffqValues.length;r++){var o=document._ffqValues[r].split('|ff|');if(o[0]==e){document._ffqValues[r]=t;t=null;break}}};if(t!==null){document._ffqValues.push(t)}}};function getAllURLParameters(){var r=location.search,f=[];if(r.indexOf('?')===0){for(var a=r.split('?'),t=a[1].split('&'),e=0;e<t.length;e++){var n=t[e].split('='),o=n[0],i=n[1];f.push(o+'='+i)}};return f};function splitKeyValuePairs(e){var t={};for(var r in e){var n=e[r].split('=');t[n[0]]=n[1]};return t};function TimeOnPageTracker(){var t=-1,r=null,e=null,o=0,n=fflux.getURLParam('flux_topres');if(!n&&document._ffqOptions.timeOnPageResolution!==null){n=document._ffqOptions.timeOnPageResolution};if(parseInt(n)==n){n=Math.max(n,100)}else{n=3000};function f(){if(e===null){o=0}else{var n=Date.now();o+=n-e;e=n};var t=formatFFQEntry('top',[o]),r=getServerUrl()+'?ffq='+t+'&flux_url='+encodeURIComponent(document.URL)+'&flux_fn='+getNodeId()+'&noCookies='+(document._ffqOptions.noCookies?1:0);bodyCallback(function(){l(r)},'_ffqtopl')};function l(e){insertUniqueFrame(e,'_ffq_top_')};function a(){if(r!==null){e=Date.now()-r;r=null;f()};if(t==-1){if(e===null){f();e=Date.now()};t=setInterval(f,n)}};function u(){if(r===null){if(t!=-1){clearInterval(t);t=-1};r=e===null?0:Date.now()-e}};var i=(function(){var e,n,t={hidden:'visibilitychange',webkitHidden:'webkitvisibilitychange',mozHidden:'mozvisibilitychange',msHidden:'msvisibilitychange'};for(var e in t){if(e in document){n=t[e];break}};return function(t){if(t)document.addEventListener(n,t);return!document[e]}})();i(function(){if(i()){a()}else{u()}});window.addEventListener('beforeunload',f);return{'start':a,'pause':u}};function Mvt(){var f=c(),n=[],e={};function c(){var n='mvt-vid',e=s(n);if(!e){e=Date.now();m(n,e)};return e};var t=function(e){return n[e][Math.floor(l()*n[e].length)]},r=function(n){if(n==='always'){f=Date.now()};var o={};for(var r in e){o[r]=t(r)};e=o},o=function(){e={}},i=function(t,r){if(!(t in e)){e[t]=[]};e[t].push(r);n=e},a=function(n,t){if(t){return document.write(e[n])};return e[n]},u=function(n){r(n);for(var t in e){fflux.ffq('mvt',[t,e[t]])}},l=function(e,n){var t=Math.sin(f++)*10000;return t-Math.floor(t)};function s(e){var r=e+'=',f=document.cookie.split(';');for(var t=0;t<f.length;t++){var n=f[t];while(n.charAt(0)==' '){n=n.substring(1)};if(n.indexOf(r)==0){return n.substring(r.length,n.length)}};return''};function m(e,n){var t=new Date();t.setTime(t.getTime()+(30*24*60*60*1000));var r='expires='+t.toUTCString();document.cookie=e+'='+n+';'+r+';path=/'};return{'getVariation':t,'createCombination':r,'reset':o,'add':i,'get':a,'process':u}};return{'track':track,'ffq':ffq,'mvt':function(){if(!document._ffmvt){document._ffmvt=new Mvt()};return document._ffmvt},'top':function(){if(!document._ffTopTracker){document._ffTopTracker=new TimeOnPageTracker()};return document._ffTopTracker},'getURLParams':function(){return splitKeyValuePairs(getAllURLParameters())},'getURLParam':function(e){return splitKeyValuePairs(getAllURLParameters())[e]}};
  }
  var fflux = new ffluxQuery(); 
  fflux.ffq('set', ['flux_fts', '<?php echo $flux_fts ?>']);

  fflux.ffq('set', ['flux_url', document.URL]);
  fflux.ffq('set', ['flux_ref', document.referrer]);  
  fflux.ffq('set', ['flux_fn', '<?php echo $flux_fn ?>']);
  fflux.track({ 
      timeOnPage: false, 
      timeOnPageResolution: 3000, 
      noCookies: false,
      tokenInjection: {
        intoUrl: false,
        intoForms: { selector: null },
        intoLinks: { selector: null },
        tokens: { flux_sess: '{session-id}' }
      }
  });
</script>
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
 <img height="1" width="1" style="display:none" src="//www.facebook.com/tr?id=<?php echo $pixel; ?>&ev=PageView&noscript=1" /> 
 <!-- FB Pageview End -->

