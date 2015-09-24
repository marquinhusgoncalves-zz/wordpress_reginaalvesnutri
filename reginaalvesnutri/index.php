<?php get_header(); ?>

<div>
	<?php echo do_shortcode("[metaslider id=20]"); ?>
</div>
<div class="container">
	<div class="col-sm-6 col-md-4">
		<div class="thumbnail">
			<div id="thumb_artigos">
				<h3 class="">ARTIGOS</h3>
			</div>
			<?php query_posts('category_name=artigos&showposts=1'); ?>
			<?php include ("chamada.php"); ?>
		</div>
	</div>
	<div class="col-sm-6 col-md-4">
		<div class="thumbnail">
			<div id="thumb_dicas">
				<h3 class="">DICAS</h3>
			</div>
			<?php query_posts('category_name=dicas&showposts=1'); ?>
			<?php include ("chamada.php") ?>
		</div>	
	</div>
	<div class="col-sm-6 col-md-4">
		<div class="thumbnail">
			<div id="thumb_noticias">
				<h3 class="">NOTÍCIAS</h3>
			</div>
			<?php query_posts('category_name=noticias&showposts=1'); ?>
			<?php include ("chamada.php") ?>
		</div>	
	</div>
</div>

<?php get_footer(); ?>