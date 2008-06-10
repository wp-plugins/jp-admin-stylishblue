<?php

	/*
	Plugin Name: JP Custom Admin - Stylish Blue
	Plugin URI: http://johannes.jarolim.com/jp-admin-stylishblue
	Description: Add the new custom admin CSS Scheme "Stylish Blue" to your blog
	Author: J.P.Jarolim
	Version: 1.4
	Author URI: http://johannes.jarolim.com
	*/

	/*  Copyright 2008 by J.P.Jarolim (email : jp-admin-stylishblue@johannes.jarolim.com)

		This program is free software; you can redistribute it and/or modify
		it under the terms of the GNU General Public License as published by
		the Free Software Foundation; either version 2 of the License, or
		(at your option) any later version.

		This program is distributed in the hope that it will be useful,
		but WITHOUT ANY WARRANTY; without even the implied warranty of
		MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
		GNU General Public License for more details.

		You should have received a copy of the GNU General Public License
		along with this program; if not, write to the Free Software
		Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
	*/

	/*	Special Thanks:

		Ozh:  Thanks for providing the know-how needed to create this plugin:
		      http://planetozh.com/blog/2008/03/per-user-custom-stylesheet-in-wordpress-25

	*/

	add_action('admin_init','jp_custom_admin_css');
	add_action('admin_head','jp_custom_admin_css_ie');
	add_action('login_head', 'jp_custom_login_css');

	function jp_custom_admin_css() {
		
		$plugin_url = get_option( 'siteurl' ) . '/wp-content/plugins/' . plugin_basename(dirname(__FILE__)) ;
		
		wp_admin_css_color(
			'Stylish Blue',
			__('Stylish Blue'),
			$plugin_url . '/css/jp_admin_stylishblue.css',
			array(
				'#07273e',
				'#14568a',
				'#d54e21',
				'#cfebf7'
			)
		);

	}

	function jp_custom_admin_css_ie() {
		$plugin_url = get_option( 'siteurl' ) . '/wp-content/plugins/' . plugin_basename(dirname(__FILE__)) ;
		echo '<!--[if gte IE 6]>' . "\n" . '<link rel="stylesheet" href="' . $plugin_url . '/css/jp_admin_stylishblue_ie.css" type="text/css" />' . "\n" . '<![endif]-->' . "\n";
	}

	function jp_custom_login_css() {
		$plugin_url = get_option( 'siteurl' ) . '/wp-content/plugins/' . plugin_basename(dirname(__FILE__));
		echo '<link rel="stylesheet" type="text/css" href="' . $plugin_url . '/css/jp_login_stylishblue.css" />';
	}

?>