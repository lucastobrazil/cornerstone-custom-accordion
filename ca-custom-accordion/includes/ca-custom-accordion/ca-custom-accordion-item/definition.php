<?php

/*
    Element Name: CA Custom Accordion Item
    Description: Individual Items for the CA Custom Accordion
    Author: lucastobrazil
    Author URI: http://lucastobrazil.github.io/
    Version: 0.1.1
*/
class CA_Custom_Accordion_Item {

	public function ui() {
        return array(
            'name' => 'ca-custom-accordion-item',
            'title'       => __( 'CA Custom Accordion Item', 'ca-custom-accordion' ),
            // 'section'     => 'content',
            'description' => __( 'Accordion description.', 'ca-custom-accordion' ),
            'supports'    => array('class', 'style' ),
        );
	}

    public function flags() {
		return array(
			'child' => true
		);
	}

	public function update_build_shortcode_atts( $atts ) {
		return $atts;
	}
}