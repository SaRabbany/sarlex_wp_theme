
<?php
function theme_add_style(){
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'fontawesome-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' );
    wp_enqueue_style( 'slick_carusel_css', get_template_directory_uri(). 'slick/slick.css');
    wp_enqueue_style('slick_carusel_theme', get_template_directory_uri() . 'slick/slick-theme.css');
    wp_enqueue_style( 'aos_animation', 'https://unpkg.com/aos@2.3.1/dist/aos.css');

    wp_enqueue_style('style_sheet', get_stylesheet_uri());

    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array('bootstrap'), '1.0' ,true);
    wp_enqueue_script('jquery-add', '//code.jquery.com/jquery-1.11.0.min.js', array('jquery'), '1.2' , true);
    wp_enqueue_script('jquery-min', '//code.jquery.com/jquery-migrate-1.2.1.min.js', array('jquery'), '1.2' , true);
    wp_enqueue_script('slick-min', get_template_directory_uri(). 'slick/slick.min.js', array('slick') , '1.0 ' , true);
     wp_enqueue_script('slick-app', get_template_directory_uri(). 'slick-app.js', array('slick') , '1.0 ' , true);
    wp_enqueue_script('aos-animation', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array('aos') ,'1.0' , true);

}

add_action('wp_enqueue_scripts', 'theme_add_style');



//website all setup function
function sarlex_theme_setup(){

    add_theme_support('post-thumbnails', array('sliders'));
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    load_theme_textdomain('sarlex', get_template_directory_uri().'/language');
    register_nav_menus(array(
        'main-menus' => __('primary-menu','sarlex ')
    ));
}
add_action('after_setup_theme', 'sarlex_theme_setup');

//custom post function

function sarlex_custom_post(){
    register_post_type('sliders', array(
        'labels' => array(
            'name' => __('slides', 'sarlex'),
            'singular_name'=> __('Slider' , 'sarlex')
        ),
        'public'=> true,
        'supports'=> array('title','editor', 'thumbnail', 'custom-fields')
    ));
}
add_action('init' , 'sarlex_custom_post');




//blog post after_setup_theme

function sarlex_blog_post(){
    register_post_type('blogPost', array(
        'labels' =>array(
            'name'=>__('BlogPosts', 'sarlex'),
            'blogTitle' => __('BlogTitle', 'sarlex'),
            
        ),
        'public' => true,
        'supports' => array('title','editor', 'thumbnail', 'custom-fields')
    ));
}

add_action('init', 'sarlex_blog_post');

