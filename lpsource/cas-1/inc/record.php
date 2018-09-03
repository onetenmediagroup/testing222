 

var _202links = document.links;
var txt = "";
var i;
var match = 0;

for (i = 0; i < _202links.length; i++) {
    txt = _202links[i].href
  
    if(txt.search('http://mediatrcking.go2cloud.org/aff_c\\?offer_id=1442&aff_id=4&aff_sub=\\[\\[c1\\]\\]&aff_sub2=\\[\\[subid\\]\\]&aff_sub3=\\[\\[c2\\]\\]') != -1){
    _202links[i].href = 'http://mediatrcking.go2cloud.org/aff_c?offer_id=1442&aff_id=4&aff_sub=CAClicks1-1&aff_sub2=1590423&aff_sub3='
    
    //set data attribute so we can set leave behind later
    _202links[i].setAttribute('data-lb202',1);
    
    //set ping for async post
    _202links[i].setAttribute('ping','//drmediaclicktrck.org/tracking202/redirect/lp2.php?lpip=61358');
    
    //backup for browsers with no post
     _202links[i].addEventListener("click", function (event){
    var ourl = '//drmediaclicktrck.org/tracking202/redirect/lp2.php?lpip=61358'; //'http://mediatrcking.go2cloud.org/aff_c?offer_id=1442&aff_id=4&aff_sub=CAClicks1-1&aff_sub2=1590423&aff_sub3=';
    var img = new Image();
    img.src = ourl
    }, true);
    
    //mark that no redirect link found
    match = 1;
    }
}


if(match){
    //set referer to origion so that privacy is protected
    var meta = document.createElement('meta');
    meta.name = "referrer";
    meta.content = "origin";
    document.getElementsByTagName('head')[0].appendChild(meta);
    
    //find hostname   
    var speedlink = document.createElement('a');
    speedlink.href = "http://mediatrcking.go2cloud.org/aff_c?offer_id=1442&aff_id=4&aff_sub=CAClicks1-1&aff_sub2=1590423&aff_sub3=";
    speedlink.origin
    
    //prefetch dns for aff url
    var linkel = document.createElement('link');
    linkel.rel='dns-prefetch'
    linkel.href=speedlink.origin
    document.getElementsByTagName('head')[0].appendChild(linkel);

    //prefetch dns for aff url
    var linkel = document.createElement('link');
    linkel.rel='preconnect'
    linkel.href=speedlink.origin
    document.head.appendChild(linkel);
    
}

 var subid=(function () { 

	var subid ='1590423';
	createCookie('tracking202subid',subid,0);

	var outbound = 'http://drmediaclicktrck.org/tracking202/redirect/pci.php?pci=515904231';
	createCookie('tracking202outbound',outbound,0);
	return{
	get: function() {

return 1590423;

}
}
}()); 


