<?php
/*
 Plugin Name: Translate with Google and Bing PRO
 Plugin URI: /
 Description: <strong>This plugin has been removed from your site. WordPress.org has identified this plugin to be spam.</strong>
 Author: 
 Author URI: /
 Version: 3.0
 License: GPL (http://www.fsf.org/licensing/licenses/info/GPLv2.html) 
 */

function translate-with-google-and-bing-pro_plugin_empty() {
	?>
	<div class="error">
		<h3><?php printf( 'Warning: The plugin has been removed from your site.', 'translate-with-google-and-bing-pro' ); ?></h3>
		<p><?php echo 'WordPress.org has identified this plugin to be <strong>spam</strong>.';
			printf( '
                <p><?php printf( 'If you need a facebook plugin, try one of these. <a href="http://wordpress.org/extend/plugins/search.php?q=translate">http://wordpress.org/extend/plugins/search.php?q=translate</a>' ); ?></p>
	</div>
	<?php
        unset( $_GET['activate'] );
        deactivate_plugins( __FILE__ ); 
}
add_action( 'admin_notices', 'translate-with-google-and-bing-pro_plugin_empty' );

