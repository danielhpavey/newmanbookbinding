<footer>
<ul class="footer-menu">
<?php wp_list_pages('title_li='); ?>
</ul>
</footer>  
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$( '.bxslider' ).bxSlider({
		  auto: true,
		mode:'fade',
		speed: 2000
	})
});
</script>
<script type = "text/javascript" src = "<?php bloginfo( 'template_url' ); ?>/bxslider/jquery.bxslider.min.js"/></script>
</body>
</html>
