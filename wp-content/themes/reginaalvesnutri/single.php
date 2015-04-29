<?php
$post = $wp_query->post;
/* se for a categoria artigos */
if (in_category('artigos')) {
include (TEMPLATEPATH.'/single-artigos.php');
return;
}
/* se for a categoria dicas */	
if (in_category('dicas')) {
include (TEMPLATEPATH.'/single-dicas.php');
return;
}
/* se for a categoria noticias */	
if (in_category('noticias')) {
include (TEMPLATEPATH.'/single-noticias.php');
return;
}
/* se não for nenhuma das categorias acima */
else { ?>
<? include (TEMPLATEPATH.'/single-default.php'); ?>
<?php } ?>