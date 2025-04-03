<?php
if(!function_exists('kadu_page_template_type')  ){
    function kadu_page_template_type(){
		register_post_type( 'kadu_template',
		array(
			  'labels' => array(
				'name' => __( 'Template','kadu-plugin' ),
				'singular_name' => __( 'Template','kadu-plugin' )
			  ),
			'public' => true,
			'publicly_queryable' => true,
			'show_in_menu'      => false,
			'show_in_nav_menus'   => false,
			'supports' => ['title', 'elementor']
		)
		);
	}
	add_action( 'init','kadu_page_template_type',2 );
}
