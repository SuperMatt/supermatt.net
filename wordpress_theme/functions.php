<?php

add_action('init', 'create_post_type');
function create_post_type() {
    register_post_type( 'events',
        array(
            'labels' => array(
                'name' => __( 'Events' ),
                'singular_name' => __( 'Event' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' > array('slug' => 'events'),
        )
    );
}

function register_my_menus() {
    register_nav_menus( array('header-menu' => __('Header Menu' ) ) );
}
add_action ( 'init', 'register_my_menus' );

function add_query_vars_filter( $vars ) {
    $vars[] = "allevents";
    return $vars;
}

add_filter('query_vars', 'add_query_vars_filter');
?>
