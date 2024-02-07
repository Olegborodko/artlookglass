<?php
/**
 * Simple product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined( 'ABSPATH' ) || exit;

global $product;

if ( ! $product->is_purchasable() ) {
	return;
}

echo wc_get_stock_html( $product ); // WPCS: XSS ok.

if ( $product->is_in_stock() ) : ?>

	<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

	<form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>

        <div class="cart__form__wrap">

            <div class="cart__form__main">

                <?php

                add_action( 'woocommerce_before_add_to_cart_button', 'woocommerce_template_single_title', 5);
                add_action( 'woocommerce_before_add_to_cart_button', 'woocommerce_template_single_excerpt', 10);

                do_action( 'woocommerce_before_add_to_cart_button' );

                ?>
            </div>

            <div class="cart__form__total">

                <div class="cart__form__total__wrap">

                    <div class="estimated__cost__info">
                        <div class="total__block__title">Estimated cost</div>
                        <div class="total__block__subtitle">Please note that the price may differ from the calculated value in the case of changes in the cost of materials. We will contact you to clarify</div>

                        <div class="total__block__attributes">

                            <div class="total__block__attribute">
                                <div class="attribute__name">SKU:</div>
                                <div class="attribute__value"><?php echo $product->get_sku(); ?></div>
                            </div>


                        </div>
                    </div>

                    <?php

                    add_action( 'woocommerce_before_add_to_cart_quantity', 'woocommerce_template_single_price', 10);

                    do_action( 'woocommerce_before_add_to_cart_quantity' );

/*                    woocommerce_quantity_input(
                        array(
                            'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
                            'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
                            'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
                        )
                    );*/

                    do_action( 'woocommerce_after_add_to_cart_quantity' );
                    ?>

                    <div class="add__to__cart__buttons__wrap">

                        <button type="submit" name="add-to-cart"
                                value="<?php echo esc_attr( $product->get_id() ); ?>"
                                class="add_to_cart_button single_add_to_cart_button button alt<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>">
                            <?php echo esc_html( $product->single_add_to_cart_text() ); ?>
                        </button>

                    </div>

                    <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>

                </div>

            </div>

        </div>


	</form>

	<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

<?php endif; ?>
