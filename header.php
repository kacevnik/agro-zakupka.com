<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title('/'); ?></title>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<div class="fw-container">
			<div class="fw-row">
				<div class="fw-col-xs-12 fw-col-sm-6">
					<div class="logo">
						<a href="">
							<img src="<?php echo get_template_directory_uri().'/images/logo.png' ?>">
						</a>
					</div>
					<div class="header_contact_info">
						<div class="slogan">Агроспецзакупка</div>
						<div class="phone_header"><span class="hot_iline">Горячая линия:</span> 8-499-390-43-84</div>
						<div class="email">info@agro-zakupka.com</div>
					</div>	
				</div>
				<div class="fw-col-xs-12 fw-col-sm-6">
					<div class="backet">
						<a href="">0</a>
					</div>
					<div class="header_info">
						<div class="info_d">Бесплатная доставка по всей<br> России и странам СНГ!</div>
						<div class="header_widjet">
							<div class="clock_action_header">до конца акции осталось:</div>
							<div class="clock_action_body">
								<div class="clock_h clock_elem">18<br><span>часов</span></div>
								<div class="clock_d clock_elem">:</div>
								<div class="clock_m clock_elem">32<br><span>минут</span></div>
								<div class="clock_d clock_elem">:</div>
								<div class="clock_s clock_elem">01<br><span>секунд</span></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<nav>
		<div class="fw-container">
			<div class="fw-row">
				<div class="menu">
								<?php
			$args = array('theme_location' => 'top', 'container'=> 'nav', 'menu_class' => 'bottom-menu', 'menu_id' => 'bottom-nav');
			wp_nav_menu($args);
		?>
				</div>
			</div>
		</div>	
	</nav>