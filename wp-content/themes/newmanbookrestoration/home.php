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
<img src = "<?php bloginfo( 'template_url' ); ?>/images/slideshow/book01.jpg" />
</li>
<li>
<img src = "<?php bloginfo( 'template_url' ); ?>/images/slideshow/book02.jpg" />
</li>
<li>
<img src = "<?php bloginfo( 'template_url' ); ?>/images/slideshow/book03.jpg" />
</li>
<li>
<img src = "<?php bloginfo( 'template_url' ); ?>/images/slideshow/book04.jpg" />
</li>
<li>
<img src = "<?php bloginfo( 'template_url' ); ?>/images/slideshow/book05.jpg" />
</li>
<li>
<img src = "<?php bloginfo( 'template_url' ); ?>/images/slideshow/book06.jpg" />
</li>
<li>
<img src = "<?php bloginfo( 'template_url' ); ?>/images/slideshow/book07.jpg" />
</li>
<li>
<img src = "<?php bloginfo( 'template_url' ); ?>/images/slideshow/book08.jpg" />
</li>
<li>
<img src = "<?php bloginfo( 'template_url' ); ?>/images/slideshow/book09.jpg" />
</li>
<li>
<img src = "<?php bloginfo( 'template_url' ); ?>/images/slideshow/book10.jpg" />
</li>
</ul>
</div>
<section>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<article class = "home">
<!--<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>-->
</h2>
<?php the_content(); ?>
</article>
<aside>
	<ul class = "services">
	<li>
		<h2>Restoration</h2>
		<p>Specialist restoration and preservation service.
		</p>
		<p>
		<a href="<?php bloginfo('url'); ?>/services" class = "readmore" ><i class = "icon-bookmark-empty"></i>Read More...</a>
		</p>
	</li>
	<li>
		<h2>Conservations</h2>
		<p>
Sympathetic to the original article be it leather, parchment, cloth or paper
		</p>
		<p>
		<a href="<?php bloginfo('url'); ?>/services" class = "readmore" ><i class = "icon-bookmark-empty"></i>Read More...</a>
		</p>
	</li>
	<li>
		<h2>Binding</h2>
		<p>Bindings designed and made to customer requirements in a variety of materials with the option of gold leaf tooling to create a truly bespoke gift.
		</p>
		<p>
		<a href="<?php bloginfo('url'); ?>/services" class = "readmore" ><i class = "icon-bookmark-empty"></i>Read More...</a>
		</p>
	</li>
	</ul>
</aside>


<?php endwhile; ?>
<?php endif; ?>
</section>
<?php get_footer(); ?>
