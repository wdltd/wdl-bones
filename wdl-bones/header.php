<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>

		<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		
		<link rel="stylesheet" href="https://use.typekit.net/#######.css">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

			<div id="inner-header" class="wrap cf">

				<a href="<?php echo home_url(); ?>" rel="nofollow" class="logo" itemscope itemtype="http://schema.org/Organization">
					<img src="<?php the_field( 'logo', 'options' ); ?>">
				</a>

				<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
					<?php wp_nav_menu(array(
						'container' => false,
						'container_class' => 'menu cf',
						'menu' => __( 'Primary Nav', 'bonestheme' ),
						'menu_class' => 'nav primary-nav cf',
						'theme_location' => 'primary-nav',
					)); ?>
				</nav>

			</div>

		</header>
