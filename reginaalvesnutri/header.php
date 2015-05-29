<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<meta name="author" content=“Marquinhus Goncalves“>
	<meta name="description" content=“Regina Alves Nutricionista tudo sobre nutricao”>
	<meta name="keywords" content=“Nutricao, alimentacao, personal diet, controle de peso“>
	<meta name="robots" content="index, follow">
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="icon" href="<?php bloginfo('stylesheet_directory');?>/img/favicon.ico">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript">jQuery(function($) {$("li#menu-item-59").children("a").attr('href', "#");});</script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script> 
	<script type="text/javascript">
		
		function initialize() {
			var myLatlng = new google.maps.LatLng(-23.606657, -46.652769);
			var mapOptions = {
				zoom: 18,
				center: myLatlng,
				disableDefaultUI: false,
				scrollwheel: false,
				draggable: false
			}
			var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
			
			var marker = new google.maps.Marker({
				position: myLatlng,
				map: map,
				title: 'Regina Alves Nutricionista'
			});
			
			var styles = [
			{
				stylers: [
				{ hue: "#6C1F1F" },
				{ saturation: -20 }
				]
			},{
				featureType: "road",
				elementType: "geometry",
				stylers: [
				{ lightness: 100 },
				{ visibility: "simplified" }
				]
			},{
				featureType: "road.local",
				elementType: "labels",
			}
			];

			map.setOptions({styles: styles});
		}
		
		google.maps.event.addDomListener(window, 'load', initialize);
		
	</script>
	<?php wp_head(); ?>
</head>

<body>
	<div id="stage">
		
		<header id = "masthead" class = "container" role = "banner">

			<div class = "col-xs-1 col-sm-3" style = "margin: 10px 0; padding: 0">
				<a href = "<?php echo esc_url( home_url( '/' ) ); ?>" title = '<?php bloginfo( 'name' ); ?>' rel="home">
					<img id="logo" src = "<?php bloginfo('stylesheet_directory');?>/img/logo.png" />
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