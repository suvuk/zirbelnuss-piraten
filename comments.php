			<div id="comments">
<?php
	if ( post_password_required() ) :
?>
				<div class="nopassword"><?php _e( 'Passwortgeschützter Beitrag. Passwort zur Ansicht aller Kommentare eingeben.', 'codium_extend' ) ?></div>
			</div><!-- .comments -->
<?php
		return;
	endif;
?>
<?php if ( have_comments() ) : ?>
				<div id="comments-list" class="comments">
					<h3><?php comments_number('', __('<span>Ein</span> Kommentar', 'codium_extend'), __('<span>%</span> Kommentare', 'codium_extend') ); ?></h3>
					<div id="comments-nav-above" class="comments-navigation">
<?php paginate_comments_links(); ?>
					</div>
					
<?php wp_list_comments('callback=codium_extend_comment'); ?>
					
					<div id="comments-nav-below" class="comments-navigation">
<?php paginate_comments_links(); ?>
					</div>
				</div><!-- #comments-list .comments -->
<?php endif; // check for comment navigation ?>
		
<?php if ( comments_open() ) : // If comments are open, but there are no comments ?>

		<?php else : // or, if we don't have comments:

			/* If there are no comments and comments are closed,
			 * let's leave a little note, shall we?
			 * But only on posts! We don't want the note on pages.
			 */
			if ( ! comments_open() && ! is_page() ) :
			?>
			<p class="nocomments"><?php _e( 'Kommentare geschlossen.', 'codium_extend' ); ?></p>
			<?php endif; // end ! comments_open() && ! is_page() ?>





<?php endif // REFERENCE: if ( have_comments() ) ?>

<?php comment_form(); ?>



			</div><!-- #comments -->