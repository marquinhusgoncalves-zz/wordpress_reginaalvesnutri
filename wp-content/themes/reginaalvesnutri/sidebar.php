<?php
/**
 * @package WordPress
 * @since reginaalvesnutri
 */
?>
<div class = "widget-area col-md-4 col-sm-12" role = "complementary" style="background: none repeat scroll 0% 0% #6C1F1F; color: #FFF; padding-bottom: 10px; padding-left: 30px;">
	
	<?php do_action( 'before_sidebar' ); ?>

	<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
	
		<aside id = "search" class = "widget widget_search">
			<?php get_search_form(); ?>
		</aside>
	
		<aside id = "archives" class = "widget widget_archive">
			<h4 class = "widget-title"><?php _e( 'Archives', '' ); ?></h4>
			<ul>
				<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
			</ul>
		</aside>
	
		<aside id = "meta" class = "widget widget_meta">
			<h4 class = "widget-title"><?php _e( 'Meta', '' ); ?></h4>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<?php wp_meta(); ?>
			</ul>
		</aside>
	<?php endif; // end sidebar widget area ?>
</div><!-- #secondary .widget-area -->