<?php

class Product {

    public static function render() {

    }

    public static function scripts() {

    }

    public static function getCategories() {
        $res = array();
        $categories = get_terms( array(
            'taxonomy' => 'product_info_category',
            'hide_empty' => false,
            'orderby'     => 'ID',
            'order'       => 'ASC',
        ) );
        foreach ($categories as $category) {
            if(strtolower($category->name) == "uncategorized") continue;
            $res[] = $category;
        }
        return $res;
    }

    public static function getProducts($category = null) {
        $args = array(
            'post_type' => 'product_info',
            'post_status' => 'publish',
            'numberposts' => -1,
            'orderby'     => 'date',
            'order'       => 'ASC',
        );

        if(!is_null($category)) {
            $args["tax_query"] = array(
                array(
                    'taxonomy' => 'product_info_category',
                    'field' => 'term_id',
                    'terms' => $category->term_id,
                    'include_children' => false
                )
            );
        }
        return get_posts($args);
    }

    public static function getImageUrl($product_id) {
        return get_field("product_image", $product_id);
    }

    public static function getBreadcrumbs() {
        $product = get_post();
        $category = wp_get_post_terms($product->ID, 'product_info_category');
        if(count($category) > 0) $category = $category[0];
        include TEMPLATES_DIR . "/breadcrumbs.php";
    }

}
