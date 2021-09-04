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
define( 'DB_NAME', 'coomprei_bd' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '96}OkS0IM:)Y7fs$<*=n6rb8<K2}.H)Nt87uxvMp_aO(t2G[OnrXGo&t%S-r&,j;' );
define( 'SECURE_AUTH_KEY',  'GSLO[z5tUYT6V#W l,fo1^JrIH!g9Eoe{u8HE=1a<u[<u>j,2s7wn#:/m=u;eVYT' );
define( 'LOGGED_IN_KEY',    'Mt)D=PFz+nFE)Y=4v%P%^Mp@c}n|~1UoV9V0;$)x8isnY^dyEL1Eu-g_|1 X_y%X' );
define( 'NONCE_KEY',        'bw|%oygyAqcOi=4SsTF^^ qVAs/j|9rN)90lPOUw5jq)%/ttqg7ZblwgSx4Vy>|l' );
define( 'AUTH_SALT',        '(A9c=x:&HXPG:EVjY~A,>:H5Ki2<b8A{n0|sNwPI&$F=nX//IWrm+*RNCQ5fPVLG' );
define( 'SECURE_AUTH_SALT', 'hq~N~?WU?*1@F4ob08NGY0eP%;C=_&0c/P2P`w,4o;?|UXNA Y{SR,Og?!*pe|l3' );
define( 'LOGGED_IN_SALT',   'Lp{2s+PF6q7hEspa:{alq* %>*E<Ou4*]:!39]=Z1,*S6@!an$+[c.,iS_#yARf~' );
define( 'NONCE_SALT',       'kb<N708x<OcM_{v79?NVJ%pZ xFHRh][%t%rIpg]WI#!q.)ec/+M;@Q}F:vqsLkL' );

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
