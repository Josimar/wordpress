<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bitnami_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'bn_wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'af61a3adc3' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '94adf5f649ba7a74de6c8258d74512c7dee0e0e093992467daff6ae88c997957');
define('SECURE_AUTH_KEY', 'e7cf527fa8dee5225802ed92a3787b7498907d4ab79f9d2f5b6843267aa64368');
define('LOGGED_IN_KEY', '85fee487cc45b7782780b66785dda24ffdd8a9ff063f4b4077595bff2d3b53c8');
define('NONCE_KEY', '68de9f1f2820e6fc9bef0b0f15f456a3a33d8923012bfae41e9fd521ab76d5fe');
define('AUTH_SALT', 'e199727b4982f6ae662186d39decf7d1656615bb29529a01384401e68ac51127');
define('SECURE_AUTH_SALT', '25f1b187506865353e82b5786c7c02915b20c6c4301e01375f1f690306309476');
define('LOGGED_IN_SALT', '099c490eb91ccef4570ac33a3db2a76d32eddf043fd257c4c74774bc7ad9e430');
define('NONCE_SALT', 'c22f8c58a247f7b31f1671dbf7dfb9105d8319c8522db9c3d2864f82aeb1bc32');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
