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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'blog' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '210683' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '<;`,5/)>hClrFL<VG7uf;I( & VMo&Nu0NIVx v-s?nyV7&o6w6 NeqnID4{?*cr' );
define( 'SECURE_AUTH_KEY',  '~[I~f786PX516xCWRdg9! 22:GGQYK-kq71dV9ggh`O#z+VxMs>EX)i`52)+: iK' );
define( 'LOGGED_IN_KEY',    '>^VP1G3G^{b]rq(!/`QbRHJMZ#ADfd1{b`Dv|rY]lK@2`OKs=EF+0k7gbB/gFnN?' );
define( 'NONCE_KEY',        '`U,|S{=rP:w>@>aBZYNhv*)_cN5l:-kFN;]%,z6v]>%_0pJbkcPMA$rFS91kla,W' );
define( 'AUTH_SALT',        '1IFb7Qx^/u{K>7ckj_3rgzaV )a iI|;}DrN?qR2,H@t-|M*=`1q#KfN*9MBSQ*?' );
define( 'SECURE_AUTH_SALT', 'P~kcQSKBc4,s/v}3+Pf_`sknt^=,{KPpjl#jpa b|b]nD_<@T3a<QOlGiilOre/I' );
define( 'LOGGED_IN_SALT',   'KhnSJP%hcRa[NNNv6&e}LnP)e@;qB|*ZX_<huT,jIAgt!Y(4p9&b98gA99?(@vvd' );
define( 'NONCE_SALT',       'IMXA}4rFBc}^2 [k.QHadDb-<ZV*4?UEb>88E<D25w]/7=z83Y<Oi.3eIY>hZ%Ca' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
