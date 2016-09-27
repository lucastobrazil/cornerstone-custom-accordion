<?php
return array(
	'elements' => array(
		'type'    => 'sortable',
        'ui' => array(
			'title'   => __( 'Add Items', 'ca-custom-accordion' ),
			'tooltip' =>__( 'Add a new item to your accordion..', 'ca-custom-accordion' ),
		),
        'options' => array(
            'element' => 'ca-custom-accordion-item',
            'newTitle' => __( 'Item %s', 'ca-custom-accordion' ),
            'floor'    => 2
        ),
        'context' => 'content', //important for suggested items to appear
        'suggest' => array(
            array( 
                'title' => __( 'CA Accordion Item 1', 'ca-custom-accordion' ),
                'sub_title' => __( 'Sub Title', 'ca-custom-accordion' ), 
                'right_text' => __( 'Right Text', 'ca-custom-accordion' ), 
                'right_bottom_text' => __( 'Right Bottom Text', 'ca-custom-accordion' ), 
                'content' => __( 'Add some content to your accordion item here.', 'ca-custom-accordion' ), 
                'open' => true 
            ),
            array( 
                'title' => __( 'CA Accordion Item 1', 'ca-custom-accordion' ),
                'sub_title' => __( 'Sub Title', 'ca-custom-accordion' ), 
                'right_text' => __( 'Right Text', 'ca-custom-accordion' ), 
                'right_bottom_text' => __( 'Right Bottom Text', 'ca-custom-accordion' ), 
                'content' => __( 'Add some content to your accordion item here.', 'ca-custom-accordion' ), 
            ),
        )
	),
    'link_items' => array(
		'type'    => 'toggle',
        'ui' => array(
			'title'   => __( 'Link Items', 'ca-custom-accordion' ),
			'tooltip' =>__( 'This will make opening one item close the others.', 'ca-custom-accordion' ),
		)
	),

);