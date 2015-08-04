<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'perfilexpositores'); //u567057051_perfi perfilexpositores

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root'); //u567057051_root root

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');  // q1w2e3r4..2# ''

/** nome do host do MySQL */
define('DB_HOST', 'localhost'); //mysql.hostinger.com.br  localhost

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'o{6.CYTn8K;d$oe6WC*nn5W58-C=46slcD^{D6^6v9lrlNcD3xEHwrt&c50$hwH(');
define('SECURE_AUTH_KEY',  'Hl*.z?}~1ej~4@EWej/z-Xb[DU2)7u 9vLJtM?U5c0e]6#I,f>-|;JI=Z{D=Buip');
define('LOGGED_IN_KEY',    ')fB+ssf8:JwI!]!&~#d85aB5>>@ 9QWT|R8]0QF[:j]ieVY-^(s=3Y<Qe;0/vl++');
define('NONCE_KEY',        '/-#?b`hBKbh+u<qU;67d^gwbEdTmLT~(P@KoL=FeaO266/Jp)zNBuYx6oj|+;d#s');
define('AUTH_SALT',        'MB/#h0vDSz-yoDw)qw9<YU_LNd2tOHgbIx3SdAc@^DF0W~EYpgJZT-6b8YbRd1Y/');
define('SECURE_AUTH_SALT', ';uVeeB>,RsQYe*]-K@r|Oq&*Y#:&$}}4N:.RtapXhE,rwD+zMDNZ-)Dp)dHb1`Ly');
define('LOGGED_IN_SALT',   '{c<)Zn{cZi+I|hFj87^U A*|<[sk#v3V:gij8&PWtKat-@U$Bi1MA7YnH?qC0-[O');
define('NONCE_SALT',       'k5zS#>aH]#9A)1pCAK5hkO}]V8qApg-,b{?wf@)APIeVq^1r_t[qvPgNN}`PA]1f');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
