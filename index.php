<?php get_header(); ?>

<div class="row">
  <div class="span6">
    <h1>LODUM Blog</h1>
  </div>
  <div class="span6">
    <p class="lead" style="margin-top: 50px">News from the LODUM headquarters and all things Linked Open Data.</p>
  </div>
</div>

  <hr />

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="row">
      <div class="span12">
        <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php echo(the_title('', '', false)); ?></a></h3>
      </div>
    </div>

    <div class="row">
      <div class="span8">
        <?php the_content('Weiterlesen &raquo;'); ?>
      </div>
      <div class="span3 offset1">
        <p class="postmetadata">
          <i class="icon-calendar"> </i> <?php the_time('F j, Y') ?><br />
          <i class="icon-time"> </i> <?php the_time('h:m') ?><br />
          <i class="icon-tags"> </i> <?php the_tags( $before, ', ', ', ' ); ?><?php the_category(', ') ?><br />
    <i class="icon-comment"> </i> <?php comments_popup_link('No comments', 'One comment', '% comments'); ?><br />           
    <?php edit_post_link('<i class="icon-pencil"> </i> Edit'); ?></p>
      </div>
    </div>

    <hr />
    
    
    <?php endwhile; else: ?>
      <p><?php _e('Sorry, there are no posts.'); ?></p>
    <?php endif; ?>

    <div class="row">
      <div class="span9">
        <p class="lead"><?php previous_posts_link('&laquo; Newer posts') ?></p>
      </div>
      <div class="span3">
        <p class="lead pull-right"><?php next_posts_link('Older posts &raquo;') ?></p>
      </div>
    </div>


<?php get_footer(); ?>