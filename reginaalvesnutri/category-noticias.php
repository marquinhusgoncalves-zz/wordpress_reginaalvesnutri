<?php get_header(); ?>

    <div class="titulo" id="noticias">NOTÍCIAS</div>
        <ol class="breadcrumb">
            <li class="active">Notícias</li>
            <li><a href="index.php?cat=2">Artigos</a></li>
            <li><a href="index.php?cat=3">Dicas</a></li>
        </ol>
    </div>

    <?php include ("loop-category.php") ?>

<?php get_footer(); ?>