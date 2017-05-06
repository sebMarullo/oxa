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
define('DB_NAME', 'w2000469_oxaphar');

/** Deshabilito WP_CRON */
define('DISABLE_WP_CRON', true);

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'w2000469_oxaphar');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'GA30tefuwa');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', 'r8hM-JZI~9avy8;8:`D)>#HPi^3F^q{%mdo]y/)!PE=q2CC[qGHNd-a}y^1^AttQ');
define('SECURE_AUTH_KEY', 'g@&>Sw|}hPxaY|QCpY?I&Ww$o:&?5h_^VmHZ+p21pESespMC57{y8O);PZ&#UpGX');
define('LOGGED_IN_KEY', 'r~K?>Z?/[YzF D/C@w&lln!_H.m<[mzJwJkA-Y30XQUAD6jU49UPll|i(O|Y4@0G');
define('NONCE_KEY', '&^~~uC]i6a~+mO-.1T]Nv/d,W/4)_TR~5j$tIBiZ:3=I1(Ge )Uw8T67GhR8$iOh');
define('AUTH_SALT', 'f%b4X)TDMxW&%6;|*G/BdW||/cS,s5*K)7IJv#d:n%rzY`iU186S;<m<U6j,tCpo');
define('SECURE_AUTH_SALT', '@{ yX@v_Tx9E>e_$IM94 3?93Q?O2yr9. O_x>% W6,Yw;r }^P0&TeSsN#BMjsv');
define('LOGGED_IN_SALT', 'Euq4)rV ,6ouoNnWaE$T=u)k(|lV#UHYQz!fz5q3)clX`wZ1^DQR~wygi`[gOJK@');
define('NONCE_SALT', 'dbaD&q0P*`b{6;,Jf]$NSN?BTPk<IW?L^&xmTIm?uS.?:PTBfVVi[9 m36~a7G21');

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

