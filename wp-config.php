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
define( 'DB_NAME', 'www.pelletteriagiumar.it' );

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
define( 'AUTH_KEY',         'N@])^b1mGsoE`podMnzomt`!aGq #d.fW-[ygI/19E1MX_8jG^eRpH$UXM-~Wb|i' );
define( 'SECURE_AUTH_KEY',  '9M;usc1ezp52hH6/|tm3.zX.d8|Uj@8nC&^*)TmpGW5Vvi#8x88ptAur/e](0aV|' );
define( 'LOGGED_IN_KEY',    'y`5+>>8ywv$9G_)!<%WJb=x}20L_S.HH5GsR8);ZV@))7Psu~z|prW*6shZu8S+F' );
define( 'NONCE_KEY',        'z|HIEYVlqaJ4BZ Kp,*G548w,R8u5[1##S<Nv;D[_4+DnoVdN.qqf{W[wR/i|N -' );
define( 'AUTH_SALT',        '>`^)B`+6`J8ofKl96-./l=TnMRdyAw}gEmvwwg-FHNsMi%^+;1Qu9L!BNchurbGM' );
define( 'SECURE_AUTH_SALT', 'fT:h^t$`8LUwO}bs{aK7&G m8fQ>{u }oA&0krvMy@o^wJwBu{A[iYL*Q4=gAp*=' );
define( 'LOGGED_IN_SALT',   'KrIJ7p&M%]LT;`@GK_.yba_iT5nC@cGOrSU2<a!=gvy/+$!]>i(VF~O6b&P@AB#o' );
define( 'NONCE_SALT',       'mk|)bjOk?x.Nx@nx~XINRxNZZil9]SG+G6_p%!PTE95 Y ^z8:v/+;u{oQM3WxPi' );

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

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
