<?php

/**
 * Shortcode handler
 */

$id        = ( $id        != ''     ) ? 'id="' . esc_attr( $id ) . '"' : '';
$class     = ( $class     != ''     ) ? 'x-accordion-group ' . esc_attr( $class ) : 'x-accordion-group';
$style     = ( $style     != ''     ) ? 'style="' . $style . '"' : '';
$parent_id = ( $parent_id != ''     ) ? 'data-cs-collapse-parent="#' . $parent_id . '"' : '';
$collapse  = ( $open      == 'true' ) ? 'collapse in' : 'collapse';
$collapsed = ( $open      != 'true' ) ? ' collapsed' : '';

// Maybe make these empty if not set?
$title     = ( $title     != ''     ) ? $title : 'Set a Title';
$sub_title     = ( $sub_title     != ''     ) ? $sub_title : '';
$right_text     = ( $right_text     != ''     ) ? $right_text : '';
$right_bottom_text     = ( $right_bottom_text     != ''     ) ? $right_bottom_text : '';

$atts = cs_atts( array(
	'id' => $id,
	'class' => $class,
	'style' => $style
) );

$accordionHeader = "<div class=\"ca-custom-accordion-row\">"
                        . "<span class=\"ca-custom-accordion-title\">{$title}</span>"
                        . "<span class=\"ca-custom-accordion-right_text\">{$right_text}</span>"
                    . "</div>"
                    . "<div class=\"ca-custom-accordion-row\">"
                        . ($sub_title ? "<span class=\"ca-custom-accordion-subtitle\">{$sub_title}</span>" : '')
                        . ($right_bottom_text ? "<span class=\"ca-custom-accordion-right_bottom_text\">{$right_bottom_text}</span>" : '')
                    . "</div>"; 

$output = "<div {$id} class=\"{$class}\" {$style} data-cs-collapse-group>"
            . '<div class="x-accordion-heading ca-custom-accordion-heading">'
                . "<div class=\"x-accordion-toggle{$collapsed}\" data-cs-collapse-toggle {$parent_id} >"
                    . $accordionHeader
                ."</div>"
            . '</div>'
            . "<div class=\"x-accordion-body {$collapse}\" data-cs-collapse-content>"
              . '<div class="x-accordion-inner">'
                . do_shortcode( $content )
              . '</div>'
            . '</div>'
          . '</div>';

echo $output;

?>
