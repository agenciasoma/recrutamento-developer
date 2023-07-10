<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0, width=device-width" />
	<!-- Chrome, Firefox OS, Opera and Vivaldi -->
	<?php
		$color = '#e6b54d';
	?>
	<meta name="theme-color" content="<?php echo $color; ?>">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="<?php echo $color; ?>">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="<?php echo $color; ?>">
	<link rel="mask-icon" href="<?php bloginfo('template_url') ?>/favicon/images/safari-pinned-tab.svg" color="<?php echo $color; ?>">
	<style>
		<?php //include (TEMPLATEPATH . '/build/css/header.css'); ?>
	</style>

	<!--[if IE 8 ]>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<progress value="0"></progress>
<header id="header" class="header">
	<div class="top">
		<div class="center">
			<div class="right">
				<?php if ( ! dynamic_sidebar( 'redessociais' ) ) : endif; ?>
				<div class="item-search-js icon-search"></div>
				<div class="idioma">
					<?php if ( ! dynamic_sidebar( 'idioma' ) ) : endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom">
		<div class="center-small">
			<?php if(is_home()) { ?>
				<div class="logo">
					<img width="100px" src="<?php bloginfo('template_url'); ?>/src/images/logo-somadev.png" alt="logo <?php wp_title(); ?>">
				</div><?php }else{ ?><div class="logo">
					<a href="<?php bloginfo('url'); ?>" title="Página Inicial">
						<img src="<?php bloginfo('template_url'); ?>/src/images/logo-somadev.png" alt="logo <?php wp_title(); ?>">
					</a>
				</div><?php } ?><div class="menu-top">
				<div class="nav-item">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<i>Menu</i>
				</div>
				<div class="rmm">
					<?php
						if(has_nav_menu('top-pages-menu')){
						   wp_nav_menu(array('theme_location' => 'top-pages-menu'));
						}
					?>
				</div>
			</div>
		</div>
	</div>
</header>
<main class="main">