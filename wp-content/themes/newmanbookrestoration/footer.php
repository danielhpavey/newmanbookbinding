<footer>
<?php wp_nav_menu( array( 'menu' => 'header', 'container_class' => 'footer-menu' ) ); ?>
<?php wp_footer(); ?>
</footer>  

<?php
$page_id     = get_queried_object_id();
if ( $page_id == 4 ){
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$( '.bxslider' ).bxSlider({
		  auto: true,
		mode:'fade',
		speed: 4000
	})
});
</script>
<script type = "text/javascript" src = "<?php bloginfo( 'template_url' ); ?>/bxslider/jquery.bxslider.min.js"/></script>
<?php
}
?>
</body>
</html>
