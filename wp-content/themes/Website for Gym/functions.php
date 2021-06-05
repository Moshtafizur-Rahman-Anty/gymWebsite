<?php  


// LInk to the queries file
require get_template_directory() . '/inc/custom-queries.php';   



//  Creates the Menus

function website_for_gym_menu() {

    // Wordpress Function
    
    register_nav_menus(array(

        'main-menu' =>  'Main Menu'

    ));
}

// Hooks

add_action('init', 'website_for_gym_menu');

// Add stylesheets and JS FIles

function website_for_gym_scripts() {

    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');

    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700&family=Raleway:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700&family=Staatliches&display=swap', array(),'1.0.0');

    wp_enqueue_style('slicknavcss', get_template_directory_uri() . '/CSS/slicknav.min.css', array(),' 1.0.10');

    if( basename(get_page_template()) === 'page-gallery.php'){
   
    // Lightbox css

    wp_enqueue_style('lightboxcss', get_template_directory_uri() . '/CSS/lightbox.min.css', array(), '2.11.1');
    
    }

    // BX library
    if(is_front_page()) {
        wp_enqueue_style('bxslider', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css', array(), '4.2.12');
    }

    
    //THEMES MAIN STYLESHEET

    wp_enqueue_style('theme_name_style', get_stylesheet_uri(), array('normalize', 'google-font'), filemtime( get_template_directory() . '/style.css' ) , 'all');

    // BX script
    if(is_front_page()) {
        wp_enqueue_script('bxsliderjs', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js', array('jquery'), '4.2.12',true);
    }


    // Load JS scripts

    wp_enqueue_script('jquery');

    wp_enqueue_script('slicknavjs', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);

    if( basename(get_page_template()) === 'page-gallery.php') {


    wp_enqueue_script('lightboxjs', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '1.0.0', true);

    }
    
    wp_enqueue_script('script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);




}


add_action('wp_enqueue_scripts', 'website_for_gym_scripts');



// Enable feature Image and other stuff

function website_for_gym_setup() {


    // register new image size
    add_image_size('square', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('box', 400, 375, true);
    add_image_size('mediumSize', 700, 400, true);
    add_image_size('blog', 966, 644, true);


    // add feature image
    add_theme_support('post-thumbnails');

    // SEO title

    add_theme_support('title-tag');

}

add_action('after_setup_theme', 'website_for_gym_setup');


function website_for_gym_widgets() {

    register_sidebar(array(
        'name'  =>  'Sidebar',
        'id'    =>  'sidebar',
        'before_widget' =>  '<div class="widget">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h3 class="text-primary">',
        'after_title'   =>  '</h3>'
    ));

}

add_action('widgets_init','website_for_gym_widgets');


// Displays the hero on background of the front-page

function a_Website_for_gym_hero_image () {

    $front_page_id  =   get_option('page_on_front');
    $image_id   =   get_field('hero_image', $front_page_id);   
    $image  =   $image_id['url'];

    // create a" false" stylesheet

    wp_register_style('custom', false);
    
    wp_enqueue_style('custom');

    $featured_image_css = "

    body .home .site-header {

        background-image: linear-gradient(0,0,0,0.7), url($image);

    }

    ";

    wp_add_inline_style('custom', $featured_image_css);

}

add_action('init', 'a_Website_for_gym_hero_image');