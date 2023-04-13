<?php

function theblog_custom_post(){

$blogPost_label = array (
    'name'              => __('Pricing Post', 'textdomain'),
    'singular_name'     => __('Pricing Post', 'textdomain'),
    'add_new'           => __('Add Pricing Post', 'textdomain'),
    'add_new_item'      => __('Add New Pricing Post', 'textdomain'),
    'edit_item'         => __('Edit New Pricing Post', 'textdomain'),
    'all_items'         => __('Pricing Post', 'textdomain')
);

$blogPost_args = array(
    'labels'            => $blogPost_label,
    'public'            => true,
    'capability_type'   => 'post',
    'show_ui'           => true,
    'taxonomies'        => array('post_tag', 'category'),
    'supports'          => array('title', 'thumbnail', 'excerpt' )
);

register_post_type('blogPost',$blogPost_args);

}

add_action('init','theblog_custom_post');
