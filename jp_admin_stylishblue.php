<?php

	/*
	Plugin Name: JP Custom Admin CSS - Stylish Blue
	Plugin URI: http://johannes.jarolim.com
	Description: Add the new custom admin CSS Scheme "Stylish Blue" to your blog
	Author: J.P.Jarolim
	Version: 1.2
	Author URI: http://johannes.jarolim.com
	*/

	add_action('admin_init','custom_admin_css');
	add_action('login_head', 'custom_login_css');

	function custom_admin_css() {
		
		$plugin_url = get_option( 'siteurl' ) . '/wp-content/plugins/' . plugin_basename(dirname(__FILE__)) ;
		
		wp_admin_css_color(
			'Stylish Blue',
			__('Stylish Blue'),
			$plugin_url . '/jp_admin_css_stylishblue.css',
			array(
				'#07273e',
				'#14568a',
				'#d54e21',
				'#cfebf7'
			)
		);

	}

	function custom_login_css() {
		$plugin_url = get_option( 'siteurl' ) . '/wp-content/plugins/' . plugin_basename(dirname(__FILE__));
		echo '<link rel="stylesheet" type="text/css" href="' . $plugin_url . '/jp_login_css_stylishblue.css" />';
	}

?>