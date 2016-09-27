<?php

/**
 * Element Controls
 */

return array(
	'title' => array(
		'type'    => 'text',
        'ui' => array(
			'title'   => __( 'Item Title', 'ca-custom-accordion' ),
			'tooltip' =>__( 'Include your desired title for your Accordion Item here.', 'ca-custom-accordion' ),
		),
	),
    'sub_title' => array(
		'type'    => 'text',
        'ui' => array(
			'title'   => __( 'Subtitle', 'ca-custom-accordion' ),
			'tooltip' =>__( 'Include extra info here.', 'ca-custom-accordion' ),
		),
	),

    'right_text' => array(
		'type'    => 'text',
        'ui' => array(
			'title'   => __( 'Right text', 'ca-custom-accordion' ),
			'tooltip' =>__( 'Extra text', 'ca-custom-accordion' ),
		),
	),

    'right_bottom_text' => array(
		'type'    => 'text',
        'ui' => array(
			'title'   => __( 'Right bottom Text', 'ca-custom-accordion' ),
			'tooltip' =>__( 'Even more extra text', 'ca-custom-accordion' ),
		),
	),
    'content' => array(
        'type'    => 'editor',
        'ui' => array(
			'title'   => __( 'Content', 'ca-custom-accordion' ),
			'tooltip' =>__( 'Include your desired content for your Accordion Item here.', 'ca-custom-accordion' ),
		),
        'suggest' => __( 'Click to inspect, then edit as needed.', 'ca-custom-accordion' ),
    ),
    'open' => array(
		'type'    => 'toggle',
        'ui' => array(
			'title'   => __( 'Starts Open', 'ca-custom-accordion' ),
			'tooltip' =>__( 'If the Accordion Items are linked, only one can start open.', 'ca-custom-accordion' ),
		)
	),
);