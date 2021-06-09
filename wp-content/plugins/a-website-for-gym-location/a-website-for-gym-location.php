
<?php  

/*

Plugin Name: A Website For Gym - Contact
Plugin URl:
Description: Create a shortcode to display the location
Version: 1.0
Author: Moshtafizur Rahman Anty
Text Domain: gymtheme

*/

if(!defined('ABSPATH')) die(); 

// Shortcode API

function a_website_for_gym_location_shortcode() {

    $location   =   get_field('location');


?>



<div class="location">

    <input type="hidden" id="lat" value="<?php echo $location['lat']; ?>"/>
    <input type="hidden" id="lng" value="<?php echo $location['lng']; ?>"/>
    <input type="hidden" id="address" value="<?php echo $location['address']; ?>"/>

    <div id="map"></div>

</div>

<?php

}

add_shortcode('a_website_for_gym_location', 'a_website_for_gym_location_shortcode'); //[a_website_for_gym_location]


// Enqueues the CSS and JS files

function a_website_for_gym_location_scripts () {

    if(is_page('contact-us')  ) {
                
        // leaflet CSS

        wp_enqueue_style('leafletcss','https://unpkg.com/leaflet@1.7.1/dist/leaflet.css', array(), '1.5.1');

        wp_enqueue_script('leafletjs', 'https://unpkg.com/leaflet@1.7.1/dist/leaflet.js', array(), '1.5.1', true);
       
        wp_enqueue_script('a_website_for_gym-leaflet', plugins_url('/js/a_website_for_gym_leaflet.js', __FILE__), array('leafletjs'), '1.0.0', true);

    }

}


add_action('wp_enqueue_scripts', 'a_website_for_gym_location_scripts');
