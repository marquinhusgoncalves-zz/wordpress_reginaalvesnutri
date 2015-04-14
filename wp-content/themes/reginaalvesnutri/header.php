<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700|Noticia+Text:400,700" rel="stylesheet" type="text/css">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
		<script type="text/javascript">jQuery(function($) {$("li#menu-item-59").children("a").attr('href', "#");});</script>
	</head>

<body>
	<div id="stage">
		
		<header id = "masthead" class = "container" role = "banner" style = "">

			<div class = "col-xs-1 col-sm-3 col-md-3 col-lg-3" style = "margin: 10px 0; padding: 0">
				<a href = "<?php echo esc_url( home_url( '/' ) ); ?>" title = '<?php bloginfo( 'name' ); ?>' rel="home">
					<img src = "<?php bloginfo('stylesheet_directory');?>/img/logo.png" />
				</a>
			</div>

			<nav class = "nav navbar-default" role = "navigation" >
				<div class = "container">
				<!-- Brand and toggle get grouped for better mobile display --> 
				  <div class = "navbar-header"> 
				    <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = ".navbar-ex-collapse"> 
				      <span class = "sr-only">Toggle navigation</span> 
				      <span class = "icon-bar"></span> 
				      <span class = "icon-bar"></span> 
				      <span class = "icon-bar"></span> 
				    </button> 
				  </div> 
				  <!-- Collect the nav links, forms, and other content for toggling --> 
				  <div class = "collapse navbar-collapse navbar-right navbar-ex-collapse">
				    <?php /* Primary navigation */
					wp_nav_menu( array(
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

		<div class="container">