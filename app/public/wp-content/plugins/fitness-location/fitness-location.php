<?php 
    /*
        Plugin Name: Fitness - Location
        Plugin URI:
        Description: Creates a Shortcode to display the location.
        Version: 1.0
        Author: Brianna Martin
        Author URI:
        Text Domain: fitness
    */

    if(!defined('ABSPATH')) die();

    //Shortcode Api

    function fitness_location_shortcode(){ 
        $location = get_field('location');
    ?>
        <div class="location">
            <input type="hidden" id="lat" value="<?php echo $location['lat']; ?>" />
            <input type="hidden" id="lng" value="<?php echo $location['lng']; ?>" />
            <input type="hidden" id="address" value="<?php echo $location['address']; ?>" />

            <div id="map"></div>
        </div> 
    <?php 
    }
    add_shortcode('fitness_location', 'fitness_location_shortcode');

    //Enqueues CSS and JS Files
    function location_scripts(){

        if(is_page('contact-us')):
            //Leaflet CSS
            wp_enqueue_style('leafletcss', 'https://unpkg.com/leaflet@1.6.0/dist/leaflet.css', array(), '1.6.0');

            //Leaflet JS
            wp_enqueue_script('leafletjs', 'https://unpkg.com/leaflet@1.6.0/dist/leaflet.js', array(), '1.6.0', true);

            //Fitness Plugin JS 
            wp_enqueue_script('fitness-leaflet', plugins_url('/js/fitness-leaflet.js', __FILE__), array('leafletjs'), '1.0.0', true);

        endif;
    }
    add_action('wp_enqueue_scripts', 'location_scripts');