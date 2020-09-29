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
define( 'DB_NAME', 'stest' );

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
define( 'AUTH_KEY',         'N>Sy39-7aoU$/F}i@;S>ua!F1C=$B<zz;y[FM&P. =ZH7(+&o1k1-2SL+&qK,N!q' );
define( 'SECURE_AUTH_KEY',  'j5]*f5?Q~_;zSN?:b}Y1iU=}NV,Q/k=z;zkjOd#Vh3Yl8#Oth)GrVd0?KI#0O:zN' );
define( 'LOGGED_IN_KEY',    'AR `@**(?nIn*s;:*Zu8@Yz21C^8Z6b-4Qy-x~NH5pwVEy9MGZq,0IMx5mKXgwJM' );
define( 'NONCE_KEY',        '5v_NtX=twx>cU#eB|oL=7Vakn(93hr}X7FNXU[fb%$ Ng5R_xw;%^.q, nW[R=bn' );
define( 'AUTH_SALT',        '?uf<#Rw#6`[<.olZl?KJ,c?<-#X=l%*UBtZWM_q>bBSZgthGKo0]V/Cpv6c-Xj8{' );
define( 'SECURE_AUTH_SALT', '6L6g{WSxan74GS)}vf^7,PsPDEQ~r]k`TX&o6|jWNP7rrN:[qZ4U,Li,cP-J93j<' );
define( 'LOGGED_IN_SALT',   'Ta?%.. ,)BypW6|Q>^,|/)^vVZ-3tl8Sk6dxi W!^ueNY&ofdICCAvV5^3<.2=kl' );
define( 'NONCE_SALT',       'F:s{,`)7yLbD<<1sNNwH57@4e7<tH#LCW~p<1|&z??^s:0CKMh4$1w,1ni-GQzT<' );

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
