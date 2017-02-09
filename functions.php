<?php 
/**********************************************************************************
wpmu_theme_support - adds theme support for post formats, post thumbnails, HTML5 and automatic feed links
**********************************************************************************/
function wpmu_theme_support() {

	/* post formats */
	add_theme_support( 'post-formats', array( 'gallery', 'image', 'quote' ) );

	/* post thumbnails */
	add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

	/* HTML5 */
	add_theme_support( 'html5' );

	/* automatic feed links */
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'custom-background' );

	add_theme_support( 'custom-logo' );


    add_theme_support( 'woocommerce' );

}
add_action( 'after_setup_theme', 'wpmu_theme_support' );



// Registrar áreas de widgets
function theme_widgets_init() {
 // Área 1
 register_sidebar( array (
 'name' => 'Primary Widget Area',
 'id' => 'primary_widget_area',
 'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
 'after_widget' => "</li>",
 'before_title' => '<h3 class="widget-title">',
 'after_title' => '</h3>',
  ) );
 
 // Área 2
 register_sidebar( array (
 'name' => 'Secondary Widget Area',
 'id' => 'secondary_widget_area',
 'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
 'after_widget' => "</li>",
 'before_title' => '<h3 class="widget-title">',
 'after_title' => '</h3>',
  ) );
} // end theme_widgets_init

$preset_widgets = array (
 'primary_widget_area'  => array( 'search', 'pages', 'categories', 'archives' ),
 'secondary_widget_area'  => array( 'links', 'meta' )
);
if ( isset( $_GET['activated'] ) ) {
 update_option( 'sidebars_widgets', $preset_widgets );
}
// update_option( 'sidebars_widgets', NULL );

// Verificar widgets nas áreas de widgets
function is_sidebar_active( $index ){
  global $wp_registered_sidebars;
 
  $widgetcolums = wp_get_sidebars_widgets();
 
  if ($widgetcolums[$index]) return true;
 
 return false;
} // end is_sidebar_active
 
add_action( 'init', 'theme_widgets_init' );

// Contador de caracteres linha fina
function excerpt_count_js(){

if ('page' != get_post_type()) {

      echo '<script>jQuery(document).ready(function(){
jQuery("#postexcerpt .handlediv").after("<div style=\"position:absolute;top:12px;right:34px;color:#666;\"><small>Excerpt length: </small><span id=\"excerpt_counter\"></span><span style=\"font-weight:bold; padding-left:7px;\">/ 140</span><small><span style=\"font-weight:bold; padding-left:7px;\">character(s).</span></small></div>");
     jQuery("span#excerpt_counter").text(jQuery("#excerpt").val().length);
     jQuery("#excerpt").keyup( function() {
         if(jQuery(this).val().length > 140){
            jQuery(this).val(jQuery(this).val().substr(0, 140));
        }
     jQuery("span#excerpt_counter").text(jQuery("#excerpt").val().length);
   });
});</script>';
}
}
add_action( 'admin_head-post.php', 'excerpt_count_js');
add_action( 'admin_head-post-new.php', 'excerpt_count_js');





// Remover parágrafos do resumo do post e imagens
remove_filter( 'the_excerpt', 'wpautop' );


// img unautop
function img_unautop($pee) {
    $pee = preg_replace('/<p>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', '<div class="figure">$1</div>', $pee);
    return $pee;
}
add_filter( 'the_content', 'img_unautop', 30 );


// remove images width and height attributes
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );
 
function remove_width_attribute( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

// WOOCOMMERCE

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<section id="main">';
}

function my_theme_wrapper_end() {
  echo '</section>';
}

?>