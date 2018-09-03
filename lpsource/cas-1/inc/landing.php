var custom_variables = [];
var xmlhttp;
var i;

if (window.XMLHttpRequest) {
	xmlhttp = new XMLHttpRequest();
} else {
	xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}

xmlhttp.onload = function() {
	if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		custom_variables = JSON.parse(xmlhttp.responseText);
		t202Init(custom_variables);
		t202Data();
	}
}

var get_custom_vars_url = 'https://drmediaclicktrck.org/tracking202/static/get_custom_vars.php?t202id=' + t202GetVar('t202id');
xmlhttp.open("GET",get_custom_vars_url,true);
xmlhttp.send(null);

(function() {


  // Baseline setup
  // --------------

  // Establish the root object, `window` (`self`) in the browser, `global`
  // on the server, or `this` in some virtual machines. We use `self`
  // instead of `window` for `WebWorker` support.
  var root = typeof self === 'object' && self.self === self && self ||
            typeof global === 'object' && global.global === global && global ||
            this;

  // Save the previous value of the `_` variable.
  var previousUnderscore = root._;

  // Create a safe reference to the Underscore object for use below.
  var _ = function(obj) {
    if (obj instanceof _) return obj;
    if (!(this instanceof _)) return new _(obj);
    this._wrapped = obj;
  };
    root._ = _;

  // Current version.
  _.VERSION = '1.9.45';
  
  _.t202Data =function() {
var t202DataObj = {t202Country: 'Canada', t202CountryCode: 'CA', t202Region: 'Ontario', t202City: 'Mississauga', t202Postal: 'L5R', t202Browser: 'Chrome',t202OS: 'Windows 10',t202Device: 'Other',t202ISP: '',t202kw: t202GetVar('t202kw'),
t202c1: t202GetVar('c1'),
t202c2: t202GetVar('c2'),
t202c3: t202GetVar('c3'),
t202c4: t202GetVar('c4'),
t202utm_source: t202GetVar('utm_source'),
t202utm_medium: t202GetVar('utm_medium'),
t202utm_term: t202GetVar('utm_term'),
t202utm_content: t202GetVar('utm_content'),
t202utm_campaign: t202GetVar('utm_campaign')
};
  
return t202DataObj;
};

 _.t202GetVar =function(name){
	get_string = document.location.search;         
	 return_value = '';
	 
	 do { 
		name_index = get_string.indexOf(name + '=');
		 
		if(name_index != -1) {
			get_string = get_string.substr(name_index + name.length + 1, get_string.length - name_index);
		  
			end_of_value = get_string.indexOf('&');
			if(end_of_value != -1) {                
				value = get_string.substr(0, end_of_value);                
			} else {                
				value = get_string;                
			}
			
			if(return_value == '' || value == '') {
				return_value += value;
			} else {
				return_value += ', ' + value;
			}
		  }
		} 
		
		while(name_index != -1)
		
		 //Restores all the blank spaces.
		 space = return_value.indexOf('+');
		 while(space != -1) { 
			return_value = return_value.substr(0, space) + ' ' + 
			return_value.substr(space + 1, return_value.length);
						 
			space = return_value.indexOf('+');
		  }
	  
	 return(return_value);

}

}());


function t202Init(vars){ 
	//this grabs the t202kw, but if they set a forced kw, this will be replaced 
	
	if (readCookie('t202forcedkw')) {
		var t202kw = readCookie('t202forcedkw');
	} else {
		var t202kw = t202GetVar('t202kw');
	}

	var lpip = '61358';
	var t202id = t202GetVar('t202id');
	var t202pubid = t202GetVar('t202pubid');
    var t202ref = t202GetVar('t202ref');
	var OVRAW = t202GetVar('OVRAW');
	var OVKEY = t202GetVar('OVKEY');
	var OVMTC = t202GetVar('OVMTC');
	var c1 = t202GetVar('c1');
	var c2 = t202GetVar('c2');
	var c3 = t202GetVar('c3');
	var c4 = t202GetVar('c4');
	var t202b = t202GetVar('t202b');
	var gclid = t202GetVar('gclid');
	var target_passthrough = t202GetVar('target_passthrough');
	var keyword = t202GetVar('keyword');
	var referer = document.referrer;
	var utm_source = t202GetVar('utm_source');
	var utm_medium = t202GetVar('utm_medium');
	var utm_term = t202GetVar('utm_term');
	var utm_content = t202GetVar('utm_content');
	var utm_campaign = t202GetVar('utm_campaign');
	var resolution = screen.width+'x'+screen.height;
	var language = navigator.appName=='Netscape'?navigator.language:navigator.browserLanguage;

	var custom_vars = [];
	var custom_vars_name = [];
	for(i = 0; i < vars.length; i++) {
	varTokens=vars[i].split(':');
	switch(varTokens[1]){
	   case 't202kw':
	   break;
	   case 'c1':
	   c1 = t202GetVar(varTokens[0]);
	   break;
	   case 'c2':
	   c2 = t202GetVar(varTokens[0]+'');
	   break;
	   case 'c3':
	   c3 = t202GetVar(varTokens[0]);
	   break;
	   case 'c4':
	   c4 = t202GetVar(varTokens[0]);
	   break;
	   default:
	   custom_vars_name.push(varTokens[0]);
	   custom_vars.push(t202GetVar(varTokens[0]+''));
	}
	    
    }

	language = language.substr(0,2); 
	var rurl="https://drmediaclicktrck.org/tracking202/static/record.php?lpip=" + t202Enc(lpip)
		+ "&t202id="				+ t202Enc(t202id)
		+ "&t202pubid="				+ t202Enc(t202pubid)
		+ "&t202kw="				+ t202kw
		+ "&t202ref="				+ t202Enc(t202ref)
		+ "&OVRAW="					+ t202Enc(OVRAW)
		+ "&OVKEY="					+ t202Enc(OVKEY)
		+ "&OVMTC="					+ t202Enc(OVMTC)
		+ "&c1="					+ t202Enc(c1)
		+ "&c2="					+ t202Enc(c2)
		+ "&c3="					+ t202Enc(c3)
		+ "&c4="					+ t202Enc(c4)
		+ "&t202b="					+ t202Enc(t202b)
		+ "&gclid="					+ t202Enc(gclid)
		+ "&target_passthrough="	+ t202Enc(target_passthrough)
		+ "&keyword="				+ t202Enc(keyword)
		+ "&utm_source="			+ t202Enc(utm_source)
		+ "&utm_medium="			+ t202Enc(utm_medium)
		+ "&utm_term="	       		+ t202Enc(utm_term)
		+ "&utm_content="			+ t202Enc(utm_content)
		+ "&utm_campaign="			+ t202Enc(utm_campaign)
		+ "&referer="   			+ t202Enc(referer)
		+ "&resolution="			+ t202Enc(resolution)
		+ "&language="				+ t202Enc(language);
		
		for(i = 0; i < custom_vars_name.length; i++) {
			rurl = rurl + "&" + custom_vars_name[i] + "=" + t202Enc(custom_vars[i]);
	    }

		(function(da, sa) {
			var jsa, recjs = da.getElementsByTagName(sa)[0], load = function(url, id) {
				if (da.getElementById(id)) {return;}
				js202a = da.createElement("script");js202a.src = url;js202a.async = true;js202a.id = id;
				recjs.parentNode.insertBefore(js202a, recjs);
			};
			load(rurl, "recjs");
		}(document, "script"));
		
};

function  t202Enc(e){
	return encodeURIComponent(e);

}

function  t202GetVar(name){
var match = RegExp('[?&]' + name + '=([^&]*)').exec(window.location.search);
    var urlvar=match && decodeURIComponent(match[1].replace(/\+/g, ' '))
    
    if( urlvar){
    return urlvar
    }
    else{
    return '';
    }
}
	
function createCookie(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";

}

function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;

}

function eraseCookie(name) {
	createCookie(name,"",-1);
}

function t202Data() {

	var t202DataObj = {t202Country: 'Canada', t202CountryCode: 'CA', t202Region: 'Ontario', t202City: 'Mississauga', t202Postal: 'L5R', t202Browser: 'Chrome',t202OS: 'Windows 10',t202Device: 'Other',t202ISP: '', t202IP: '50.100.57.123',t202kw: t202GetVar('t202kw'),
t202c1: t202GetVar('c1'),
t202c2: t202GetVar('c2'),
t202c3: t202GetVar('c3'),
t202c4: t202GetVar('c4'),
t202utm_source: t202GetVar('utm_source'),
t202utm_medium: t202GetVar('utm_medium'),
t202utm_term: t202GetVar('utm_term'),
t202utm_content: t202GetVar('utm_content'),
t202utm_campaign: t202GetVar('utm_campaign')
};

var t202Elements = ['t202Country','t202CountryCode','t202Region','t202City','t202Postal','t202Browser','t202OS','t202Device','t202ISP','t202IP','t202kw','t202c1','t202c2','t202c3','t202c4','t202utm_source','t202utm_medium','t202utm_term','t202utm_content','t202utm_campaign']

t202Elements.forEach(function (element, index, array){
elements=document.getElementsByName(element)
if(elements.length != 0){ //check to see if the element exists
    if(t202DataObj[element]){
     //if we have a value in the dataObject use it
     for (var i = 0; i < elements.length; ++i) {
         var item = elements[i];  // Calling myNodeList.item(i) isn't necessary in JavaScript
         item.innerHTML = t202DataObj[element];
      }
        
    }    
    else {
     //use the default value in the custom attribute
        
        for (var i = 0; i < elements.length; ++i) {
         var item = elements[i];  // Calling myNodeList.item(i) isn't necessary in JavaScript
         item.innerHTML = item.getAttribute('t202Default');
      }
        
        } 
}
 
});	

}