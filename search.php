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

		<div class="row">
				<div class="span12">
				<h1 class="page-title">Sorry, nothing found.</h1>
				</div>  				
		</div>

		<div class="row">
			<div class="span4">
				<form class="form" id="popup-search" action="<?php echo site_url('/'); ?>">
					<div class="input-append">
						<input type="text" class="span2" name="s" id="s" <?php if(isset($_GET['s'])){
							echo "value=\"".$_GET['s']."\"";
						} ?>>
						<button type="submit" class="btn">Search</button>
					</div>
				</form>
			</div>
		    <div class="span8">
				<p>Please try again with some different keywords.</p>
			</div>
		</div>

	<?php endif; ?>


<?php get_footer(); ?>