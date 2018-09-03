<!-- Footer -->
<script>

function proceed(href){
    // window.location.href = "<?php //echo "http://".$domain."/thank-you/out.php" ?>";
     window.location.href = "<?php echo $outURL.'?flux_sess=' ?>"+fflux.getURLParam('flux_sess');
} 


 
document.addEventListener("DOMContentLoaded", function(event) {
    var links = document.querySelectorAll('a'),
        holder = document.getElementById('iframe-holder');
    if (links && holder) {

        for (var i = 0, iL = links.length; i < iL; i++) {
            console.log(links[i]);
            links[i].addEventListener("click", function(e) {
                document.body.className += ' loading';
                holder.innerHTML = '<iframe style="width: 1px; height: 1px;" src="<?php echo $ctaiFrameURL ?>"; onload="proceed(\'' + this.getAttribute('href') + '\')"></iframe>';
                e.preventDefault();
            });
        }
    }
});

</script>
<!-- Footer End -->