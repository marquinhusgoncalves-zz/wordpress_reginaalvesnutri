<?php get_header(); ?>

    <div class="titulo" id="noticias">NOTÍCIAS</div>
        <ol class="breadcrumb">
            <li class="active">Notícias</li>
            <li><a href="#">Artigos</a></li>
            <li><a href="W">Dicas</a></li>
        </ol>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-8 blog-main" id="lista">
                <div class="blog-post">
                    <?php if(have_posts()) :while (have_posts()) : the_post(); ?>
                    
                        <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <span><?php the_time("d/m/Y"); ?></span>
                        <div style="max-width: 100%; height: 30px"></div>
                        
                        <p class="blog-post-meta"<?php the_content(); ?>
                    
                
                    <?php endwhile;

                    else :
                        echo '<p> Nenhum artigo encontrado </p>';

                    endif; ?>

                </div>
            </div>
        </div>
            
<?php get_footer(); ?>