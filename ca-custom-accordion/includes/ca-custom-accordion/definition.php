<?php

/*
	Element Name: Custom Cornersone Accordion
	Description: A Custom Cornerstone Accordion with extra fields in the header
	Author: lucastobrazil
	Author URI: http://lucastobrazil.github.io/
	Version: 0.1.1
 */

class CA_Custom_Accordion {

	public function ui() {
        return array(
            'title'       => __( 'Custom Cornerstone Accordion', 'ca-custom-accordion' ),
            'supports'    => array('id', 'class', 'style' ),
            'renderChild' => true,
        );
	}

    public function flags() {
		return array(
			'dynamic_child' => true
		);
	}
}