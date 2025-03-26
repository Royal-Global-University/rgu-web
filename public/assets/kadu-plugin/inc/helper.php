<?php

function kadu_body_class($classes){

        if (is_page()) {
            global $post;
            $pid = $post->ID;
            $meta = get_post_meta($pid, '_orixy_meta', 'true');
            $style_class = isset($meta['style']) && $meta['style'] ? $meta['style'] : '';
            $classes[] = $style_class;
        } else {
            $classes[] = 'ori-inner-page';
        }
        return $classes;
}
add_filter('body_class', 'kadu_body_class');


function get_wp_image($source){
  if (isset($source)){
      $image =  wp_get_attachment_image( $source['id'], 'full' );
  }
  return $image;

}

function king_menu_select_choices() {
  $menus = wp_get_nav_menus();
  $items = array();
  $i     = 0;
  foreach ( $menus as $menu ) {
      if ( $i == 0 ) {
          $default = $menu->slug;
          $i ++;
      }
      $items[ $menu->slug ] = $menu->name;
  }

  return $items;
}


function client_ratings($count){
  $out = '';
  for ($i=0; $i<$count; $i++) {
      $out.= '<li><i class="fas fa-star"></i></li>';
  }
  return $out;
}

function get_that_link($link){

  $url = $link['url'] ? 'href='.esc_url($link['url']). '' : '';
  $ext = $link['is_external'] ? 'target= _blank' : '';
  $nofollow = $link['nofollow'] ? 'rel="nofollow"' : '';
  $link = $url.' '.$ext.' '.$nofollow;
  return $link;
}

function get_that_image($source){
  if ($source){
      $image = '<img src="'. esc_url( $source['url'] ).'" alt="'.get_bloginfo( 'name' ).'">';
  }
  return $image;
}

/**
 * All Category List
 */
function kadu_blog_category (){
  $terms = get_terms( array(
      'taxonomy'    => 'category',
      'hide_empty'  => true
  ) );

  $cat_list = [];
  foreach($terms as $post) {
  $cat_list[$post->slug]  = [$post->name];
  }
  return $cat_list;
}

/**
 * All Category List
 */
function kadu_service_category (){
  $terms = get_terms( array(
      'taxonomy'    => 'services_cate',
      'hide_empty'  => true
  ) );

  $cat_list = [];
  foreach($terms as $post) {
  $cat_list[$post->slug]  = [$post->name];
  }
  return $cat_list;
}

function kadu_post_category (){
  $terms = get_terms( array(
      'taxonomy'    => 'projects_cate',
      'hide_empty'  => true
  ) );

  $cat_list = [];
  foreach($terms as $post) {
  $cat_list[$post->slug]  = [$post->name];
  }
  return $cat_list;
}

function kadu_project_slug (){
  $terms = get_terms( array(
      'taxonomy'    => 'projects_cate',
      'hide_empty'  => true
  ) );

  $cat_list = [];
  foreach($terms as $post) {
  $cat_list[$post->term_id]  = [$post->name];
  }
  return $cat_list;
}

/**
 * Tag List
 */
if ( ! function_exists( 'kadu_item_tag_lists' ) ) {
  function kadu_item_tag_lists(  $type = '', $query_args = array() ) {

    $options = array();

    switch( $type ) {

      case 'pages':
      case 'page':
      $pages = get_pages( $query_args );

      if ( !empty($pages) ) {
        foreach ( $pages as $page ) {
          $options[$page->post_title] = $page->ID;
        }
      }
      break;

      case 'posts':
      case 'post':
      $posts = get_posts( $query_args );

      if ( !empty($posts) ) {
        foreach ( $posts as $post ) {
          $options[$post->post_title] = lcfirst($post->ID);
        }
      }
      break;

      case 'tags':
      case 'tag':

      if (isset($query_args['taxonomies']) && taxonomy_exists($query_args['taxonomies'])) {
        $tags = get_terms( $query_args['taxonomies'] );
          if ( !is_wp_error($tags) && !empty($tags) ) {
            foreach ( $tags as $tag ) {
              $options[$tag->name] = $tag->term_id;
          }
        }
      }
      break;
    }

    return $options;

  }
}

/**
 * Post Time Ago
 */
function kadu_ready_time_ago(){
  return human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) );
}

function kadu_category_pl(){
  $catgorys = get_the_category();
  foreach( $catgorys as $key => $category):
      ?>
      <a class="cat" href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
        <?php echo esc_html($category->cat_name); ?>
      </a>
  <?php endforeach;
}

/**
 * Post Social Share
 *
 * @return void
 */
function kadu_post_share() {

  $permalink = get_permalink( get_the_ID() );
  $title     = get_the_title();
?>
<h6 class="title wow" data-splitting=""><?php esc_html_e( 'Share:', 'kadu-tools' );?></h6>
<div class="blog-details-social-share-icons">
  <a class="fb link" onClick="window.open('http://www.facebook.com/sharer.php?u=<?php echo esc_url( $permalink ); ?>','Facebook','width=600,height=300,left='+(screen.availWidth/2-300)+',top='+(screen.availHeight/2-150)+''); return false;" href="http://www.facebook.com/sharer.php?u=<?php echo esc_url( $permalink ); ?>">facebook</a>

    <a class="tw link" onClick="window.open('http://twitter.com/share?url=<?php echo esc_url( $permalink ); ?>&amp;text=<?php echo esc_attr( $title ); ?>','Twitter share','width=600,height=300,left='+(screen.availWidth/2-300)+',top='+(screen.availHeight/2-150)+''); return false;" href="http://twitter.com/share?url=<?php echo esc_url( $permalink ); ?>&amp;text=<?php echo str_replace( " ", "%20", $title ); ?>">Twitter</i></a>

    <a class="ln link" onClick="window.open('https://www.linkedin.com/cws/share?url=<?php echo esc_url( $permalink ); ?>&amp;text=<?php echo esc_attr( $title ); ?>','Linkedin share','width=600,height=300,left='+(screen.availWidth/2-300)+',top='+(screen.availHeight/2-150)+''); return false;" href="http://twitter.com/share?url=<?php echo esc_url( $permalink ); ?>&amp;text=<?php echo str_replace( " ", "%20", $title ); ?>">Linkedin</a>

    <a class="pt link" href='javascript:void((function()%7Bvar%20e=document.createElement(&apos;script&apos;);e.setAttribute(&apos;type&apos;,&apos;text/javascript&apos;);e.setAttribute(&apos;charset&apos;,&apos;UTF-8&apos;);e.setAttribute(&apos;src&apos;,&apos;http://assets.pinterest.com/js/pinmarklet.js?r=&apos;+Math.random()*99999999);document.body.appendChild(e)%7D)());'>Pinterest</a>
</div>
  
<?php 
}

/**
 * Get Menu List
 *
 * @return void
 */
function kadu_get_nav_menu(){

  $menus = array(
      '' => esc_html__('Default', 'kadu')
  );

  $obj_menus = wp_get_nav_menus();

  foreach ($obj_menus as $obj_menu){
      $menus[$obj_menu->term_id] = $obj_menu->name;
  }

  return $menus;
}


/**
 * Add Contact Method User
 */
function kadu_user_social_link( $methode ) {
    $methode['facebook']  = esc_html__( 'Facebook', 'kadu-tools' );
    $methode['twitter']   = esc_html__( 'Twitter', 'kadu-tools' );
    $methode['linkedin']  = esc_html__( 'Linkedin', 'kadu-tools' );
    $methode['instagram'] = esc_html__( 'Instagram', 'kadu-tools' );
    $methode['pinterest'] = esc_html__( 'Pinterest', 'kadu-tools' );
    $methode['youtube']   = esc_html__( 'YouTube', 'kadu-tools' );
  return $methode;
}
add_filter('user_contactmethods', 'kadu_user_social_link');



/**
 * Authore Avater
 */
function kadu_post_author_avatars($size) {
  echo get_avatar(get_the_author_meta('email'), $size);
}

add_action('genesis_entry_header', 'kadu_post_author_avatars');


function kadu_menu_selector() {
  $menus = wp_get_nav_menus();
  $items = array();
  $i     = 0;
  foreach ( $menus as $menu ) {
      if ( $i == 0 ) {
          $default = $menu->slug;
          $i ++;
      }
      $items[ $menu->slug ] = $menu->name;
  }
  return $items;
}
function kadu_portfolio_category(){
  $terms = get_terms( array(
    'taxonomy'    => 'portfolio_cat',
    'hide_empty'  => true,
  ) );

  $cat_list = [];
  foreach($terms as $post) {
  $cat_list[$post->slug]  = [$post->name];
  }
  return $cat_list;
}
function kadu_careero_category(){
  $terms = get_terms( array(
    'taxonomy'    => 'career_cat',
    'hide_empty'  => true,
  ) );

  $cat_list = [];
  foreach($terms as $post) {
  $cat_list[$post->slug]  = [$post->name];
  }
  return $cat_list;
}

/**
 * Image Size Render
 */
function kadu_img_size_control(){
    $image_sizes = get_intermediate_image_sizes(); 

    $addsizes = [
        'full' => 'Full size'
    ];
    $newsizes = array_merge($image_sizes, $addsizes);

    return array_combine($newsizes, $newsizes);
}

/**
 * 
 */
function kadu_select_cat($tax) {

  $categories_obj = get_categories('taxonomy='.$tax.'');
  $categories = array();

  foreach ($categories_obj as $pn_cat) {
      $categories[$pn_cat->cat_ID] = $pn_cat->cat_name;
  }
  return $categories;         
}

/**
 * directory category
 */
function get_data_form_director($tax,$label,$name){
    $terms = get_terms($tax);
    $x = '<select name="'.$name.'">';
    $x .= '<option value="">' . $label . '</option>';
    foreach ($terms as $term) {
        $x .= '<option value="' . $term->term_id . '">' . $term->name . '</option>';
    }
    $x .= '</select>';
    return $x;
}

/**
 * 
 */
function kadu_load_elementor_template(){
	$page_templates = get_posts( [
		'post_type'         => 'elementor_library',
		'posts_per_page'    => -1
	] );

	$options = [];

	if ( ! empty( $page_templates ) && ! is_wp_error( $page_templates ) ){
		foreach ( $page_templates as $template ) {
			$options[ $template->ID ] = $template->post_title;
		}
	}
	return $options;
}

function kadu_elemento_display() {
	return \Elementor\Plugin::instance();
}
function course_meta_data( $course_id ) {
  return get_post_meta( $course_id );
}
 function get_woocommerce_course_price( $product_id ) {
  $product = wc_get_product( $product_id );

  $course_price = get_woocommerce_currency_symbol();
  $course_price .= $product->get_price();

  return $course_price;
}


// Enable SVG uploads
function themex_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'themex_mime_types');

// Sanitize SVG files
function themex_sanitize_svg($file) {
  if ($file['type'] == 'image/svg+xml') {
    $svg = simplexml_load_file($file['tmp_name']);

    if ($svg === false) {
      $file['error'] = 'Invalid SVG file';
      return $file;
    }

    // Remove any potentially dangerous elements or attributes
    $sanitized_svg = themex_sanitize_svg_content($svg);

    // Save the sanitized SVG back to the file
    file_put_contents($file['tmp_name'], $sanitized_svg->asXML());
  }

  return $file;
}
add_filter('wp_handle_upload_prefilter', 'themex_sanitize_svg');

// Sanitize SVG content
function themex_sanitize_svg_content($svg) {
  $dangerous_elements = ['script', 'iframe', 'object', 'embed'];
  foreach ($dangerous_elements as $element) {
    foreach ($svg->xpath('//' . $element) as $dangerous) {
      unset($dangerous[0]);
    }
  }

  return $svg;
}