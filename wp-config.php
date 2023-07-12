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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'tema_apolo');

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'user');

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'pass' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'AUj_kZ-V-Oi9`)HKF-[-[x&In~-AJKfX/(0kLSN`U3{8Ar?t.my{&<49Gs]X*2gW' );
define( 'SECURE_AUTH_KEY',  'ytrR>n%JB^5b?e|@A!eZ#w;dAgS]mOf,3dZmp~/.g6r=n8>tGu>7ZiWfn!d/Zi4_' );
define( 'LOGGED_IN_KEY',    '-uUo1FxD9U(hMM15R`m+ [R6|K/Kz0|5mSeQ8)1i@c]zDTy9d*K3n-Yi:7FtG=fu' );
define( 'NONCE_KEY',        '<=LW$z{Tq l)ZluPniDafQk~OP6,Fv-z_@j`EYY.B,ON*{Sv/cN_=uAUWKE0P=GM' );
define( 'AUTH_SALT',        'qCsp$u7I2J]Y(WJz#8$YdG=e,8y$QjmUSGgEr96n03dX,_E^Y#~*p|Ca{Z|Mxx1s' );
define( 'SECURE_AUTH_SALT', '}[?|rt.mbc[Ges>$#,R>lQKCD2O(uEpHt5Y_~[sOJ:67O.TJhWZSFqZYEk5J+G3)' );
define( 'LOGGED_IN_SALT',   'p@,[a!*wXv*oUj4#I-EDC!KRaN{HxY /o^;Dobn{2TDFoEdjB_uEY$!kO4%_z_HU' );
define( 'NONCE_SALT',       ' .yH5|GT`Bic~Pj}$=(;&MOc-I/xkcn,i<$&JYDSw(/6#Qg(WzjVeTS=IZZ+8UbJ' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'ap4_';

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
