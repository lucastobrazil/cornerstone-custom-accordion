<?php

/*
Plugin Name: CA Custom Cornerstone Accordion Plugin
Plugin URI:
Description: A Plugin that loads a Custom Cornerstone Accordion with extra fields in the header
Author: lucastobrazil
Author URI: http://lucastobrazil.github.io/
Version: 0.1.1

Structure/Patterns taken from the Cornerstone documentation
https://community.theme.co/kb/cornerstone-custom-elements/ 
*/
function loadCustomAccordion() {
	define( 'CA_EXTENSION_PATH', plugin_dir_path( __FILE__ ) );
	define( 'CA_EXTENSION_URL', plugin_dir_url( __FILE__ ) );
	define( 'CA_ELEMENTS_URL', CA_EXTENSION_URL . '/includes/' );

	$elements = array(
		'CA_Custom_Accordion'	=> array(
			'name'		=> 'ca-custom-accordion',
			'directory'		=> 'ca-custom-accordion',
		),
		'CA_Custom_Accordion_Item'	=> array(
			'name'		=> 'ca-custom-accordion-item',
			'directory'		=> 'ca-custom-accordion/ca-custom-accordion-item',
		),
	);

	/* Register Elements */
	add_action( 'cornerstone_register_elements', function() use ( $elements ) {
		foreach ($elements as $key => $value) {
			$className = $key;
			$name = $value['name'];
			$directory = $value['directory'];

			/* see cornerstone/includes/utility/api.php */
			cornerstone_register_element( $className, $name, CA_EXTENSION_PATH . 'includes/' . $directory );
		}
	});
	/* Enqueue JS and CSS for Elements */
	add_action( 'wp_enqueue_scripts', function() use ( $elements ) {
		foreach ($elements as $key => $value) {
			$title = $key;
			$name = $value['name'];
			$directory = $value['directory'];

			$cssFilePath = CA_EXTENSION_PATH . 'includes/' . $directory . '/styles/element.css';
			$cssFileUrl = CA_EXTENSION_URL . 'includes/' . $directory . '/styles/element.css';
			$jsFilePath = CA_EXTENSION_PATH . 'includes/' . $directory . '/scripts/element.js';
			$jsFileUrl = CA_EXTENSION_URL . 'includes/' . $directory . '/scripts/element.js';
			
			if(file_exists($cssFilePath)) {
				wp_enqueue_style( $name . '-style', $cssFileUrl, array(), '0.1.0' );	
			}
			if(file_exists($jsFilePath)) {
				wp_enqueue_script( $name . '-script', $jsFileUrl, array(), '0.1.0' );
			}
		}
	});

	add_filter( 'cornerstone_icon_map', 'ca_elements_icon_map' );

	/* Mapping of SVG icon so when you're searching in CS Elements, it has a nice graphic. */
	function ca_elements_icon_map( $icon_map ) {
		$icon_map['si_custom_elements'] = CA_EXTENSION_URL . '/assets/svg/icons.svg';
		return $icon_map;
	}
}
loadCustomAccordion();
