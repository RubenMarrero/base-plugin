<?php
/**
 * @package  basePlugin
 */
namespace Inc\Base;

class Activate
{
	public static function activate() {
		flush_rewrite_rules();

		$default = array();

		if ( ! get_option( 'base_plugin' ) ) {
			update_option( 'base_plugin', $default );
		}

		if ( ! get_option( 'base_plugin_cpt' ) ) {
			update_option( 'base_plugin_cpt', $default );
		}

		if ( ! get_option( 'base_plugin_tax' ) ) {
			update_option( 'base_plugin_tax', $default );
		}
	}
}