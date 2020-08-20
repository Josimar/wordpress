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

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'controle' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'jbsappuser' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '4A35iUKmz3nkn7s' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
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
define( 'AUTH_KEY',         'Zh|4M=$yV}Q^0#G)laaS5q65Y9_AoQS+`TmhOo0rOr<9oS9y#uuYP/I_j3@{A=In' );
define( 'SECURE_AUTH_KEY',  'i//YKzV,s(Nu5_iI%n}y]oYj?;t$LineS_<nfGoh`>{x$H.HVXDb=E|OVZ_aC[#c' );
define( 'LOGGED_IN_KEY',    '}[=TJ~S1P_w+&P5B?Q4PR40/)PC9BK,r(h/yua32kBFbRaM4%1`(d([MHcCM_Mty' );
define( 'NONCE_KEY',        '0zi={^!.aX4wQzP#Fg4+8m31TH;[.U<=E8OoxgUF3L.Hrt53HAK:b85yFHk{gZ`9' );
define( 'AUTH_SALT',        '8!;c59u6b;~N?jtA@)5.D$A?.Xj`6r5isORk1;?Y9Rvs@-<esXn*g=G]e-]3B$S#' );
define( 'SECURE_AUTH_SALT', 'pBG[,Z~X~JX>=J3mCh$Y<{L4RgcA~^WGi.n?,+h*R+?}n=OzO9#j7`z-EuA(o&[=' );
define( 'LOGGED_IN_SALT',   'U<F7;_9#o!3lUIzJO>Mbs%|=`X:Z6v=K2Rq8|7Iw;.<*I2`Y{~)8Beui.,T(jU}9' );
define( 'NONCE_SALT',       'Uw$cvD{UAY)JX/-0)#zQ{3[TD,t1h}.lKSEv9^IKa/z:ohjG*DIk05lprQ&h_C]E' );

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
