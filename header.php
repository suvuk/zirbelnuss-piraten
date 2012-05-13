<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php bloginfo('name'); wp_title();?></title>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
<link rel="shortcut icon" href="/wp-content/themes/zirbelnuss-piraten/images/favicon.ico" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head() ?>

</head>

<body <?php body_class(); ?>> 

<div id="wrapperpub">
<div id="logo"><a href="/"><img src="/wp-content/themes/zirbelnuss-piraten/images/logo.png" alt="Zurück zur Startseite"></a></div>
	<div id="header">
		<div class="dp100">	
			<h1 id="blog-title" class="blogtitle"><a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo('name') ?>"><?php bloginfo('name') ?></a></h1>
<div id="description" class="description"><?php bloginfo('description') ?></div>			
		</div><!-- dp100 -->		
	</div><!--  #header -->	
</div><!--  #wrapperpub -->			
<div class="clear"></div>
<div id="wrapper">	
		<div id="access">
			<?php wp_nav_menu(array( 'container_class' => 'menu-header', 'theme_location' => 'primary-menu',)); ?>			
		</div><!--  #access -->	
<div class="clear"></div>		
	