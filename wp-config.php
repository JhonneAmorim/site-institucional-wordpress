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
define( 'DB_NAME', 'siteinstitucional' );

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
define( 'AUTH_KEY',         'OzDCLg4YpIKj~Fy7o)vEZVV8l<v7gVK@1x$CChrGU)0U-lS*X-2@FzlZ@=[7(Pix' );
define( 'SECURE_AUTH_KEY',  'WvR%4lfPB[KT?z7Lib=<>ZxwHE;e%k$*tDSu_>B90@|[KA&^- &gu4$Hp;t@h[:L' );
define( 'LOGGED_IN_KEY',    '~E1~<LSHIpk5@we%.2BJ{b@:y!VE6r.a&FVV^9I&b)=Ppk}#*!6)cS7IAwz^x,(^' );
define( 'NONCE_KEY',        '.QOWzLe?IVcxwFy4Z.[HGITm?A7MH%&iZ<-iFA`4Ofh_:!,#{XMc}[kPZ)N<4Xe/' );
define( 'AUTH_SALT',        'CLlV|0rSPeU-SSRry&gX.d$mS?I]*J) .Sdxw{6hWeC-NG&_HLB}#N=%Vo*hCOpJ' );
define( 'SECURE_AUTH_SALT', '{S+<m9znoJu6Uw?]%e&O?I#ytIcJ%(N&848-.m#q=9Y}t{=KRYy%`)e|%0aV;gn_' );
define( 'LOGGED_IN_SALT',   'q8<~Soco.s_vbyc^Cm-sr0TQV5/:!G;keM/<l-g,V! XFnTtBa3v8[&/5B%S=IrH' );
define( 'NONCE_SALT',       'U83yvLSTS<!lR].9g8dcbB[M~xk08#A(#+<<y/=3C7~FyuvDj7i|}D,I#MY EQ+8' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
