<?php

class notiifyd {

	function __construct() {
		add_action('wp_enqueue_scripts', array($this, 'ag_front'));
		add_action('admin_enqueue_scripts', array($this, 'ag_admin'));
		return true;
	}

	function ag_admin() {
		wp_enqueue_script( 'layout', plugins_url('js/layout.js?ver=1.0.2', __FILE__), '', '', true);
		wp_enqueue_style( 'wp-color-picker' );
    	wp_enqueue_script( 'wp-color-picker' ); 
	}

	function ag_front() {
		wp_enqueue_style( 'style', plugins_url('css/style.css', __FILE__));
	}
}

?>