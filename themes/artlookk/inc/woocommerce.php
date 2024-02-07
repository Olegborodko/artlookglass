<?php



function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 360,
        'single_image_width'    => 600,

        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 5,
        ),
    ) );



}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


/**
 * Change several of the breadcrumb defaults
 */
add_filter( 'woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs' );
function jk_woocommerce_breadcrumbs() {
    return array(
        'delimiter'   => ' <span class="delimiter"><svg xmlns="http://www.w3.org/2000/svg" width="5" height="11" viewBox="0 0 5 11" fill="none"><path d="M0 10.5L5 5.5L0 0.5V10.5Z" fill="#232C2E"/></svg></span> ',
        'wrap_before' => '<nav class="woocommerce-breadcrumb" itemprop="breadcrumb">',
        'wrap_after'  => '</nav>',
        'before'      => '',
        'after'       => '',
        'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
    );
}