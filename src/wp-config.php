<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'faded' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'fT4{U g[ (X4!mX( `L$l3D{i8!6)/b[Wu=LXEg0T.In!L{AsDNh53<1w#oFI^A.' );
define( 'SECURE_AUTH_KEY',  '_/^ne8`B =(S~4ss5shCBO<y7/V#<;GM2Rtn)=+hB-^T.gkc2VI!BEu3[K+a-]jD' );
define( 'LOGGED_IN_KEY',    'x jFk5rQL^HWKE.+9X1`,Z+5wa:<qFkVeKecqB@_xqO2Z:-d`enWwe0V<<@5UP+H' );
define( 'NONCE_KEY',        '3Y Iu5zzWMO,|MiJ}I>gP~b(b1Mqe/2;$XaJ(qz+GC~q7wXd-mFh,grbZJhlCET^' );
define( 'AUTH_SALT',        'ZpG8sj&aV:vjNk4_*a9YKnDz{6a=Bj]9&GmH&!#.t6K;V;spDb*/L=h ?<{X?/$%' );
define( 'SECURE_AUTH_SALT', 'a(#4e<)}Gq1pQh~t$?1G|<9?|l2$*V5Ai eC5bR<y/8<2REm`n1N--UW%|:KnAoK' );
define( 'LOGGED_IN_SALT',   'a&2*?`)xwWDZ/OjnrrkV Ny:Y;0=(o5&O:-Z2^VXf4jmYnp1aGy)_6V.&Flzv2<i' );
define( 'NONCE_SALT',       '[: zDiH0[EkbZ;mQHfWKzJb[Adq^@L1=!#!DwLeyQK#BDHQp1Fb!qV>k8}b.J!vE' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'fdhub_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
