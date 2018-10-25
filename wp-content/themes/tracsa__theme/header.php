<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 <head>
   <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="Tracsa es una compañía líder en el mercado agroindustrial desde 1989 fabricando correas de resistencia pvc, de goma, de poliuretano, revestimientos para caños, cangilones.">
   <meta name="keywords" content=" correas, resistencia, video, alta, correas de pvc, Correas goma, revestimientos para caño, Empalmes, Cangilones, Daver, Velta, Granos, Acopios, Silos, Puertos, Tracsa">
   <!-- open-Global site tag (gtag.js) - Google Analytics -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112413930-1"></script>
   <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-112413930-1');
   </script>
   <!-- close-Global site tag (gtag.js) - Google Analytics -->
   <!-- Smartsupp Live Chat script -->
   <script type="text/javascript">
      var _smartsupp = _smartsupp || {};
      _smartsupp.key = '6ebd2f12f3239b12e57ad8525d5185748e57477f';
      window.smartsupp||(function(d) {
      var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
      s=d.getElementsByTagName('script')[0];c=d.createElement('script');
      c.type='text/javascript';c.charset='utf-8';c.async=true;
      c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
      smartsupp('language', 'es');
      })(document);
   </script>
   <!-- End of Smartsupp Live Chat script -->
   <!-- normalize -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css">
   <!-- google font montserrat -->
   <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">
   <!-- google icons -->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
   <!-- Fabicon -->
   <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/image/quienes.png" />   
	<!-- Hoja de estilos css -->
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
   <?php wp_head(); ?>
 </head>
 <body <?php body_class(); ?>>
	