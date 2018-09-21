<?php
// CHECK FOR UPDATES

require_once RGG_PLUGIN_DIR.'/pro/plugin-update-checker/plugin-update-checker.php';
$MyUpdateChecker = PucFactory::buildUpdateChecker(
	'http://bdwm.be/rgg/update_plugin/rggpro.json.php?key='.$rgg_options['license_key'],
	RGG_PLUGIN_PATH,
	RGG_PLUGIN_NAME
);

if( is_admin() ) {

	add_action('in_plugin_update_message-'.RGG_PLUGIN_BASENAME, 'rgg_modify_plugin_update_message', 99, 2 );
}

function rgg_modify_plugin_update_message( $plugin_data, $response ) {


	global $rgg_options;

	// bail early if has key
	if( rgg_is_well_formed_license_key($rgg_options['license_key']) ) return;

	// display message
	echo '<br />' . sprintf( __('To enable updates, please enter your license key on the <a href="%s">RGG Options</a> page. If you don\'t have a licence key, please <a href="%s" target="_blank">purchase a copy of RGG Pro</a>.', 'acf'), admin_url('?page='.RGG_PLUGIN), 'http://bdwm.be/rgg/responsive-gallery-grid-pro/' );

}

function rgg_is_well_formed_license_key($key) {

	if ($key && strlen($key) == 24) {
		return true;
	}
	return false;

}