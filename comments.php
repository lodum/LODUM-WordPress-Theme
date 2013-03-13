<?php // Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments">This post is password protected. Enter the password to view comments.</p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'class="alt" ';
?>

<?php if ($comments) : 

	$first = true;

	foreach ($comments as $comment) : ?>
		<div class="row">

			<div class="span2">
				<i class="icon-comment pull-right"> </i>
				<?php if($first) { 
					$first = false; ?>
					<h4><?php comments_number('No comments yet.', 'One comment', '% comments' );?></h4>	
				<?php } ?> 				
			</div>
	
			<div class="span6 commentbox">
				<?php comment_text() ?>				
			</div>

			<div class="span3 offset1 commentbox">
				<i class="icon-user"> </i> <cite id="comment-<?php comment_ID() ?>"><?php comment_author_link() ?></cite>
				<?php if ($comment->comment_approved == '0') : ?>
				<em>Your comment will be shown here once we have approved it.</em>
				<?php endif; ?>
				<br />

				<i class="icon-calendar"> </i> <?php comment_date('F j, Y') ?><br />
				<i class="icon-time"> </i> <?php comment_time("H:i") ?><br />
				<i class="icon-bookmark"> </i> <a href="#comment-<?php comment_ID() ?>" title="">Permalink</a><br />
				<?php edit_comment_link('<i class="icon-pencil"> </i> Edit','',''); ?>				
			</div>

		</div>	

	<?php endforeach; /* end for each comment */ ?>

<hr />

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed: show nothing -->

	<?php endif; ?>

<?php endif; ?>

<div class="row">

<div class="span2">
<?php if ('open' == $post->comment_status) : ?>

<h4 id="respond">Add a comment</h4>
</div>

<div class="span10">
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>

<?php else : ?>

<div class="input-prepend">
	<span class="add-on"><i class="icon-user"> </i></span>
	<input type="text" name="author" id="cauthor" value="<?php echo $comment_author; ?>" tabindex="1" class="span3" placeholder="Name" />
	<span class="help-inline">Required</span>
</div><br />

<div class="input-prepend">
	<span class="add-on"><i class="icon-envelope"> </i></span>	
	<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2" class="span3" placeholder="Email" />
	<span class="help-inline">Required, but won't be shown</span>
</div><br />

<div class="input-prepend">
	<span class="add-on"><i class="icon-home"> </i></span>
	<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" tabindex="3" class="span3" placeholder="Website" />
	<span class="help-inline">Optional</span>
</div><br />

<?php endif; ?>

<p><a name="commentfield"><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4" class="span6"></textarea></a></p>
<p><input class="btn btn-submit" name="submit" type="submit" id="submit" tabindex="5" value="Submit" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>
</div>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>

</div>
