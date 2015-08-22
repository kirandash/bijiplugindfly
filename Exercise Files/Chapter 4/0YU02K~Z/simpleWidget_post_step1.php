<?php
/*
Plugin Name: Simple Widget
Plugin URI: http://www.falkonproductions.com/simpleWidget/
Description: This plugin does things you never thought were possible.
Author: Drew Falkman
Version: 1.0
Author URI: http://www.falkonproductions.com/
 */
class SimpleWidget extends WP_Widget
{
	function SimpleWidget() {
	}
	
	function widget( $args, $instance ) {
		extract ( $args, EXTR_SKIP );
		$title = ( $instance['title'] ) ? $instance['title'] : 'A simple widget';
		$body = ( $instance['body'] ) ? $instance['body'] : 'A simple message'
		?>
		<?php echo $before_widget ?>
		<?php echo $before_title . $title . $after_title ?>
		<p><?php echo $body ?></p>
		<?php 
	}
	
	function update() {
		
	}
	
	function form() {
		
	}
	
}
	
function simple_widget_init() {
	register_widget("SimpleWidget");
}
add_action('widgets_init','simple_widget_init');