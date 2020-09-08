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
define( 'DB_NAME', 'DB_RANGAO' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'Babuin@08' );

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
define( 'AUTH_KEY',         ')=b* T1UO]$Ku#&=iA~KC=XVnFBB3C};RKSQ6m5.Nvo7Cg zp*id<}nOKX>Bd4zE' );
define( 'SECURE_AUTH_KEY',  'EnH(~~}m@!727<D$BJBafI@.BqB#kvs#O zK&rS2ljL@F24AaBBK%%l^PY36M9+{' );
define( 'LOGGED_IN_KEY',    'w9KGLM#Psb#sW_D+yHfG$|0?G4pN*jTJ->%y=sZVS%kOW8TP?)j`hiB,Pi3/&*<*' );
define( 'NONCE_KEY',        '7Lt%QDwK~n[]:))n``Y*zwArV}$i{[g=B2-T#jsMN{LZ*`#d*],&Z}=1X5RmzeIe' );
define( 'AUTH_SALT',        '=!$z5o]KVgN4%q^EXU}Tqs#03I[Lf>eKZ7C~OTE1%~Pg5}176;Z^pRt5$.sEArmr' );
define( 'SECURE_AUTH_SALT', 'mEC:]mQssQ~8_/Ch9isG(yFcB+|]=FcHKh};|_B`Swb0&eZWUZ4AzV QNW.T6Ua)' );
define( 'LOGGED_IN_SALT',   'stn%j2w)ku&Aft,G(F~x_+d0aJS9fl+I@uxyteyDJZo$4]O^abEMS.;a(xU/CN?V' );
define( 'NONCE_SALT',       '#octVFltVQp;]zmm[`<mY$`[fA}y1M{Yf~*<5VvVJ*rC8CO$ wmj6#<w%OpAC^ t' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_rangao_';

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
