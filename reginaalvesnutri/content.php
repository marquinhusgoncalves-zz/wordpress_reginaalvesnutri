<?php
/**
 * @package reginaalvesnutri
 */
?>

<div class="post col-sm-6">

	<article id="post-<?php the_ID(); ?>">
		<div class="blog-item-wrap">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ></a>
		</div>

		<div class="post-inner-content">
			<header class="entry-header page-header" style="margin: 0 !important;">
				<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">  
					<h1 class="entry-title" style="margin: 10px 0 !important;">
						<a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo wp_trim_words( get_the_title(), 5 ); ?></a>
					</h1>
				</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->
	
			<div class="entry-content" style="margin: 0 !important;">
				<?php the_excerpt(25); ?>
				<div style="display: inline-block" style="margin-top: 7px">
					<a class="btn btn-default read-more" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php _e( 'Leia mais' ); ?></a>
				</div>
				<div style="float: right">
					<div style="display: inline-block">
						<div class="img-category"><?php the_post_thumbnail(); ?></div>
					</div>
					<p id="categoria-dicas"><?php $taxonomy = 'category'; ?></p>
				</div>
			</div>
		</div>

	</article><!-- #post-## -->
</div>