<?php
# Database Configuration
define( 'DB_NAME', 'wp_giovanny' );
define( 'DB_USER', 'giovanny' );
define( 'DB_PASSWORD', 'I0XcMupWqvH0Y0yhRr0j' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'b`~]*cNpfynDRr&K;ssI1,YIe-C_Y&)=+!rjH,m+4^a~-RZ9#[5KnIsK1gD.jCol');
define('SECURE_AUTH_KEY',  'an(1C<cYQ=lM1F1/?A#AFScMaw$M-cay/OmTrT`0 #:ON<>P@+hKRCp6r{gKru(A');
define('LOGGED_IN_KEY',    '6zZp2[kljv^x`.e(-eF@=;/](!UZ&H]Y5P_4Dt }VmzwXp0*oVA,Cd(W[LUu- ^&');
define('NONCE_KEY',        'XRBZ=A>smccy{#mQ+8;~M~il,bp Av3DvWWO bdO @=`Q=Qy<s6Pp^S<|_GBc+F+');
define('AUTH_SALT',        '_hn7AH&|tOSZ$cp.gsU y/5^5iG1 U@7dTF93Lv/$3+Dw65kwQm_upI>JT~7NeQS');
define('SECURE_AUTH_SALT', 'YP}9k46a~0.As`20pP~)}p3@l+?/E=E]!6_[.}vHpeCMjLTN}?1mszQRl[Ut*iNc');
define('LOGGED_IN_SALT',   'jZt?K}GwMonz B0(t`m0d|21_&U3yJrq4C.{]A|r[>)AT4}x48?Z7#1Ebxo/TE}h');
define('NONCE_SALT',       'dl#xQ|5B%/%)wK5<Y%]-Mw+&:]%dXN^`hvp=9A:49Xs-+SSEoTNgXK=U|Rhp(PN7');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'giovanny' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'abe3518325720520f1348b31ff1009faf1cda225' );

define( 'WPE_CLUSTER_ID', '120205' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'giovanny.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-120205', );

$wpe_special_ips=array ( 0 => '35.196.100.184', );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
