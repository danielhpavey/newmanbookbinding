<?php get_header(); ?>
<?php //get_sidebar(); ?>
<section>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<article>
<h2 class="entry-title">
<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?>
</a>
</h2>
<!--
<p class = "dadate" ><?php the_time(__('l jS M Y', 'my-tapestry')); ?> <?php _e('', 'my-tapestry'); ?>
</p>
-->
<?php //the_content(); ?>
<?php the_excerpt(); ?>
<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark" class = "readmore" ><i class="icon-bookmark-empty"></i>Read More...</a>
</article>
<?php endwhile; ?>
<?php endif; ?>
<div class = "pagithingy">
<?php $prev = get_previous_posts_link();
if ( strlen($prev) > 0){
echo $prev . ' &mdash; ';
}
?>

<?php next_posts_link(); ?>
</div>			
</section>
<?php get_footer(); ?>
