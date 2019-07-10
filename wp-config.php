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
define( 'FS_METHOD', 'direct' );
// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'contact' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', 'rafa2112' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY', 'qIEq%n)kMx^&rx@<GI,*@,TH?efD39D%k7}QEbA/t(ZI?W)#SpX54L+6<<$q?OqM' );
define( 'SECURE_AUTH_KEY', 'gTsY8IB?o4c{M2UGvxY9SvebPj,r@Te4G BLz.Y)}R]UI4kV$+jB?O}18N[O]2k%' );
define( 'LOGGED_IN_KEY', 'C.s s#,V~i_JHL5OV0Srf|_F7%Fc?#/^i&J?5F#tAO)pWNT}a(ayCBl4T=2gD1=(' );
define( 'NONCE_KEY', ')P{^!Vhc:K}LPW5n]2mp<Six*B`DZw?=J|G|90pjl8THUL@MyrlJ]K},B#4kD#/T' );
define( 'AUTH_SALT', '[;{7:@}y:k<nj^c$]D%ku=Jf$m#M$(MDshH9xeU)i>gsa}88wdVL-@S#XG~^FPfl' );
define( 'SECURE_AUTH_SALT', ';:R;yte`Q66nS`40BXY.{Dko5z=Cc*e&)UX/}9*!/H$)!OYMq@s(nQ6 ]mQR`o)7' );
define( 'LOGGED_IN_SALT', 'DWeU)fVnSa0xxT3l)RQaQRQxtuTbaG=PiF6i5rDe5c40(6s-%C e.&x15:gze3Lu' );
define( 'NONCE_SALT', '?P v|#k)N/w`6^*0ez5;?3lTJIva6}y0%Dctq_?dsCk[mfJ/rm}v9_fN:M1|H#I3' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


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

