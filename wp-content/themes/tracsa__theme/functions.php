<?php 


/*La primera línea le dice a WordPress que habilite las imágenes destacadas, si existe la función en nuestro WordPress. La segunda le pasa el tamaño por defecto para esas imágenes.*/
if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(150, 150);



?>