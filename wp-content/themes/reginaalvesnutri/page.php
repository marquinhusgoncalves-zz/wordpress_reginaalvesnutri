<?php get_header(); ?>

<div id="conteudo">
        <div id="artigos">
			<?php if(have_posts()) :while (have_posts()) : the_post(); ?>
			<article class="post">
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<?php the_content(); ?>
			</article>
		</div>
	<?php endwhile;

	else :
		echo '<p> Nenhum artigo encontrado </p>';

	endif; ?>

</div>

<?php get_footer(); ?>