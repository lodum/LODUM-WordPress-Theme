<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="row">
      <div class="span12">
        <h1><?php echo(the_title('', '', false)); ?></h1>
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
    <p style="margin-top: 30px">This is a post<br />on the <a href="../blog">LODUM blog</a>.</p>
      </div>
    </div>

    <hr id="comments"/>
    
    <?php comments_template( '', true ); ?>

    <?php endwhile; else: ?>
      <p><?php _e('Sorry, there are no posts.'); ?></p>
    <?php endif; ?>

<?php get_footer(); ?>