<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>
<?php
?>
<?php //get_sidebar(); ?>
<div class = "images">
<ul class = "bxslider">
<li>
<img src = "<?php bloginfo( 'template_url' ); ?>/images/book.jpg" />
</li>
<li>
<img src = "<?php bloginfo( 'template_url' ); ?>/images/book1.jpg" />
</li>
<li>
<img src = "<?php bloginfo( 'template_url' ); ?>/images/book2.jpg" />
</li>
</ul>
</div>
<section>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<article>
<!--<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>-->
</h2>
<?php the_content(); ?>
</article>
<aside>
	<ul class = "services">
	<li>
		<h2>Restoration</h2>
		<p>
		Donec consectetur diam vitae quam suscipit facilisis. Suspendisse non aliquam justo. Nulla purus nisi, vulputate id pellentesque et, vehicula id.
		</p>	
	</li>
	<li>
		<h2>Conservations</h2>
		<p>Aliquam laoreet ligula ac sem porta, sed consequat diam semper. Suspendisse rhoncus volutpat neque, a fringilla mauris. Nulla facilisi. Ut.
		</p>
	</li>
	<li>
		<h2>Binding</h2>
		<p>In hac habitasse platea dictumst. Vivamus vitae tincidunt erat. Fusce leo lectus, vehicula vel nunc eu, sagittis facilisis libero. Morbi.
		</p>
	</li>
	</ul>
</aside>


<?php endwhile; ?>
<?php endif; ?>
</section>
<?php get_footer(); ?>
