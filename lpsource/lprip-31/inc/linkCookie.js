var cookie = decodeURIComponent(document.cookie);
var voluumData = cookie.split('lander_cookie=')[1].split(' ')[0];
var s1Link = cookie.split('s1_link=')[1].split('; ')[0];
var s2Link = cookie.split('s2_link=')[1].split('; ')[0];
if (voluumData !== '') {
  window.onload = function() {
    var query = window.location.search.substring(1);
    var vars = query.split("&");
    var matches = [];
    var voluumDataSplit = voluumData.split('&');
    var queryString = voluumDataSplit[0];
    for (var i = 1; i < voluumDataSplit.length; i++) {
      var match = voluumDataSplit[i].split('=');

      for (var j = 0; j < vars.length; j++) {
        var pair = vars[j].split('=');
        if (match[0] == pair[0]) {
          match[1] = pair[1];
        }


      }
      matches[i] = match[0] + '=' + match[1];


    }
    queryString += matches.join('&');

    var links = document.getElementsByTagName('a');

    for (var i = 0; i < links.length; i++) {
      var link = links[i];
      link.addEventListener('click', function(e) {
        e.preventDefault();
        console.log(this.href);
        if (this.href == "step2.php") {
          window.location.replace(s2Link + '?' + voluumData);
        } else {
          window.location.replace(s1Link + '?' + voluumData);
        }
      }, false);
    }



    document.cookie = "lander_cookie=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  }
}
