<?php get_header() ?>

	<div id="container">
		<div id="content">

                      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	                                <h1 class="entry-title"><?php _e( 'Not Found', 'codium_extend' ); ?></h1>
	                                <div class="entry-content">
	                                        <p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'codium_extend' ); ?></p>
                                        <?php get_search_form(); ?>
                                </div><!-- .entry-content -->
                        </div><!-- #post-0 -->
	

		</div><!-- #content -->
	</div><!-- #container -->
	<script type="text/javascript">
	                // focus on search field after it has loaded
	                document.getElementById('s') && document.getElementById('s').focus();
	</script>
	

<?php get_sidebar() ?>
<?php get_footer() ?>