<?php get_header() ?>

	<div id="container">
		<div id="content">
			<?php the_post(); ?>
<!--			<div id="nav-above" class="navigation">
				<div class="nav-previous"><?php previous_post_link('%link', '<span class="meta-nav">&laquo;</span> %title') ?></div>
				<div class="nav-next"><?php next_post_link('%link', '%title <span class="meta-nav">&raquo;</span>') ?></div>
			</div>-->

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<h2 class="single-entry-title"><?php the_title(); ?></h2>
					
				<div class="linebreak"></div>
				<div class="entry-content">
					<?php the_content(''.__('', 'codium_extend').''); ?>
					
					<div class="clear"></div>
					<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'codium_extend' ), 'after' => '</div>' ) ); ?>
					
					<?php if (is_single() && function_exists('wp23_related_posts') ) { ?>
						<?php wp23_related_posts(); ?>
					<?php } ?>
 				</div>

				<div class="entry-meta">
					<?php codium_extend_posted_on(); ?>
					<?php codium_extend_posted_in(); ?>	
					<?php edit_post_link(__('Bearbeiten', 'codium_extend'), "\n\t\t\t\t\t<span class=\"edit-link\">", "</span>"); ?>
				</div>
				<div class="clear"></div>
			</div><!-- .post -->

			<div class="linebreak"></div>
			
			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php previous_post_link('%link', '<span class="meta-nav">&laquo;</span> %title') ?></div>
				<div class="nav-next"><?php next_post_link('%link', '%title <span class="meta-nav">&raquo;</span>') ?></div>
			</div>
			
			<?php comments_template(); ?> 


		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>
