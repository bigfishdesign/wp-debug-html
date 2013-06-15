<?php
/*
Plugin Name: Debug HTML
Plugin URI: https://github.com/bigfishdesign/wp-debug-html
Description: A WordPress wrapper for the HTML Inspector, that highlights bad markup in your plugins/themes
Version: 1.0
Author: Rob Miller
Author URI: http://bigfish.co.uk/
License: MIT
*/

class DebugHtml {
	public static function enqueue_js() {
		if ( !defined( 'WP_DEBUG' ) || !WP_DEBUG ) {
			return;
		}

		if ( is_admin() ) {
			return;
		}

		wp_enqueue_script( 'debug-html', plugins_url( 'js/html-inspector.js', __FILE__ ), array( 'jquery' ), '0.2.1', true );
	}

	public static function run() {
		?>
		<script type="text/javascript">
			HTMLInspector.inspect();
		</script>
		<?php
	}
}

add_action( 'init', array( 'DebugHtml', 'enqueue_js' ) );
add_action( 'wp_footer', array( 'DebugHtml', 'run' ), 99 );
