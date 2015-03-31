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
define('DB_NAME', 'machuca');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', '`*5:GO%z|]{d` eYA2[[/rA]$Hx |%m=0nT^xA+p-&m}]1N!*iEB`=XV?o,B2jOv');
define('SECURE_AUTH_KEY', 'z{_dcgKlk86>S!kNc/i~TLIQ|--/!>@sQjG<O3@l}R43H~UjKGx|vUI4t<.{|GAq');
define('LOGGED_IN_KEY', 'it5DX{aK>=WY42J2+B?9C!A|48EhJVEK1*b(npS0=CN<`yEb]:E(FiC0%HXwZJ+n');
define('NONCE_KEY', '$XlB~W-#qvSSuTVpFct<^8v9h+Ol]@:;!g3qTv{4y}tv@{Q>{>_c3v<I~9)%PpKK');
define('AUTH_SALT', '0ak64v-ttBcjM[^,`e(%,|CF(L8+B^KDMJ=XZv>K,X0$wR[Rh{RIb^Jof}(}0Mq.');
define('SECURE_AUTH_SALT', ',54{%`)Zc+Io>MMr&#|cwFYdtEp)0(:b>#J<3.|x1N=umJ|AY!_u39(.K|7!{?ou');
define('LOGGED_IN_SALT', 'ZwrI.7_{Ia8c60FQ<0,bF2ClNQjc;r)p|CU&J2ri??Wuw(gNsMAuN!%#{cs8:?Ab');
define('NONCE_SALT', '9*7cX-|p0~OC$M4z5%RlVk,E!b~q[!|=T&04AaS:UcHTfdV]qs>K(ptX?ED5xpQ&');

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

