<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'tracsabr');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'ingclaudioquiroz');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'Claudioquiroz.1234');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', '190.228.29.195');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'J/hK=|?2SwVza=k-@(%[:%|3JfWC!+~X``;%AyW.kI,n1DdNnu=7#HyxPRr{-jk8');
define('SECURE_AUTH_KEY', 'aA~Y=bZv510VA,&:vzweBZO8&I{w[ C{;&|a{c73ryBv7m^VH=N`SP-6N<]F.|RW');
define('LOGGED_IN_KEY', 'sC]@5PrFhgkG[z1xFuT0B%-,ARiG1;*n9v5EG T/h+adGO;W=Kx]>RF+,11LzJjI');
define('NONCE_KEY', 'W#pf6*i}E#3G`mevVM?T^?!1P5+k;s2pMCYtRCz#n=(SzZa*&OYT#@23<A@m}GU+');
define('AUTH_SALT', 'c-Cg)U0FJMFi[4mjaTZ+ng.}__ !sC|u5/Wg80Pl-m{<tAEg|YoM`^<}$nh(=726');
define('SECURE_AUTH_SALT', '2_=X5A@!G.2shn[$r84gQO{zz@J?(T74u?0b&u}!8e8RFxRCzQ3|%4lZtBR6Yktr');
define('LOGGED_IN_SALT', 'CEJ;.8!6oi[?#x*)*ESIl*9>M.;veF2x>CF.3LV(0VXSDl4|(qhbKj`CV}?w12]S');
define('NONCE_SALT', 'lxA&K[T2*ikEfGAd&T&<S#;5K.yc4>5t>K^RnQnb;q()SlAgIOVOjqjKoZzz85(v');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

