<?php

add_action( 'acf/init', 'aic_theme_options' );

function aic_theme_options(){

    acf_add_local_field_group(array(
        'key' => 'group_61961e88717f5',
        'title' => 'Theme Options',
        'fields' => array(
            array(
                'key' => 'field_61a631c11d93f',
                'label' => 'Theme Colors',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_61a632031d940',
                'label' => '',
                'name' => 'theme_colors',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => 'field_61a6323b1d941',
                'min' => 0,
                'max' => 0,
                'layout' => 'table',
                'button_label' => 'Add Color',
                'sub_fields' => array(
                    array(
                        'key' => 'field_61a6323b1d941',
                        'label' => 'Color Name',
                        'name' => 'color_name',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '49',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_61a632501d942',
                        'label' => 'Color Hex',
                        'name' => 'color_hex',
                        'type' => 'color_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '49',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'enable_opacity' => 0,
                        'return_format' => 'string',
                    ),
                ),
            ),
            array(
                'key' => 'field_61a632871d943',
                'label' => 'Maintenance Mode',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_61961eba3be3f',
                'label' => '',
                'name' => 'enable_maintenance_mode',
                'type' => 'true_false',
                'instructions' => '<strong style="color: #000000;">Enable maintenance mode?</strong>',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '49',
                    'class' => '',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ),
            array(
                'key' => 'field_61961ee63be40',
                'label' => 'Logo',
                'name' => 'logo',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '49',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'full',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-settings',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
}

?>