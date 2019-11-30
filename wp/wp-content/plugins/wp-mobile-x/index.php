<?php
/**
 * Plugin Name: WP Mobile X
 * Plugin URI: https://www.wpcom.cn
 * Description: WordPress手机主题
 * Version: 1.2.6
 * Author: WPCOM
 * Author URI: https://www.wpcom.cn
 * Text Domain: wpcom
 * Domain Path: /lang
 * Network: True
 */

define( 'MobX_VERSION', '1.2.6' );

if(DIRECTORY_SEPARATOR === "\\"){
    $dir = str_replace(untrailingslashit(ABSPATH), '', plugin_dir_path( __FILE__ ));
    $dir = untrailingslashit(ABSPATH) . str_replace('\\', '/', $dir);
}else{
    $dir = plugin_dir_path( __FILE__ );
}
define( 'MobX_DIR', $dir );
define( 'MobX_URL', plugins_url( '/', __FILE__ ) );
define( 'MobX_BASENAME', plugin_basename( __FILE__ ) );

require_once MobX_DIR . 'includes/class-mobile-x.php';
require_once MobX_DIR . 'admin/panel.php';