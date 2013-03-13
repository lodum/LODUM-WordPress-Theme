<?php get_header(); ?>

<div class="row">
	<div class="span12">
	<h1><?php $key="customtitle"; echo get_post_meta($post->ID, $key, true); ?></h1>
    </div>
</div>

<div class="row">
  	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php edit_post_link('<span class="icon-pencil">&nbsp;</span>', '</div><div class="row"><p class="pull-right">', '</p><div class="row">'); ?>
	<?php endwhile; else: ?>
		<p><?php _e('<h1>Sorry, this page does not exist.</h1>'); ?></p>
	<?php endif; ?>
</div>

<?php get_footer(); ?>