<?php

class ProductCategory {

    public static function render() {
        $categories = Product::getCategories();
        $category = get_queried_object();
        $products = Product::getProducts($category);
        $category_image = self::getCategoryImageUrl($category);
        include TEMPLATES_DIR . "/product_category.php";
    }

    public static function getBreadcrumbs() {
        $category = get_queried_object();
        include TEMPLATES_DIR . "/category_breadcrumbs.php";
    }

    public static function getCategoryImageUrl($category) {
        $image_id = \Kama\WP_Term_Image::get_image_id($category);
        return wp_get_attachment_image_url($image_id, 'full');
    }

}
