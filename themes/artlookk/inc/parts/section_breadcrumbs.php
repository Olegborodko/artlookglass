<?php
$product = get_post();
$category = wp_get_post_terms($product->ID, 'product_info_category');
if(count($category) > 0) $category = $category[0];
?>

<div class="main-blog__crumbs">
    <a href="/"><p class="main-blog__crumbs-one">ArtLook Glass</p></a>
    <i class="_icon-menu_arrow rotate_icon"></i>
    <a href="<?php echo get_term_link($category); ?>"><p class="main-blog__crumbs-one"><?php echo $category->name; ?></p></a>
    <i class="_icon-menu_arrow rotate_icon"></i>
    <p class="main-blog__crumbs-two"><?php echo $product->post_title; ?></p>
</div>
