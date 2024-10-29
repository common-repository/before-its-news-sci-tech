<?php
/*
Plugin Name: Before It's News&reg;: Sci-Tech
Plugin URI: http://www.beforeitsnews.com/widgets
Description: Your widget will update every time our site does. A new story is added virtually every minute! Stay up to date and keep your viewers up to date. The widget loads fast and won't bog down your page-load time.
Version: 0.2
Author: Justin Dawson
Author URI: http://justindawson.com
*/

/* Add the widget widgets_init */
add_action( 'widgets_init', 'bin_load_tech_widgets' );

/* Register the widget */
function bin_load_tech_widgets() {
	register_widget( 'Tech_Widget' );
} /* End registration of the widget */

/* tech_Widget class */
class Tech_Widget extends WP_Widget {
	
	/* Widget setup */
	function Tech_Widget() {
	
		/* Widget settings */
		$widget_ops = array( 'classname' => 'tech', 'description' => __( 'You widget will update every time our site does. A new story is added virtually every minute! Stay up to date and keep your viewers up todate. The widget loads fans and won\'t bog down your page-load time.', 'tech' ) );
		
		/* Create the widget */
		$this->WP_Widget( 'tech-wdiget', __( 'Before It\'s News&reg;: Sci-Tech', 'tech' ), $widget_ops );
	
	} /* End widget setup */
	
	/* Display the widget once activated */
	function widget( $args ) {
		extract( $args );
		
		/* Before widget */
		echo $before_widget;
		
		/* During widget */
		echo '<a class="b4in-widget" href="http://beforeitsnews.com/widget/tech">Before It\'s News | People Powered News</a><script type="text/javascript" src="http://beforeitsnews.com/widgets/js/widget.js"></script>';
		
		/* After widget */
		echo $after_widget;
		
	} /* Stop displaying the widget */
	
} /* End tech_Widget class */

?>