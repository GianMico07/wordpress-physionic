<?php 

//load css and js

function physionic_assets() {
    wp_enqueue_style('physionic-css',get_template_directory_uri() . '/css/main.css', microtime());
}

add_action('wp_enqueue_scripts','physionic_assets');

?>