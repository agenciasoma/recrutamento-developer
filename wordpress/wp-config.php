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
define( 'DB_NAME', 'avaliacaodb' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'suporte' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'recrutamento' );

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
define( 'AUTH_KEY',         '@C=T5m|s~NSWZ{|=31je-n&I(.`Nuc6=Lo%LTXzgR*V_TIwn;k3+(V@./9I Xpxu' );
define( 'SECURE_AUTH_KEY',  ',3/jrLZ7Uu#q*&{Ua&,w+Gv6m$]kwGh4>(/)x/TG$f]ZxR$[$LQ:3Bb~*$@>Ys:?' );
define( 'LOGGED_IN_KEY',    '+9>aC?)--OkP%dHu r8Kipq6SL<35I<mZZ_I+QfY#%o__+H10/#(_W<k}-N2!N^3' );
define( 'NONCE_KEY',        'h( y[<hbDp}J}DH%&{u8Za-rE.PwtR&Qj#iZ4r+cu0y%rhmUo0UEtt5P<ST*`>X}' );
define( 'AUTH_SALT',        'xXy:y{DY5fYIej^^q:yKH.R(RM,J3hf[e}`,JFII},^P3|e(Q:wRl@O>Yj|5suCl' );
define( 'SECURE_AUTH_SALT', 'O5&c1r5t5-._d58mtlv^5<Px~tPc:E]d4^M:PifCADNG, V`}KoP=kW}MIYD/l;{' );
define( 'LOGGED_IN_SALT',   'Djq>[|sKGGnaRWxcMehPd#BCrna`VHo`>r_b*4AKmp[HBU<*O)#sfI36z-6Lf8.{' );
define( 'NONCE_SALT',       'x-~5aOL#]_*3:vxd(2wY@,lOu,p5~31q=T<9qq|N46.r;P#IEAb]4j[f@GIQ/8lt' );

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
