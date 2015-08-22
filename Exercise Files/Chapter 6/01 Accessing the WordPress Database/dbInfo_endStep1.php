<?php
/*
Plugin Name: DB Info Plugin
Plugin URI: http://www.falkonproductions.com/dbinfo/
Description: This plugin tells admin stuff about the db
Author: Drew Falkman
Version: 1.0
Author URI: http://www.falkonproductions.com/
 */

function databaseinfo_dashboard_widget()
{
	global $wpdb;
	?>
	<h2>DB Info Dashboard Widget</h2>
	<pre>
	<?php var_dump($wpdb); ?>
	</pre>
	<?php 
}

function databaseinfo_register_widget()
{
	wp_add_dashboard_widget('databaseinfo-dashboard-widget','Counter Dashboard Widget', 'databaseinfo_dashboard_widget');
}

add_action('wp_dashboard_setup', 'databaseinfo_register_widget');