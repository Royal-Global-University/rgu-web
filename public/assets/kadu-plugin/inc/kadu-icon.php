<?php 

if(!function_exists('kadu_register_custom_icon_library')){
    add_filter('elementor/icons_manager/additional_tabs', 'kadu_register_custom_icon_library');
    function kadu_register_custom_icon_library($tabs){
        $custom_tabs = [
            'extra_icon2' => [
                'name' => 'kadu-flat-icon',
                'label' => esc_html__( 'Flaticon', 'kadu' ),
                'url' => get_template_directory_uri() . '/assets/css/flaticon_mycollection.css',
                'enqueue' => [ get_template_directory_uri() . '/assets/css/flaticon_mycollection.css' ],
                'prefix' => 'flaticon-',
                'displayPrefix' => 'flaticon',
                'labelIcon' => 'family-insurance',
                'ver' => KADU_VERSION,
                'fetchJson' => get_template_directory_uri() . '/assets/js/flaticon.js?v='.KADU_VERSION,
                'native' => true,
            ]
           

        ];

        $tabs = array_merge($custom_tabs, $tabs);

        return $tabs;
    }
}