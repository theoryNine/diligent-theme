<?php
/**
 * Created by PhpStorm.
 * User: j_col
 * Date: 07-Jan-18
 * Time: 3:19 PM
 */

if (!defined('RGG_DEFAULT_LICENSE_KEY')) { define('RGG_DEFAULT_LICENSE_KEY', ''); };
if (!defined('RGG_DEFAULT_LASTROWBEHAVIOR')) { define('RGG_DEFAULT_LASTROWBEHAVIOR', 'last_row_same_height'); };
if (!defined('RGG_DEFAULT_CAPTIONS')) { define('RGG_DEFAULT_CAPTIONS', 'overlay-hover-show'); };
if (!defined('RGG_DEFAULT_CAPTIONS_EFFECT')) { define('RGG_DEFAULT_CAPTIONS_EFFECT', 'slide_up'); };
if (!defined('RGG_DEFAULT_CAPTIONS_INTIME')) { define('RGG_DEFAULT_CAPTIONS_INTIME', 200); };
if (!defined('RGG_DEFAULT_CAPTIONS_OUTTIME')) { define('RGG_DEFAULT_CAPTIONS_OUTTIME', 200); };

/**
 * add/edit/rearrange admin form input elements
 */
function rgg_pro_admin_form($admin_form) {

	$admin_form['general-settings']['fields'] =  array('license_key','admin_location');
	$admin_form['captions']['fields'] = array('captions','captions_effect','captions_intime', 'captions_outtime');
	$admin_form['display-settings']['fields'][] = 'lastrowbehavior';

	unset ($admin_form['rggpromo']);


	return $admin_form;
}
add_filter('rgg_filter_admin_form', 'rgg_pro_admin_form', 1);


/**
 * edit field properties
 */
function rgg_pro_input_fields($rgg_input_fields) {


	$rgg_input_fields['license_key'] = array(
		'input_type' => 'text',
		'label' => 'License Key',
		'description' => '<a href="http://bdwm.be/rgg/faq/#faq-license-key" target="_blank">Where is my license key?</a>',
		'default' => RGG_DEFAULT_LICENSE_KEY
	);

	$rgg_input_fields['lastrowbehavior'] = array(
		'input_type' => 'select',
		'label' => 'Last row behavior',
		'description' => 'Choose how the last row should behave',
		'options' => array(
			'normal' => 'Normal',
			'last_row_same_height' => 'Force same height as previous row',
			'force_justified' => 'Force justified',
			'center' => 'Center the last row',
			'align_right' => 'Align last row to the right',
			'hide' => 'Hide last row if not full',
		),
		'default' => RGG_DEFAULT_LASTROWBEHAVIOR
	);

	// overwrite captions
	$rgg_input_fields['captions'] = array(
		'input_type' => 'select',
		'label' => 'Captions',
		'description' => 'Choose how you want the captions to be displayed. Note: you can <a target="_blank" href="http://bdwm.be/rgg/rgg-pro-custom-caption-styles">create custom caption styles</a>.',
		'options' => array(
			'title' => 'As title attribute',
			'overlay' => 'Overlay',
			'overlay-hover-show' => 'Overlay: show on mouse-over',
			'overlay-hover-hide' => 'Overlay: hide on mouse-over',
			'off' => 'Don\'t show captions',
			'custom' => 'Custom style'
		),
		'default' => RGG_DEFAULT_CAPTIONS
	);

	$rgg_input_fields['captions_effect'] = array(
		'input_type' => 'select',
		'label' => 'Captions effect',
		'description' => 'Choose an animation effect',
		'options' => array(
			'none' => 'None',
			'fade' => 'Fade in/out',
			'slide_up' => 'Slide up/down',
		),
		'default' => RGG_DEFAULT_CAPTIONS_EFFECT
	);

	$rgg_input_fields['captions_intime'] = array(
		'input_type' => 'text',
		'label' => 'Captions: Animation In time',
		'description' => 'A positive integer value indicating the time, in milliseconds, it will take for the caption mouse over effect to complete.',
		'default' => RGG_DEFAULT_CAPTIONS_INTIME
	);

	$rgg_input_fields['captions_outtime'] = array(
		'input_type' => 'text',
		'label' => 'Captions: Animation Out Time',
		'description' => 'A positive integer value indicating the time, in milliseconds, it will take for the caption mouse over effect to complete.',
		'default' => RGG_DEFAULT_CAPTIONS_OUTTIME
	);

	// extra effects
	$rgg_input_fields['effect'] = array(
		'input_type' => 'select',
		'label' => 'Effect',
		'description' => 'Choose the mouse-over effect',
		'options' => array(
			'bubble' => 'Bubble',
			'fade' => 'Fade',
			'zoom' => 'Zoom',
			'none' => 'None',
		),
		'default' => RGG_DEFAULT_EFFECT
	);

	return $rgg_input_fields;
}
add_filter('rgg_filter_input_fields', 'rgg_pro_input_fields', 1);