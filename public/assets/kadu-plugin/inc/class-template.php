<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * kadu Theme Helper
 *
 *
 * @class        kadu_Helper
 * @version      1.0
 * @category 	 Class
 * @author       Raziul
 */

if ( ! class_exists( 'kadu_Helper' ) ) {
	class kadu_Helper {

		/**
		 * [header Template Get]
		 *
		 * @return  [type]  [return description]
		 */
		public static function kadu_get_header_type(){
			$header = ['' => esc_html__( 'Default', 'kadu-plugin' ) ];
			$headers = get_posts(
				[
					'posts_per_page' => - 1,
					'post_type'      => 'kadu_template',
					'orderby'        => 'name',
					'order'          => 'ASC',
					'meta_query' => array(
						array(
							'key'       => 'kadu_template_type',
							'value'     => 'tf_header_key',
							'compare'   => '='
						)
					)
				]
			);
			foreach ($headers as  $value) {
				$header[$value->ID] = $value->post_title;
			}
			return $header;
		}	

		/**
		 * [Render Header Template]
		 *
		 * @param   [type]  $header_style  [$header_style description]
		 *
		 * @return  [type]                 [return description]
		 */
		public static function kadu_render_header($header_style){
			$elementor_instance = Elementor\Plugin::instance();
			return $elementor_instance->frontend->get_builder_content_for_display( $header_style );
		}
	}

	// Instantiate theme
	new kadu_Helper();
}