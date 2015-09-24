<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<meta name="description" content="Regina Alves Nutricionista tudo sobre nutricao">
	<meta name="keywords" content="Nutricao, alimentacao, personal diet, controle de peso">
	<meta name="robots" content="index, follow">
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="icon" href="<?php bloginfo('stylesheet_directory');?>/img/favicon.ico">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript">jQuery(function($) {$("li#menu-item-59").children("a").attr('href', "#");});</script>
	<?php wp_head(); ?>
</head>

<body class="container">
	<header >
		<div class="col-xs-1 col-sm-3" style="margin: 10px 0; padding: 0">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title='<?php bloginfo( 'name' ); ?>' rel="home">
				<img id="logo" src="<?php bloginfo('stylesheet_directory');?>/img/logo.png" alt="Logo Regina Alves Nutri"/>
			</a>
		</div>
		<nav class="nav navbar-default">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display --> 
				<div class="navbar-header"> 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex-collapse"> 
						<span class="sr-only">Toggle navigation</span> 
						<span class="icon-bar"></span> 
						<span class="icon-bar"></span> 
						<span class="icon-bar"></span> 
					</button> 
				</div> 
				<!-- Collect the nav links, forms, and other content for toggling --> 
				<div class = "collapse navbar-collapse navbar-right navbar-ex-collapse">
					<?php wp_nav_menu( array(
						'menu' => 'top_menu',
						'depth' => 2,
						'container' => false,
						'menu_class' => 'nav navbar-nav',
					  //Process nav menu using our custom nav walker
						'walker' => new wp_bootstrap_navwalker())
					);
					?>
				</div>
			</div>
		</nav>
	</header>