<?php
if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}
define("TEMPLATES_DIR", get_template_directory() . "/templates");

// Hide Adminbar

// Init Classes
classesAutoload();

// Init WP
add_action( 'init', 'themeInit' );
function themeInit() {

    show_admin_bar(false);

    add_filter('wpcf7_spam', '__return_false');
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 60,
            'width'       => 260,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );

}


add_filter( 'woocommerce_product_single_add_to_cart_text', 'lw_cart_btn_text' );
add_filter( 'woocommerce_product_add_to_cart_text', 'lw_cart_btn_text' );
//Changing Add to Cart text to Buy Now!
function lw_cart_btn_text() {
    return __( 'Buy Now!', 'woocommerce' );
}

add_filter( 'woocommerce_add_to_cart_redirect', 'bbloomer_redirect_checkout_add_cart' );

function bbloomer_redirect_checkout_add_cart() {
    return wc_get_checkout_url();
}

// Menu`s
add_action('after_setup_theme', function(){
    register_nav_menus( array(
        'main_menu' => 'Main menu',
        'foot_menu' => 'Footer menu'
    ) );
});

// Theme Settings
add_action( 'customize_register', function($wp_customize) {
    ThemeSettings::register($wp_customize);
    SocialSettings::register($wp_customize);
});

//add_theme_support( 'post-thumbnails', array( 'post' ) );

add_action( 'wp_enqueue_scripts', 'load_scripts' );
function load_scripts(){


    wp_enqueue_script( 'fancybox-js', "https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js", array(), '3.5.7', true);
    wp_enqueue_script( 'slick-carousel-js', "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js", array(), '3.5.7', true);
    wp_enqueue_script( 'select2-js', "https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js", array(), '4.1.0', true);
    wp_enqueue_script( 'vue-js', "https://unpkg.com/vue@3/dist/vue.global.js", array(), '3.3.7', true);


    wp_enqueue_style("slick-style", "https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css", array(), '1.8.1');
    wp_enqueue_style("slick-carousel_style", "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css", array(), '1.8.1');
    wp_enqueue_style("fancybox_style", "https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css", array(), '3.5.7');
    wp_enqueue_style("lightslider_style", "https://sachinchoolur.github.io/lightslider/dist/css/lightslider.css", array(), '1.1.5');
    wp_enqueue_style("select2_style", "https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css", array(), '4.1.0');


    wp_enqueue_script( 'fa-font_script', "https://kit.fontawesome.com/59ded19dea.js", array(), '6.4.2', true);

    wp_enqueue_style("pre_style", get_template_directory_uri() . "/assets/css/style.min.css", array(), _S_VERSION);
    wp_enqueue_style("main_style", get_template_directory_uri() . "/assets/css/main.css", array(), _S_VERSION);
    wp_enqueue_style("main_woocommerce", get_template_directory_uri() . "/assets/css/woocommerce.css", array(), _S_VERSION);
    wp_enqueue_style("main_response", get_template_directory_uri() . "/assets/css/response.css", array(), _S_VERSION);

    wp_enqueue_script( 'app_script', get_template_directory_uri() . "/assets/js/app.min.js", [], _S_VERSION, true);
    wp_enqueue_script( 'app_main_script', get_template_directory_uri() . "/assets/js/main.js", [], _S_VERSION, true);

}

function classesAutoload() {
    $classes = scandir(get_template_directory() . "/classes");
    foreach ($classes as $class) {
        $ext = explode(".", $class);
        $ext = end($ext);
        if($ext === "php") {
            include get_template_directory() . "/classes/" . $class;
        }
    }
}

// Image for Category
add_action( 'admin_init', 'kama_wp_term_image' );
function kama_wp_term_image(){
    \Kama\WP_Term_Image::init( [
        'taxonomies' => [ 'category' ],
    ] );
}

// Image for Product Category
add_action( 'admin_init', 'product_wp_term_image' );
function product_wp_term_image(){
    \Kama\WP_Term_Image::init( [
        'taxonomies' => [ 'product_info_category' ],
    ] );
}

/* Excerpt more length */
function new_excerpt_length($length) {
    return 40;
}
add_filter('excerpt_length', 'new_excerpt_length');

/* Excerpt more */
function new_excerpt_more($more) {
    global $post;
    return '... <a class="read-more" href="'. get_permalink($post->ID) . '">Read more</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

require get_template_directory() . '/inc/woocommerce.php';

require get_template_directory() . '/inc/rest-api.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}

/*function wrd_woocommerce_remove_image_from_gallery ( $html, $attachment_id ) {

    global $post, $product;

    $attachment_ids = $product->get_gallery_image_ids();

    if ( ! $attachment_ids ) {
        return $html;
    }
    $featured_image = get_post_thumbnail_id( $post->ID );

    echo $featured_image;
    echo ' -- ';
    echo $attachment_id;

    print_r($attachment_ids);

    if ( is_product() && $attachment_id === $featured_image ) {
        $html = '';
        echo ' --- ';
    }
    return $html;
}
add_filter( 'woocommerce_single_product_image_thumbnail_html', 'wrd_woocommerce_remove_image_from_gallery', 10, 2 );*/

add_action('template_redirect', 'artlookk_redirect_shop_page');

/* url/shop = 404 */
function artlookk_redirect_shop_page() {
    if (is_shop()) {
        global $wp_query;
        $wp_query->set_404();
        status_header(404);
        nocache_headers();
        include( get_query_template( '404' ) );
        exit;
    }
}

/* contact form 7 success message */
add_action('wp_footer', 'custom_cf7_success_script');

function custom_cf7_success_script() {
    ?>
    <script type="text/javascript">
      var formSubmitted = false;

        function showFormMsg(formId){
          if (formId == event.detail.contactFormId) {
                // console.log('==> ', formId);
                document.getElementById('m_contact_form_id_' + formId).style.display = 'none';
                document.getElementById('m_contact_form_success_id_' + formId).style.display = 'block';
            }
        }

        document.addEventListener('wpcf7mailsent', function (event) {
            showFormMsg('492');
            showFormMsg('6');
            showFormMsg('493');
            showFormMsg('2210');
        }, false);

        // document.addEventListener('wpcf7submit', function (event) {
        //   if ('2210' == event.detail.contactFormId) {
        //     event.preventDefault();

        //     $("Transition[data-step=5] #art_steep_files").appendTo($("Transition[data-step=8] #art_steep_back_files"));

        //     setTimeout(function () {
        //       let formData = new FormData(event.target);
        //       let xhr = new XMLHttpRequest();
        //       xhr.open('POST', event.target.action, true);
        //       xhr.send(formData);
        //     }, 1000);
        //   }
        // }, false);
    </script>
    <?php
}