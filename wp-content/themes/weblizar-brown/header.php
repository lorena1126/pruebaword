<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">``
	<![endif]-->
	<?php $wl_theme_options = get_option('weblizar_options'); ?>	
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />  
    <meta charset="<?php bloginfo('charset'); ?>" />	
	<title><?php wp_title( '|', true, 'right'); ?></title>	
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
	<?php wp_head(); ?>
</head>
<body <?php if(get_theme_mod('layout',"1")=='1') body_class(); else body_class('boxed'); ?> >
<div id="menu_wrapper" >
	<div class="top_wrapper">
		<header id="header">
			<div class="row">
				<nav class="navbar navbar-default" role="navigation">
					<div class="container-fluid">
						
					<div class="col-md-4" style="padding-left:6%;">
						<div class="navbar-header">						  
						  <div class="logo pull-left">							
							<?php $wl_theme_options = get_option('weblizar_options'); ?>	
							<a title="Weblizar" href="<?php echo home_url( '/' ); ?>">
							<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
									$image = wp_get_attachment_image_src( $custom_logo_id,'full' ); 
									if(has_custom_logo()) { ?>
									<span class="site-custom_logo"></span>
									<img  src="<?php echo $image[0]; ?>" style="height:<?php if($wl_theme_options['height']!='') { echo $wl_theme_options['height']; }  else { "55"; } ?>px; width:<?php if($wl_theme_options['width']!='') { echo $wl_theme_options['width']; }  else { "150"; } ?>px;" />
							<?php } else { echo '<span class="site-title">'.get_bloginfo( ).'</span>'; } ?>
							</a>
					
						  </div>
						  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						</div>
						</div>
						<div class="col-md-8">
						<?php wp_nav_menu( array(
							'menu'              => 'primary',
							'theme_location'    => 'primary',                
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'bs-example-navbar-collapse-1',
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker())
						); ?>
						</div>
					</div>
				</nav>		
			</div>
		</header>
	</div>
</div>