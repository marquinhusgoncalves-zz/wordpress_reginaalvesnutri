<?php get_header(); ?>

    <div class="titulo" id="dicas">DICAS</div>
        <ol class="breadcrumb">
            <li class="active">Dicas</li>
            <li><a href="index.php?cat=2">Artigos</a></li>
            <li><a href="index.php?cat=4">Notícias</a></li>
        </ol>
    </div>

    <?php include ("loop-category.php") ?>
        
<?php get_footer(); ?>