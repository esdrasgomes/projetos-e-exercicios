<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){

jQuery("#subirTopo").hide();

jQuery('a#subirTopo').click(function () {
         jQuery('body,html').animate({
           scrollTop: 0
         }, 800);
        return false;
   });

jQuery(window).scroll(function () {
         if (jQuery(this).scrollTop() > 1000) {
            jQuery('#subirTopo').fadeIn();
         } else {
            jQuery('#subirTopo').fadeOut();
         }
     });
});
</script>
