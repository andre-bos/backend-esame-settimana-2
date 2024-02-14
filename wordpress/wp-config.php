<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'wordpress_esame' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!WheI=][G/v.{:NUt:xb*2zPPRXxt]wj:KE]%,cj|]:=rJ/EGLroMq9Yu{#AWUSl' );
define( 'SECURE_AUTH_KEY',  ']h%@PViW/kV86 y(%.1~q~v(53256#&T]EmwX0PY+HvjJX2V$}lqa#PI(VZKb)!G' );
define( 'LOGGED_IN_KEY',    'YE:Wa3._gC(38OH(C[g!ibSXs@JonSYAVyjBs2:P|hubPd`{%lQ Ya+&|v^Yc9:U' );
define( 'NONCE_KEY',        'E-lj1V07$#BIFD2 wz~ErE,j}<j]`:JvCc3IuDt#we2Yck<4m?fEsSI^wMG/$mfh' );
define( 'AUTH_SALT',        '!|OTi@KM](@jR_xc7n :8$xNr{yiN/F(JN[$d9)/5>(`N+eP~.Tk=ju9SIr 5OWU' );
define( 'SECURE_AUTH_SALT', 'Ie:YT!Y&E{7d>p_k$*W>E{Ews-`T!o 297fBO i0=Yij64`> O,+pAr2A=8PX4v&' );
define( 'LOGGED_IN_SALT',   ',rj3|uF1s8|Y-F&anU1zA&a)m0pNL)N[X/8f/&B O%;[:Q `O`4,CS-DjO@~`v;T' );
define( 'NONCE_SALT',       '`Z~7C)LYb69>ohW]nL*zxDj.8F)=j*vI+?&L{mY{TzUE>YYgz]gLKX 1ST!Z*@)!' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
