<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<!-- Link framework css files here -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/boilerplate.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/frameworks/bootstrap-3.3.7/css/bootstrap.min.css">

		<!-- Link all  External Fonts here -->
		<link href="https://fonts.googleapis.com/css?family=Eczar" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700" rel="stylesheet">

		<!-- linking the main style.css -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
		<!-- <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( ‘stylesheet_url’ ); ?>"> -->

		<!-- Link additional css files here -->
		<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/blog_posts.css"> -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animations.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">

		<?php wp_head(); ?>

	</head>



	<body <?php body_class(); ?>>

		<!-- header -->
		<header role="banner">

			<div class="header-background" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/header_banner.png);" >
				<div class="header-container container">

					<div class="row">

						<div class="logo-container col-xs-12 col-md-8 col-md-offset-2">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Floral Manifesto" />
						</div>

						<div class="slogan-container col-xs-8 col-xs-offset-2 col-md-6 col-md-offset-3">
							<img src="<?php echo get_template_directory_uri(); ?>/img/feminism_fashion_floral_top.png" alt="Feminism. Fashion. Floral." />
						</div>

						<div class="stitch-divider-header col-xs-12 col-md-8 col-md-offset-2">
							<img src="<?php echo get_template_directory_uri(); ?>/img/cross_stitch_corroded.png" alt="" />
						</div>


						<!-- nav -->
						<nav class="header-nav col-xs-12 col-md-8 col-md-offset-2" role="navigation">
							<?php html5blank_nav(); ?>
						</nav>
						<!-- /nav -->

						<div class="stitch-divider-header col-xs-12 col-md-8 col-md-offset-2">
							<img src="<?php echo get_template_directory_uri(); ?>/img/cross_stitch_corroded.png" alt="" />
						</div>

					</div>
					<div class="margin-bottom-20"></div>
				</div>


			</div>


			<div class="margin-top-bottom"></div>



		</header>
		<!-- /header -->
