<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

$sticker_info = get_field( "sticker_info", $product->get_id() );
$product_thumbnail_icon = get_field( "product_icon", $product->get_id() );

?>
<li <?php wc_product_class( '', $product ); ?>>

    <div class="product__wrap">


        <div class="product__image">

            <div class="stickers__wrap">
                <?php if ($sticker_info) { ?>
                    <div class="sticker__item">Info: <?=$sticker_info?></div>
                <?php } ?>
            </div>


            <?php

            /**
             * Hook: woocommerce_before_shop_loop_item.
             *
             * @hooked woocommerce_template_loop_product_link_open - 10
             */
            do_action( 'woocommerce_before_shop_loop_item' );

            remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10, 0 );


            if ( $product_thumbnail_icon ) {
                echo wp_get_attachment_image ( $product_thumbnail_icon['ID'], [360, 460], false, '' );

                remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10, 0 );
            }


            /**
             * Hook: woocommerce_before_shop_loop_item_title.
             *
             * @hooked woocommerce_show_product_loop_sale_flash - 10
             * @hooked woocommerce_template_loop_product_thumbnail - 10
             */
            do_action( 'woocommerce_before_shop_loop_item_title' );



            ?>




        </div>


        <div class="product__caption">
            <?php
            /**
             * Hook: woocommerce_shop_loop_item_title.
             *
             * @hooked woocommerce_template_loop_product_title - 10
             */
            do_action( 'woocommerce_shop_loop_item_title' );
            /**
             * Hook: woocommerce_after_shop_loop_item_title.
             *
             * @hooked woocommerce_template_loop_rating - 5
             * @hooked woocommerce_template_loop_price - 10
             */

            remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10, 0 );


            do_action( 'woocommerce_after_shop_loop_item_title' );

            /**
             * Hook: woocommerce_after_shop_loop_item.
             *
             * @hooked woocommerce_template_loop_product_link_close - 5
             * @hooked woocommerce_template_loop_add_to_cart - 10
             */
            ?>

            <div class="groups__button">
                <?php

                add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_price', 9, 0 );
                do_action( 'woocommerce_after_shop_loop_item' );
                ?>
            </div>




        </div>

    </div>

</li>
