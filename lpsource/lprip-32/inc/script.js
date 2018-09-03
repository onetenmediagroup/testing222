var interval;var minutes=15;var seconds=0;window.onload=function(){countdown('countdown');}
function countdown(element){interval=setInterval(function(){var el=document.getElementById(element);if(seconds==0){if(minutes==0){el.innerHTML="";clearInterval(interval);return;}else{minutes--;seconds=60;}}
if(minutes>0){var minute_text=minutes+(minutes>1?' minutes':' minute');}else{var minute_text='';}
var minute_text=minutes+':';var second_text=seconds>1?'seconds':'second';var second_text='';el.innerHTML=minute_text+''+ seconds+' '+ second_text+'Minutes';seconds--;},1000);}