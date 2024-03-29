<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

    <div class="single__product__wrap">


        <div class="product__images__wrap">
            <div class="product__images">
                <?php
                /**
                 * Hook: woocommerce_before_single_product_summary.
                 *
                 * @hooked woocommerce_show_product_sale_flash - 10
                 * @hooked woocommerce_show_product_images - 20
                 */

                remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );

                do_action( 'woocommerce_before_single_product_summary' );
                ?>
            </div>

            <div class="product__info__carts">

                <div class="info__cart">
                    <div class="info__cart__title">Measurement Information</div>
                    <div class="info__cart__text">Please measure your space, all glass deductions will be based on the hardware used, for a complete guide on how to measure your shower enclosure space please clickhere</div>
                </div>

                <div class="info__cart">
                    <div class="info__cart__title">Installation Information</div>
                    <div class="info__cart__text">You will need 2 people to complete the installation, for a complete installation guide of your shower door please click here</div>
                </div>

                <div class="info__cart">
                    <div class="info__cart__title">Shipping Information</div>
                    <div class="info__cart__text">Delivery: Ships within 5 business days</div>
                </div>


            </div>

        </div>

        <div class="product__summary__wrap">

            <div class="summary entry-summary">
                <?php
                /**
                 * Hook: woocommerce_single_product_summary.
                 *
                 * @hooked woocommerce_template_single_title - 5
                 * @hooked woocommerce_template_single_rating - 10
                 * @hooked woocommerce_template_single_price - 10
                 * @hooked woocommerce_template_single_excerpt - 20
                 * @hooked woocommerce_template_single_add_to_cart - 30
                 * @hooked woocommerce_template_single_meta - 40
                 * @hooked woocommerce_template_single_sharing - 50
                 * @hooked WC_Structured_Data::generate_product_data() - 60
                 */


                remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
                remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
                remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
                remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
                remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

                //add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 10);

                do_action( 'woocommerce_single_product_summary' );
                ?>
            </div>

            <?php
            /**
             * Hook: woocommerce_after_single_product_summary.
             *
             * @hooked woocommerce_output_product_data_tabs - 10
             * @hooked woocommerce_upsell_display - 15
             * @hooked woocommerce_output_related_products - 20
             */

            remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
            remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

            do_action( 'woocommerce_after_single_product_summary' );
            ?>


        </div>



    </div>




</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>


<script>

    $(document).ready(function() {
        $('.tmcp-select').select2();
    });

</script>
