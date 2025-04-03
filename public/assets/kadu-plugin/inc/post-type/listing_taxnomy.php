<?php 

if ( !function_exists( 'kadu_tour_type_tax' ) ) {
    function kadu_tour_type_tax() {
        $labels = [
            'name'          => esc_html__( 'Tour Type', 'kadu-plugin' ),
            'menu_name'     => esc_html__( 'Tour Type', 'kadu-plugin' ),
            'singular_name' => esc_html__( 'Tour Type', 'kadu-plugin' ),
            'search_items'  => esc_html__( 'Search Type', 'kadu-plugin' ),
            'all_items'     => esc_html__( 'All Type', 'kadu-plugin' ),
            'new_item_name' => esc_html__( 'New Type', 'kadu-plugin' ),
            'add_new_item'  => esc_html__( 'Add New Type', 'kadu-plugin' ),
            'edit_item'     => esc_html__( 'Edit New Type', 'kadu-plugin' ),
            'update_item'   => esc_html__( 'Update New Type', 'kadu-plugin' ),
        ];
        $args = array(
            'labels'                => $labels,
            'hierarchical'          => true,
            'show_ui'               => true,
            'show_admin_column'     => true,
            'query_var'             => true,
            'update_count_callback' => '_update_post_term_count',
        );
        register_taxonomy('tour_type', 'at_biz_dir', $args);
    }
    add_action( 'init', 'kadu_tour_type_tax' );
}