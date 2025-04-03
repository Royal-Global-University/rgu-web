<?php
/*
 * Theme Options
 * @package kadu
 * @since 1.0.0
 * */

if ( !defined( 'ABSPATH' ) ) {
    exit(); // exit if access directly
}

if ( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = 'kadu';

    //
    // Create options
    CSF::createOptions( $prefix . '_theme_options', array(
        'menu_title'         => 'kadu Option',
        'menu_slug'          => 'kadu-theme-option',
        'menu_type'          => 'menu',
        'enqueue_webfont'    => true,
        'show_in_customizer' => true,
        'menu_icon' => 'dashicons-category',
        'menu_position' => 50,
        'theme'                   => 'dark',
        'framework_title'    => wp_kses_post( 'Haptic Options <small>by Raziul <br/> Version: 1.0</small> ' ),
        'footer_text'    => wp_kses_post( 'The Theme will Created By Themexriver ' ),
    ) );

    // Create a top-tab
    CSF::createSection( $prefix . '_theme_options', array(
        'id'    => 'header_opts', // Set a unique slug-like ID
        'title' => 'Header',
    ) );


    /*-------------------------------------------------------
     ** Logo Settings  Options
    --------------------------------------------------------*/

    /*-------------------------------------------------------
     ** Header  Options
    --------------------------------------------------------*/

    CSF::createSection( $prefix . '_theme_options', array(
        'title'  => 'General Settings',
        'id'     => 'general_settings',
        'icon'   => 'fa fa-refresh',
        'fields' => array(

            array(
                'id'      => 'preloader_enable',
                'title'   => esc_html__( 'Enable Preloader', 'kadu-tools' ),
                'type'    => 'switcher',
                'desc'    => esc_html__( 'Enable or Disable Preloader', 'kadu-tools' ),
                'default' => true,
            ),
            
            array(
                'id'      => 'kadu_logo_preloader',
                'title'   => esc_html__( 'Preloader Logo', 'kadu-tools' ),
                'type'    => 'media',
                'desc'    => esc_html__( 'Upload Your Brand Logo if you want', 'kadu-tools' ),
                'dependency' => array( 
                    'preloader_enable', '==', 'true',
                ),
            ),
            array(
                'id'      => 'kadu_custom_preloader',
                'title'   => esc_html__( 'Upload Loader Logo', 'kadu-tools' ),
                'type'    => 'media',
                'desc'    => esc_html__( 'If you Want to Upload Svg or png logo for preloader? them at first remove preloader logo text and then upload logo here', 'kadu-tools' ),
                'dependency' => array( 
                    'preloader_enable', '==', 'true',
                ),
            ),
            array(
                'id'      => 'scroll_up_btn',
                'title'   => esc_html__( 'Scroll Up SHOW/HIDE', 'kadu-tools' ),
                'type'    => 'switcher',
                'desc'    => esc_html__( 'Enable or Disable Scroll UP', 'kadu-tools' ),
                'default' => true,
            ),

        ),
    ) );

    CSF::createSection( $prefix . '_theme_options', array(
        'title'  => esc_html__( 'Header', 'kadu-tools' ),
        'parent'     => 'header_opts',
        'icon'   => 'fa fa-header',
        'fields' => array(
            array(
                'type'    => 'subheading',
                'content' => '<h3>' . esc_html__( 'Header Layout', 'kadu-tools' ) . '</h3>',
            ),

            array(
                'id'          => 'header_style',
                'type'        => 'select',
                'title'       => __('Select Header Style', 'kadu-tools' ),
                'options'     => Kadu_Plugin_Helper::get_header_types(),
            ), 
            array(
                'id'      => 'kadu_logo',
                'title'   => esc_html__( 'Default Logo', 'kadu-tools' ),
                'type'    => 'media',
                'desc'    => esc_html__( 'Upload Logo', 'kadu-tools' ),
                'default' => true,
            ),
           
        ),
    ) );

    
    /*-------------------------------------
     ** Typography Options
    -------------------------------------*/
    CSF::createSection( $prefix . '_theme_options', array(
        'title'  => esc_html__( 'Typography', 'kadu-tools' ),
        'id'     => 'typography_options',
        'icon'   => 'fa fa-font',
        'fields' => array(

            array(
                'type'    => 'subheading',
                'content' => '<h3>' . esc_html__( 'Body', 'kadu-tools' ) . '</h3>',
            ),

            array(
                'id'     => 'body-typography',
                'type'   => 'typography',
                'output' => 'body',

            ),

            array(
                'type'    => 'subheading',
                'content' => '<h3>' . esc_html__( 'Heading', 'kadu-tools' ) . '</h3>',
            ),

            array(
                'id'     => 'heading-gl-typo',
                'type'   => 'typography',
                'output' => 'h1, h2, h3, h4, h5, h6',
            ),

        ),
    ) );

    // Product
    CSF::createSection( $prefix . '_theme_options', array(
        'title'  => esc_html__( 'Woocommerce Option', 'kadu-tools' ),
        'id'     => 'woo_option',
        'icon'   => 'fa fa-header',
        'fields' => array(
            array(
                'type'    => 'subheading',
                'content' => '<h3>' . esc_html__( 'Woocommerce Option', 'kadu-tools' ) . '</h3>',
            ),

            array(
                'id'      => 'product_count',
                'title'   => esc_html__( 'Product Count', 'kadu-tools' ),
                'type'    => 'text',
                'default' => '12',
            ),
            
        ),
    ) );

    // blog optoins
    CSF::createSection( $prefix . '_theme_options', array(
        'title'  => esc_html__( 'Breadcrumb', 'kadu-tools' ),
        'id'     => 'blog_page',
        'icon'   => 'fa fa-rss-square',
        'fields' => array(
            array(
                'id'      => 'breadcrumb_bg_img',
                'type'    => 'media',
                'title'   => esc_html__('Breadcrumb BG', 'kadu-tools'),
            ),
        ),
    ) );

    // blog optoins
    CSF::createSection( $prefix . '_theme_options', array(
        'title'  => esc_html__( 'Blog', 'kadu-tools' ),
        'id'     => 'blog_page',
        'icon'   => 'fa fa-rss-square',
        'fields' => array(

            array(
                'type'    => 'subheading',
                'content' => '<h3>' . esc_html__( 'Blog Options', 'kadu-tools' ) . '</h3>',
            ),
            array(
                'id'      => 'hide_blog_date',
                'title'   => esc_html__( 'Hide Blog Date', 'kadu-tools' ),
                'type'    => 'switcher',
                'default' => true,
            ),
            array(
                'id'      => 'hide_authore',
                'title'   => esc_html__( 'Hide Authore', 'kadu-tools' ),
                'type'    => 'switcher',
                'default' => true,
            ),
            array(
                'id'      => 'hide_cmt_date',
                'title'   => esc_html__( 'Hide Comment', 'kadu-tools' ),
                'type'    => 'switcher',
                'default' => true,
            ),
            
            array(
                'id'      => 'blog_btn_text',
                'type'    => 'text',
                'title'   => esc_html__( 'Blog Read More Button', 'kadu-tools' ),
                'default' => esc_html__( 'Explore More', 'kadu-tools' ),
                'desc'    => esc_html__( 'Type Blog Read More Button Text Here', 'kadu-tools' ),
            ),
        ),
    ) );
    

   // kadu Color Setting
   CSF::createSection( $prefix . '_theme_options', array(
    'title'  => 'Color Control',
    'id'     => 'apix_color_control',
    'icon'   => 'fa fa-paint-brush',
    'fields' => array(
        

        array(  //nav bar one start
            'type'    => 'subheading',
            'content' => '<h3>' . esc_html__( 'Theme Global Color', 'kadu-tools' ) . '</h3>',
        ),
        array(
            'id'    => 'theme-color-1',
            'type'  => 'color',
            'title' => 'Theme Primary Color',
            'default' => '#005e4f'
        ),
        array(
            'id'    => 'theme-color-2',
            'type'  => 'color',
            'title' => 'Theme Primary Color 2',
            'default' => '#D70007'
        ),
        array(
            'id'    => 'theme-color-3',
            'type'  => 'color',
            'title' => 'Theme Primary Color 3',
            'default' => '#ef991f'
        ),
        array(
            'id'    => 'theme-color-4',
            'type'  => 'color',
            'title' => 'Theme Primary Color 4',
            'default' => '#08D565'
        ),
        
        
    ),
) );

    // Create a section
    CSF::createSection( $prefix . '_theme_options', array(
        'title'  => 'Error Page',
        'id'     => 'error_page',
        'icon'   => 'fa fa-exclamation-triangle',
        'fields' => array(
            

            array(  //nav bar one start
                'type'    => 'subheading',
                'content' => '<h3>' . esc_html__( '404 Page Options', 'kadu-tools' ) . '</h3>',
            ),
            
            array(
                'id'      => 'error_code',
                'type'    => 'media',
                'title'   => esc_html__( 'Error Code Image', 'kadu-tools' ),
            ),
            array(
                'id'      => 'error_title',
                'type'    => 'text',
                'title'   => esc_html__( '404 Title', 'kadu-tools' ),
                'default' => esc_html__( 'Oops! Page Not found.', 'kadu-tools' ),
            ),
           
            array(
                'id'      => 'error_button',
                'type'    => 'text',
                'title'   => esc_html__( '404 Button', 'kadu-tools' ),
                'default' => esc_html__( 'back to Home page ', 'kadu-tools' ),
            )

                     
        ),
    ) );

    /*-------------------------------------------------------
     ** Footer  Options
    --------------------------------------------------------*/
    
    CSF::createSection( $prefix . '_theme_options', array(
        'title'  => esc_html__( 'Footer Options', 'kadu-tools' ),
        'icon'   => 'fa fa-copyright',
        'fields' => array(

            array(
                'id'          => 'footer_style',
                'type'        => 'select',
                'title'       => __('Select Footer Style', 'kadu-tools' ),
                'options'     => Kadu_Plugin_Helper::get_footer_types(),
            ),     
            array(
                'id'    => 'footer_copyright',
                'type'  => 'wp_editor',
                'title' => 'Default Footer Copyright',
                'default' => '© 2023 kadu - IT Services. All rights reserved.',
            ),

        ),
    ) );

    // Backup section
    CSF::createSection( $prefix . '_theme_options', array(
        'title'  => esc_html__( 'Backup Export', 'kadu-tools' ),
        'id'     => 'backup_options',
        'icon'   => 'fa fa-window-restore',
        'fields' => array(
            array(
                'type' => 'backup',
            ),
        ),
    ) );




}