<?php
/*
 * Theme Metabox
 * @package kadu-tools
 * @since 1.0.0
 * */

if ( !defined( 'ABSPATH' ) ) {
    exit(); // exit if access directly
}

if ( class_exists( 'CSF' ) ) {

    $prefix = 'kadu';

    /*-------------------------------------
    Page Options
    -------------------------------------*/
    $post_metabox = 'kadu_page_meta';

    CSF::createMetabox( $post_metabox, array(
        'title'     => 'Page Options',
        'post_type' => array('plan', 'page', 'post'),
    ) );

    // Header Section
    CSF::createSection( $post_metabox, array(
        'title'  => 'Header',
        'fields' => array(
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Header Option', 'kadu-tools' ),
            ),

            array(
				'id'       => 'meta_header_type',
				'type'     => 'switcher',
				'title'    => __( 'Header Style', 'kadu-plugin' ),
				'text_on'  => __( 'Yes', 'kadu-plugin' ),
				'text_off' => __( 'No', 'kadu-plugin' ),
				'default'  => false
			),
            array(
				'id'          => 'meta_header_style',
				'type'        => 'select',
				'title'       => __('Select Header Style', 'kadu-plugin' ),
				'options'     => Kadu_Plugin_Helper::get_header_types(),
                'dependency' => array( 'meta_header_type', '==', 'true' ),
			),
            array(
				'id'       => 'page_header_disable',
				'type'     => 'switcher',
				'title'    => __( 'DIsable This page Header?', 'kadu-plugin' ),
				'text_on'  => __( 'Yes', 'kadu-plugin' ),
				'text_off' => __( 'No', 'kadu-plugin' ),
				'default'  => false
			),
        ),
    ) );

    CSF::createSection( $post_metabox, array(
        'title'  => 'Page Breadcrumb',
        'fields' => array(
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Page Breadcrumb', 'kadu-tools' ),
            ),
            array(
				'id'       => 'enable_page_preadcrumb',
				'type'     => 'switcher',
				'title'    => __( 'Page Breadcrumb', 'kadu-plugin' ),
				'text_on'  => __( 'Yes', 'kadu-plugin' ),
				'text_off' => __( 'No', 'kadu-plugin' ),
				'default'  => true
			),
            array(
				'id'       => 'hide_bg_img',
				'type'     => 'switcher',
				'title'    => __( 'Hide Breadcrumb Page Image', 'kadu-plugin' ),
				'text_on'  => __( 'Yes', 'kadu-plugin' ),
				'text_off' => __( 'No', 'kadu-plugin' ),
				'default'  => true
			),
            array(
                'id'    => 'bg_img_from_page',
                'type'  => 'media',
                'title' => esc_html__( 'Page Breadcrumb Background Image', 'kadu-tools' ),
                'dependency' => array( 'enable_page_preadcrumb', '==', 'true' ),
                
            ),
            array(
				'id'       => 'enable_custom_title',
				'type'     => 'switcher',
				'title'    => __( 'Enable Page Custom Title', 'kadu-plugin' ),
				'text_on'  => __( 'Yes', 'kadu-plugin' ),
				'text_off' => __( 'No', 'kadu-plugin' ),
				'default'  => false
			),
            
            array(
                'id'    => 'page_custom_title',
                'type'  => 'text',
                'title' => esc_html__( 'Page Custom Title', 'kadu-tools' ),
                'dependency' => array( 'enable_custom_title', '==', 'true' ),
            ),
            
        )
    ) );

    CSF::createSection( $post_metabox, array(
        'title'  => 'Page Style',
        'fields' => array(
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Page Style', 'kadu-tools' ),
            ),
            array(
                'id'     => 'scroll-bar',
                'type'   => 'color',
                'title'  => 'Page Scroll Bar Color',
                'output'      => 'body::-webkit-scrollbar-thumb',
                'output_mode' => 'background',
            ),
            array(
                'id'     => 'scroll-up',
                'type'   => 'color',
                'title'  => 'Page Scroll UP BUtton Color',
                'output'      => '.scroll-top',
                'output_mode' => 'background',
            ),
            array(
                'id'     => 'border-up',
                'type'   => 'color',
                'title'  => 'Breadcrumb Border Color',
                'output'      => '.feh-breadcrumb-area',
                'output_mode' => 'border-color',
            ),
            
            
        )
    ) );
    

    // Header Section
    CSF::createSection( $post_metabox, array(
        'title'  => 'Footer',
        'fields' => array(
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Footer Option', 'kadu-tools' ),
            ),

            array(
				'id'       => 'meta_footer_type',
				'type'     => 'switcher',
				'title'    => __( 'Footer Style', 'kadu-plugin' ),
				'text_on'  => __( 'Yes', 'kadu-plugin' ),
				'text_off' => __( 'No', 'kadu-plugin' ),
				'default'  => false
			),
            array(
				'id'          => 'meta_footer_style',
				'type'        => 'select',
				'title'       => __('Select Footer Style', 'kadu-plugin' ),
				'options'     => Kadu_Plugin_Helper::get_footer_types(),
                'dependency' => array( 'meta_footer_type', '==', 'true' ),
			),
            array(
				'id'       => 'page_footer_disable',
				'type'     => 'switcher',
				'title'    => __( 'DIsable This page Footer?', 'kadu-plugin' ),
				'text_on'  => __( 'Yes', 'kadu-plugin' ),
				'text_off' => __( 'No', 'kadu-plugin' ),
				'default'  => false
			),

        ),
    ) );

     /*-------------------------------------
    Page Options
    -------------------------------------*/
    $post_metabox = 'kadu_pricing_meta';

    CSF::createMetabox( $post_metabox, array(
        'title'     => 'Pricing Options',
        'post_type' => 'kadu_pricing',
    ) );

    // Header Section
    CSF::createSection( $post_metabox, array(
        'title'  => 'kadu Pricing Table ',
        'fields' => array(
            array(
                'id'      => 'populer_item',
                'type'    => 'checkbox',
                'title'   => 'Select Populer Item',
                'label'   => 'If you want to Populer Item then please check the box',
                'default' => false // or false
            ),
            array(
                'id'    => 'offer_text',
                'type'  => 'text',
                'title' => esc_html__( 'Offer Text', 'kadu-tools' ),
            ),
            array(
                'id'    => 'currency',
                'type'  => 'text',
                'title' => esc_html__( 'Currency', 'kadu-tools' ),
                'default' => '$',
            ),
            array(
                'id'    => 'monthly_price',
                'type'  => 'text',
                'title' => esc_html__( 'Monthly Price ', 'kadu-tools' ),
            ),
            array(
                'id'    => 'yearly_price',
                'type'  => 'text',
                'title' => esc_html__( 'Yearly Price ', 'kadu-tools' ),
            ),
            array(
                'id'    => 'mon_period',
                'type'  => 'text',
                'title' => esc_html__( 'Monthly Period ', 'kadu-tools' ),
                'default' => esc_html__( '/ Monthly', 'kadu-tools' ),
            ),
            array(
                'id'    => 'yr_period',
                'type'  => 'text',
                'title' => esc_html__( 'Yearly Period ', 'kadu-tools' ),
                'default' => esc_html__( '/ Yearly', 'kadu-tools' ),
            ),
            array(
                'id'         => 'pricing_lists',
                'type'       => 'group',
                'title'      => 'Add Pricing List Item',
                'fields'     => array(
                    
                    array(
                        'id'    => 'list-item',
                        'type'  => 'text',
                        'title' => esc_html__( 'Pricing List Item', 'kadu-tools' ),
                    ),
                    array(
                        'id'      => 'exclude-in-package',
                        'title'   => esc_html__( 'Exclude In This Package', 'kadu-tools' ),
                        'type'    => 'switcher',
                        'default' => false,
                    ),
                )

            ),
            array(
                'id'    => 'pricing_btn',
                'type'  => 'link',
                'title' => esc_html__( 'Pricing Button', 'kadu-tools' ),
            ),
            array(
                'id'    => 'pricing_txt',
                'type'  => 'text',
                'title' => esc_html__( 'Pricing Text', 'kadu-tools' ),
            ),

        ),
    ) );

    /*-------------------------------------
    Page Options
    -------------------------------------*/
    $post_metabox = 'kadu_career_meta';

    CSF::createMetabox( $post_metabox, array(
        'title'     => 'Career Options',
        'post_type' => 'kadu_career',
    ) );

    // Header Section
    CSF::createSection( $post_metabox, array(
        'fields' => array(
            
            array(
                'id'    => 'icon',
                'type'  => 'icon',
                'title' => esc_html__( 'Job Icon', 'kadu-tools' ),
            ),
           
            array(
                'id'    => 'job_type',
                'type'  => 'text',
                'title' => esc_html__( 'Job Type', 'kadu-tools' ),
                'desc' => esc_html__( 'Job Type Means Full Time Job or Part Time Job', 'kadu-tools' ),
            ),
            array(
                'id'    => 'job_location',
                'type'  => 'text',
                'title' => esc_html__( 'Job Location', 'kadu-tools' ),
                'desc' => esc_html__( 'Type Yor Job Location', 'kadu-tools' ),
            ),
            array(
                'id'    => 'job_date',
                'type'  => 'date',
                'title' => esc_html__( 'Job Date', 'kadu-tools' ),
                'desc' => esc_html__( 'Type Yor Job Ending Date Here', 'kadu-tools' ),
            ),
            array(
                'id'    => 'job_salary',
                'type'  => 'text',
                'title' => esc_html__( 'Job Salary', 'kadu-tools' ),
                'desc' => esc_html__( 'Type Yor Job Salary Range Here', 'kadu-tools' ),
            ),
            array(
                'id'    => 'job_excerpt',
                'type'  => 'textarea',
                'title' => esc_html__( 'Job Excerpt', 'kadu-tools' ),
                'desc' => esc_html__( 'Type Yor Job Short Description Here', 'kadu-tools' ),
            ),
        ),
    ) );



    /*-------------------------------------
    Page Options
    -------------------------------------*/
    $kadu_temp_meta = 'kadu_temp_meta';

    CSF::createMetabox( $kadu_temp_meta, array(
        'title'     => 'Template Type',
        'post_type' => array('kadu_template'),
        'data_type' => 'unserialize'
    ) );

     // Header Section
     CSF::createSection( $kadu_temp_meta, array(
        'fields' => array(
            array(
                'id'          => 'kadu_template_type',
                'type'        => 'select',
                'title'       => 'Select Template Type',
                'placeholder' => 'Select Template Type',
                'options'     => array(
                  'tf_header_key'  => 'Header',
                  'tf_footer_key'  => 'Footer',
                ),
                'default'     => ''
            ),
        ),
    ) );


    /*-------------------------------------
    Portfolio Options
    -------------------------------------*/
    $kadu_port_meta = 'kadu_portfolio_meta';

    CSF::createMetabox( $kadu_port_meta, array(
        'title'     => 'Portfolio Option',
        'post_type' => array('kadu_portfolio'),
    ) );

     // Header Section
     CSF::createSection( $kadu_port_meta, array(
        'fields' => array(
            array(
                'id'          => 'port-column',
                'type'        => 'select',
                'title'       => 'Select Portfolio Column',
                'options'     => array(
                  '12'  => 'Full Column',
                  '6'   => 'Two Column',
                  '3'   => 'Four Column',
                  '4'   => 'Three Column',
                ),
                'default'     => '12'
            ),
            array(
                'id'    => 'cl_no',
                'type'  => 'text',
                'title' => esc_html__( 'Job Salary', 'kadu-tools' ),
                'desc' => esc_html__( 'Type Yor Job Salary Range Here', 'kadu-tools' ),
            ),
        ),
    ) );


    
    

} //endif
