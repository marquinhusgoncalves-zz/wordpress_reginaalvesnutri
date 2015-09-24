<?php get_header(); ?>
  
    <div class="titulo" id="artigos">ARTIGOS</div>
        <ol class="breadcrumb">
            <li class="active">Artigos</li>
            <li><a href="index.php?cat=3">Dicas</a></li>
            <li><a href="index.php?cat=4">Notícias</a></li>
        </ol>
    </div>

    <?php include ("loop-category.php") ?>
        
<?php get_footer(); ?>