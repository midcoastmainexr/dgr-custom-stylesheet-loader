<?php
/**
 * Plugin Name:       DGR Stylesheet Loader
 * Plugin URI:        
 * Description:         Simply loads the stylesheet that lives in the css directory
 * Version:           0.1.0
 * Author:            Sunil Williams
 * Author URI:        https://sunil.co.nz
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

if ( ! defined( 'ABSPATH' ) ) {
        exit; 
}




add_action( 'wp_enqueue_scripts', 'dgr_load_custom_style', 99 );

function dgr_load_custom_style() {
            
    wp_enqueue_style(
	'dgr-custom-style',
	plugins_url( "/css/dgr-custom-styles.css", __FILE__ ),
	array()
    );    
}
