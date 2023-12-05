<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordspress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:3310' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'c4;JeOw(h,E~D~_I9zxKs7ar~n 8W5vWCJ:o:# ]]7/{?]cPclLh~kXW:&gRL5HC' );
define( 'SECURE_AUTH_KEY',  'bi{0Y&O-D9cL^#$(VG$H-&;d`=1#60^?c gw6BfG_mD?G<.lE`{>2WcpP%[`knD~' );
define( 'LOGGED_IN_KEY',    '(C*2n/2_2=7>X mMP?g6qH]J>8M5X|o/DS9nIz~a_;q?*pl_vcMXk0`80&1ad8it' );
define( 'NONCE_KEY',        '~E&ZQX|o5/$c,5lsN?TFb8fbsR~VX4@]K<&zI&x55N|7{sZ5$|WnOgX7Bh0TZDxq' );
define( 'AUTH_SALT',        'MUT Nv]_@{Ez%hrb/SEGkr`JD6Tt]ig0,mTt?l1I<4i#Gq[mSnR$aFgrPq|r[te6' );
define( 'SECURE_AUTH_SALT', '|: ,>.?{l`@#e4a3$Hk{e(k4_th41%@vzx,eC>n3sj|t(y6lfDj{,,@x2`_.xr.n' );
define( 'LOGGED_IN_SALT',   'x:S[3wP}9,s,|CZ7(k~#oH0k%|_`D3Wc8:9c#jA=9`]CTBqZJ/Kd2a6_LIM$a2pz' );
define( 'NONCE_SALT',       'P]E2]4$e`.>/eFN-``g+zI;C4G)_,?TA~V&a#W]L&+hH)lU$yrpnkX-jCXl<}Um`' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
