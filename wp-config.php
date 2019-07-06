<?php
# Database Configuration
define( 'DB_NAME', 'wp_firsttimegit' );
define( 'DB_USER', 'firsttimegit' );
define( 'DB_PASSWORD', 'sGWDMKRHZAsTNXybCgM2' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '+J^$WC5k22|JI1wL-[ZJ.Qj:as_$ALLWehs=A1pa%g{Yl7yEM,B95-IB&,8m[,eF');
define('SECURE_AUTH_KEY',  '?|B+ME6+e-5;L{~KwQ_1Y|~T-`C]P[{1?)aSats1`a]LOPuElO0 >I33qG7Pcc=6');
define('LOGGED_IN_KEY',    'uZ1Pa{**q+NtS>)D.B`# j5-ZNj,B$dJeZ7Qt{mjj|>(e!v/2&mh?L,`QWLF%(IZ');
define('NONCE_KEY',        'cU2x>lB5U^loM4gQx0fS9K>F=Pc@K_.FS5$?`wYo|.CC2k:cN&qc|:z%4Wx$1E>E');
define('AUTH_SALT',        'Y6nCBP*`rg]xA7?&+@@jb(2WSvQ~/8iq|SU-+,<_63vQ:tV#_twb$9[/e+_5n5y ');
define('SECURE_AUTH_SALT', 'ohtuNd#=7jW3Y|p+<wG Fq~9j*t|]BRnw jZw2*$pCLp*MiIT8X:9p_A{xM.YC0(');
define('LOGGED_IN_SALT',   't}K.w`)&NL2|c|l:23<P_m*u6|#MAo50NtzXsZ; k:`kmU]v:U9M%sJP1v.(}t=|');
define('NONCE_SALT',       'N/Wgr?/vL<Y)g/o}Neq^#FjPrMkfsdMz=z<0+Ojg4p/q-sXKX!l &^4-peGmAKhk');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'firsttimegit' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'a9f11f255b6974977ce924cb4b5e78f139d9c458' );

define( 'WPE_CLUSTER_ID', '101123' );

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

$wpe_all_domains=array ( 0 => 'firsttimegit.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-101123', );

$wpe_special_ips=array ( 0 => '104.197.190.110', );

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
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
