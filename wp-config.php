<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för databas
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Databasinställningar - åtkomstuppgifter för databasen får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'testwordpress_db' );

/** Databasens användarnamn */
define( 'DB_USER', 'root' );

/** Databasens lösenord */
define( 'DB_PASSWORD', '' );

/** Databasserver */
define( 'DB_HOST', 'localhost' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-m9#n1klO)}Jh&tGU.RO,jDs)ASLwg7ux^zA7}S6EOIN#<pDTZ]b`OBT#^I*z+Iy' );
define( 'SECURE_AUTH_KEY',  '3;|~&HbnyNw_Uk?;g#F<q#fvzt7RM;)_pXv>i=j,w*1,1n@A:v}y^tlE&2OL:%~P' );
define( 'LOGGED_IN_KEY',    'CM^5jmvQqGZAoOa#(*Dq!-a#UnB2=>1x YwqQZ`+vmaNa`N-;cz}uTaU7>rMWhcU' );
define( 'NONCE_KEY',        'hk=<REESH~8[X5)_2z-(fH^V@`$P&w}w/IAKdE:qa7U:c<_Snq)PQlTVow(D`T?2' );
define( 'AUTH_SALT',        'DG966*OvwID4,cx5~cx}_l(*^=~9F]+ L1{b-`k^0+Q^^r,@gex6kg76u2ZL_Xvd' );
define( 'SECURE_AUTH_SALT', '=$Z[lY[1!=t`oO#Cyr:m[I)=M{lNUZ;$|,>&2_mg<`v4w$4gSquS5znR7$+([A9i' );
define( 'LOGGED_IN_SALT',   'LO~0f!o6$|_!l8hb>=rr0A`cs0T4Rhh*vio68Cr~VFFJ_,Yc,:LN6QN&P,`ahy5p' );
define( 'NONCE_SALT',       '8DSQZ~33x9N&=/JM{0|-`B65Agn&;=4bV&UtBe5~kTU+N/7iU6(]JX{c0d&-/n[H' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);
/* Lägg in eventuella anpassade värden mellan denna rad och raden med "sluta redigera här". */




/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');