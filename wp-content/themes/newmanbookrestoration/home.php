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
<img src = "<?php bloginfo( 'template_url' ); ?>/images/book.jpg" />	
</div>
<section>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<article>
<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
</h2>
<?php the_content(); ?>
</article>
<aside>
	<ul class = "services">
	<li>
		<h2>Restoration</h2>
	</li>
	<li>
		<h2>Conservations</h2>
	</li>
	<li>
		<h2>Binding</h2>
	</li>
	</ul>
</aside>


<?php endwhile; ?>
<?php endif; ?>
</section>
<?php get_footer(); ?>