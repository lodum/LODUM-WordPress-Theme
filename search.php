<?php get_header(); ?>

		<?php if ( have_posts() ) : ?>

			<div class="row">
  				<div class="span12">
    				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyeleven' ), '<em>' . get_search_query() . '</em>' ); ?></h1>
  				</div>  				
			</div>

			<hr />
			
			
			<?php while ( have_posts() ) : the_post(); ?>
			    <div class="row">
			      <div class="span12">
			        <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php search_title_highlight(); ?></a></h3>
			      </div>
			    </div>

			    <div class="row">
			      <div class="span12">
			        <?php search_content_highlight(); ?>
			      </div>			      
			    </div>

			    <hr />
    
    
    <?php endwhile; else: ?>

			<article id="post-0" class="post no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyeleven' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_footer(); ?>