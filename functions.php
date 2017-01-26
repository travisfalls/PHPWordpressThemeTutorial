<?php 
function torontoOnline_scripts() {
	wp_enqueue_style('style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'torontoOnline_scripts' );

/** Navigation **/
register_nav_menus(array(
	'main_menu' => __('Main Menu', 'torontoOnline')
) );

/** Widget Zone **/
function theme_widgets() {
    register_sidebar(array(
        'name' => __('Sidebar Testimonials'),
        'id' => __('testimonials'),
        'description' => __('Testimonials Widget'),
        'before_widget' => __('<aside id="%1$s" class="widget %2$s">'),
        'after_widget' => __('</aside>'),
        'before_title' => __('<h3 class="widget-title">'),
        'after_title' => __('</h3>'),
    ));
}

add_action('widgets_init', 'theme_widgets');

/** Add Featured Image **/
add_theme_support('post-thumbnails');

add_image_size('featured', 1100, 420, true);
add_image_size('medium-blog', 358, 208, true);
 
add_filter('show_admin_bar', '__return_false');