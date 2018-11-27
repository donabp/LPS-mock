<!doctype html>
<html>
<head>
<title><?php wp_title();?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="alternate" media="only screen and (max-width: 1024px)" href="<?php bloginfo('url');?>">
<link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Raleway:300,400,700" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body>
<div id="head_container">
	<div id="header" class="container">
		<div class="row">
			<div id="dealer_logo" class="col-sm-3 vertical-center">
				<a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('stylesheet_directory');?>/assets/images/lps-logo.png" border="0"></a>
			</div>
			<div class="col-md-1 hidden-sm hidden-xs">&nbsp;</div>
			<div id="contact-us1" class="col-sm-3 vertical-center">
				<h2>2310 Industrial Park Rd</h2><h3>Van Buren, AR 72956</h3><br/>
			</div>
			<div id="contact-us2" class="col-sm-3 vertical-center">
				<h2>565 Gage Place, Suite A</h2><h3>Springdale, AR 72764</h3><br/>
			</div>
			<div id="contact-us3" class="col-sm-2 vertical-center text-right">
				<i class="fas fa fa-phone-square hidden-sm"></i><h1>877.787.9476</h1><br >
				<a href="https://www.facebook.com/forkliftsAR/" target="_blank"><img src="<?php bloginfo('stylesheet_directory');?>/assets/images/facebook-wt-sm.png"></a>
			</div>
		</div>
	</div>
</div>

<div id="nav-wrap" class="container-fluid no-padding red-bg">
	<div id="navigation" class="container no-padding">
		<div id="nav-contain" class="col-xs-12">
		<nav class="navbar navbar-default red-bg white-color" role="navigation">
			<div class="">
				<div class="row">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<span class="visible-xs">
							MENU
						</span>
					</div>
					<?php 
					wp_nav_menu( array(
						'menu'				=> 'primary',
						'theme_location'	=> 'primary',
						'depth'			 => 2,
						'container'		 => 'div',
						'container_class'	 => 'collapse navbar-collapse',
						'container_id'		=> 'bs-example-navbar-collapse-1',
						'menu_class'		=> 'nav navbar-nav',
						'fallback_cb'		 => 'WP_Bootstrap_Navwalker::fallback',
						'walker'			=> new WP_Bootstrap_Navwalker())
					);
					?>
				</div>
			</div>
		</nav>
	</div>
	</div>
</div>

<?php if ( is_front_page() ) : ?>

<div id="hero_spot" class="container hidden-xs">
	
	<div id="this-carousel-id" class="carousel slide row">
		<ol class="carousel-indicators">
		<li data-target="#this-carousel-id" data-slide-to="0" class="active"></li>
		<li data-target="#this-carousel-id" data-slide-to="1"></li>
		<li data-target="#this-carousel-id" data-slide-to="2"></li>
		<li data-target="#this-carousel-id" data-slide-to="3"></li>
		</ol>
	<div class="carousel-inner">
		<div class="item active" id="rotation01"></div>
		<div class="item" id="rotation02"></div>
		<div class="item" id="rotation03"></div>
		<div class="item" id="rotation04"></div>
	</div>
		<a class="carousel-control left" href="#this-carousel-id" data-slide="prev"><i class="fa fa-chevron-left fa-2x vertical-center"></i></a>
		<a class="carousel-control right" href="#this-carousel-id" data-slide="next"><i class="fa fa-chevron-right fa-2x vertical-center"></i></a>
	</div>
</div>

<div class="clear"></div>
<div id="images-bar-wrap" class="container-fluid no-padding">
	<div id="images-bar" class="container">
		<ul id="cta-list">
			<li class="cta col-xs-12 col-sm-4" id="cta1">
				<a href="/inventory/new" class="red-bg">New Equipment</a>
			</li>
			<li class="cta col-xs-12 col-sm-4" id="cta2">
				<a href="/inventory/used" class="red-bg">Pre-Owned</a>
			</li>
			<li class="cta col-xs-12 col-sm-4" id="cta3">
				<a href="/rentals" class="red-bg">Rentals</a>
			</li>
		</ul>
	</div>
</div>

<div id="featured-title">
	<div id="featured-title-content">
		<h1>Featured <strong> Inventory</strong></h1>
	</div>
</div>

<div id="featured_container">
	<div id="featured">
		<div id="rotator" >
			<div class="container">


				<div id="jqsliderFI4" class="slider">

				<div id="slides4" class="slides">

					<?php if ( is_active_sidebar( 'featured_inventory_widget_area' ) ) : ?>
					<?php dynamic_sidebar( 'featured_inventory_widget_area' ); ?>
					<?php endif; ?>

				</div>
				</div>

			</div>
		</div>
	</div>
</div>

<?php endif; ?>

<?php if ( !is_front_page() ) : ?>

<div class="clear"></div>
<div id="images-bar-wrap">
	<div id="images-bar">

	</div>
</div>

<?php endif; ?>

<div class="container-fluid content-wrap">
	<div class="container">
		<div class="content">
