<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header();

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */

remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
do_action( 'woocommerce_before_main_content' );

global $wp_query;

// get the query object
$cat = $wp_query->get_queried_object();

// get the thumbnail id using the queried category term_id
$thumbnail_id = get_term_meta( $cat->term_id, 'thumbnail_id', true );

// get the image URL
$image = wp_get_attachment_image( $thumbnail_id, 'full' );

$term_children = get_term_children( $cat->term_id, $cat->taxonomy );

if (!count($term_children)) {
    $term_children = get_term_children( $cat->parent, $cat->taxonomy );
}
// term_id
?>

<?php require get_template_directory() . '/inc/parts/section_hero.php'; ?>

<?php require get_template_directory() . '/inc/parts/section__feedback__widget.php'; ?>

<?php if ( count($term_children))  { ?>
    <div class="children__categories__section">
        <div class="container">
            <div class="children__categories__wrap">
                <?php foreach ( $term_children as $child ) {
                    $term = get_term_by( 'id', $child, $cat->taxonomy );
                    $category_icon = get_field( "category_icon", $term );
                    ?>
                    <div class="children__category<?=($cat->term_id === $term->term_id ? ' active' : '')?>">
                        <a href="<?=get_term_link( $child, $cat->taxonomy )?>">
                            <?php if ($category_icon) { ?>
                                <span class="children__category__icon"><img src="<?=$category_icon['url']?>" alt="<?=$term->name?>"></span>
                            <?php } ?>
                            <span class="children__category__name"><?=$term->name?></span>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>

<?php
/**
<header class="woocommerce-products-header">
<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
<?php endif; ?>

<?php

 * Hook: woocommerce_archive_description.
 *
 * hooked woocommerce_taxonomy_archive_description - 10
 * hooked woocommerce_product_archive_description - 10

do_action( 'woocommerce_archive_description' );
?>
    </header>
 */
?>

<div class="products__list__wrap">
    <div class="container">

        <?php
        if ( woocommerce_product_loop() ) {

            /**
             * Hook: woocommerce_before_shop_loop.
             *
             * @hooked woocommerce_output_all_notices - 10
             * @hooked woocommerce_result_count - 20
             * @hooked woocommerce_catalog_ordering - 30
             */

            remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20, 0 );
            remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30, 0 );

            do_action( 'woocommerce_before_shop_loop' );

            woocommerce_product_loop_start();

            if ( wc_get_loop_prop( 'total' ) ) {
                while ( have_posts() ) {
                    the_post();

                    /**
                     * Hook: woocommerce_shop_loop.
                     */
                    do_action( 'woocommerce_shop_loop' );

                    wc_get_template_part( 'content', 'product' );
                }
            }

            woocommerce_product_loop_end();

            /**
             * Hook: woocommerce_after_shop_loop.
             *
             * @hooked woocommerce_pagination - 10
             */
            do_action( 'woocommerce_after_shop_loop' );
        } else {
            /**
             * Hook: woocommerce_no_products_found.
             *
             * @hooked wc_no_products_found - 10
             */
            do_action( 'woocommerce_no_products_found' );
        }

        ?>
    </div>
</div>


<?php require get_template_directory() . '/inc/parts/section_why_artlook.php'; ?>

<?php require get_template_directory() . '/inc/parts/section__types.php'; ?>

<?php require get_template_directory() . '/inc/parts/section_glass_design.php'; ?>

<?php require get_template_directory() . '/inc/parts/section_choose_a_category.php'; ?>

<?php require get_template_directory() . '/inc/parts/section__stages.php'; ?>



<?php require get_template_directory() . '/inc/parts/section__investment.php'; ?>

<?php require get_template_directory() . '/inc/parts/section_category_gallery.php'; ?>

<section class="main__section-six section-six">
    <div class="section-six__container container">
		<div class="section-two__main main-section">
			<div class="main-section__top">
				<div class="main-six__top">
					<p class="main-six__title">our clients say</p>
				</div>
				<div class="sectionTwo-title__nav nav-section">
					<button type="button" class="nav-section__item section_map_items-prev-left">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/left_arrow.svg" alt="" />
						  Prev.
					</button>
					<button type="button" class="nav-section__item section_map_items-next-right">
						  Next
						<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/right-arrow.svg" alt="" />
					</button>
				</div>
			</div>
			<div class="section_map_container">
				<div class="section_map">
					<img src="http://artlookglass.com/wp-content/uploads/2024/01/map-new-2.jpg" alt="">
					<div class="hero__btns">
						<a class="btn_b" href="https://search.google.com/local/reviews?placeid=ChIJH9U09IdFwokRHmnV_y6e7fE&q=Artlook+Glass+Inc,+238+Bay+Ridge+Pkwy,+Brooklyn,+NY+11209,+%D0%A1%D0%BE%D0%B5%D0%B4%D0%B8%D0%BD%D0%B5%D0%BD%D0%BD%D1%8B%D0%B5+%D0%A8%D1%82%D0%B0%D1%82%D1%8B&hl=en&gl=UA" target="_blank">
							<svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
								<rect x="3.5" y="9" width="14" height="2" fill="white"></rect>
								<rect x="11.5" y="3" width="14" height="2" transform="rotate(90 11.5 3)" fill="white"></rect>
							</svg>
							see all reviews
						</a>
					</div>
				</div>
				<div class="section_map_items_container">
					<div class="section_map_items">
						<div class="section_map_item section_map_item-1">
							<div class="section_map_item_photo"><img src="http://artlookglass.com/wp-content/uploads/2024/01/review-1.png" alt=""></div>
							<div class="section_map_item_name"><strong>Kane Collins</strong></div>
							<div class="section_map_item_icon_g"><img src="http://artlookglass.com/wp-content/uploads/2024/01/devicon_google.png" alt=""></div>
						</div>
						<div class="section_map_item section_map_item-2">
							<div class="section_map_item_star"><img src="http://artlookglass.com/wp-content/uploads/2024/01/star-r.png" alt=""></div>
							<div class="section_map_item_descr">Artlook Glass impressed me with their commitment to sustainability when replacing my home windows...</div>
							<div class="section_map_item_link"><a href="https://g.co/kgs/hzVQxUZ" target="_blank">Show more</a></div>
						</div>
					</div>
					<div class="section_map_items">
						<div class="section_map_item section_map_item-1">
							<div class="section_map_item_photo"><img src="http://artlookglass.com/wp-content/uploads/2024/01/review-2.png" alt=""></div>
							<div class="section_map_item_name"><strong>Ryder Stewart</strong></div>
							<div class="section_map_item_icon_g"><img src="http://artlookglass.com/wp-content/uploads/2024/01/devicon_google.png" alt=""></div>
						</div>
						<div class="section_map_item section_map_item-2">
							<div class="section_map_item_star"><img src="http://artlookglass.com/wp-content/uploads/2024/01/star-r.png" alt=""></div>
							<div class="section_map_item_descr">Artlook Glass's selection of the perfect frosted glass for my bathroom windows added a touch of sophistication to my home...</div>
							<div class="section_map_item_link"><a href="https://g.co/kgs/Srh8Qrp" target="_blank">Show more</a></div>
						</div>
					</div>
					<div class="section_map_items">
						<div class="section_map_item section_map_item-1">
							<div class="section_map_item_photo"><img src="http://artlookglass.com/wp-content/uploads/2024/01/review-3.png" alt=""></div>
							<div class="section_map_item_name"><strong>Chester Baxter</strong></div>
							<div class="section_map_item_icon_g"><img src="http://artlookglass.com/wp-content/uploads/2024/01/devicon_google.png" alt=""></div>
						</div>
						<div class="section_map_item section_map_item-2">
							<div class="section_map_item_star"><img src="http://artlookglass.com/wp-content/uploads/2024/01/star-r.png" alt=""></div>
							<div class="section_map_item_descr">Artlook Glass transformed our dull office space into a modern, dynamic environment with their sleek glass partitions...</div>
							<div class="section_map_item_link"><a href="https://g.co/kgs/YfGXYRm" target="_blank">Show more</a></div>
						</div>
					</div>
					<div class="section_map_items">
						<div class="section_map_item section_map_item-1">
							<div class="section_map_item_photo"><img src="http://artlookglass.com/wp-content/uploads/2024/01/review-4.png" alt=""></div>
							<div class="section_map_item_name"><strong>Harrison Walker</strong></div>
							<div class="section_map_item_icon_g"><img src="http://artlookglass.com/wp-content/uploads/2024/01/devicon_google.png" alt=""></div>
						</div>
						<div class="section_map_item section_map_item-2">
							<div class="section_map_item_star"><img src="http://artlookglass.com/wp-content/uploads/2024/01/star-r.png" alt=""></div>
							<div class="section_map_item_descr">Artlook Glass's custom glass signage has been a game-changer for my business. Their innovative designs and flawless...</div>
							<div class="section_map_item_link"><a href="https://g.co/kgs/tL52b1y" target="_blank">Show more</a></div>
						</div>
					</div>
					<div class="section_map_items">
						<div class="section_map_item section_map_item-1">
							<div class="section_map_item_photo"><img src="http://artlookglass.com/wp-content/uploads/2024/01/review-5.png" alt=""></div>
							<div class="section_map_item_name"><strong>Amaya Ortiz</strong></div>
							<div class="section_map_item_icon_g"><img src="http://artlookglass.com/wp-content/uploads/2024/01/devicon_google.png" alt=""></div>
						</div>
						<div class="section_map_item section_map_item-2">
							<div class="section_map_item_star"><img src="http://artlookglass.com/wp-content/uploads/2024/01/star-r.png" alt=""></div>
							<div class="section_map_item_descr">Artlook Glass played a pivotal role in simplifying my home renovation project. Their expert advice, combined with their custom glass...</div>
							<div class="section_map_item_link"><a href="https://g.co/kgs/R72j63D" target="_blank">Show more</a></div>
						</div>
					</div>
					<div class="section_map_items">
						<div class="section_map_item section_map_item-1">
							<div class="section_map_item_photo"><img src="http://artlookglass.com/wp-content/uploads/2024/01/review-6.png" alt=""></div>
							<div class="section_map_item_name"><strong>Riley Hammond</strong></div>
							<div class="section_map_item_icon_g"><img src="http://artlookglass.com/wp-content/uploads/2024/01/devicon_google.png" alt=""></div>
						</div>
						<div class="section_map_item section_map_item-2">
							<div class="section_map_item_star"><img src="http://artlookglass.com/wp-content/uploads/2024/01/star-r.png" alt=""></div>
							<div class="section_map_item_descr">Their eco-friendly approach to upgrading our office doors was a major selling point for us. Artlook Glass not only cares about aesthetics...</div>
							<div class="section_map_item_link"><a href="https://g.co/kgs/E6BKWdb" target="_blank">Show more</a></div>
						</div>
					</div>
					<div class="section_map_items">
						<div class="section_map_item section_map_item-1">
							<div class="section_map_item_photo"><img src="http://artlookglass.com/wp-content/uploads/2024/01/review-7.png" alt=""></div>
							<div class="section_map_item_name"><strong>Jonah Barnes</strong></div>
							<div class="section_map_item_icon_g"><img src="http://artlookglass.com/wp-content/uploads/2024/01/devicon_google.png" alt=""></div>
						</div>
						<div class="section_map_item section_map_item-2">
							<div class="section_map_item_star"><img src="http://artlookglass.com/wp-content/uploads/2024/01/star-r.png" alt=""></div>
							<div class="section_map_item_descr">I've been using Artlook Glass Inc for years, and they never disappoint. Whether it's a simple glass replacement or a complex...</div>
							<div class="section_map_item_link"><a href="https://g.co/kgs/72nXpX4" target="_blank">Show more</a></div>
						</div>
					</div>
					<div class="section_map_items">
						<div class="section_map_item section_map_item-1">
							<div class="section_map_item_photo"><img src="http://artlookglass.com/wp-content/uploads/2024/01/review-8.png" alt=""></div>
							<div class="section_map_item_name"><strong>Joanna Rogers</strong></div>
							<div class="section_map_item_icon_g"><img src="http://artlookglass.com/wp-content/uploads/2024/01/devicon_google.png" alt=""></div>
						</div>
						<div class="section_map_item section_map_item-2">
							<div class="section_map_item_star"><img src="http://artlookglass.com/wp-content/uploads/2024/01/star-r.png" alt=""></div>
							<div class="section_map_item_descr">Artlook Glass's commitment to sustainability impressed me. They provided eco-friendly glass options for my new energy-efficient windows...</div>
							<div class="section_map_item_link"><a href="https://g.co/kgs/8EXBFNX" target="_blank">Show more</a></div>
						</div>
					</div>
				</div>
			</div>
			<hr class="hr-section"> 
		</div>
	</div>
	
	<script>
        $( document ).ready(function() {
            $('.section_map_items_container').slick({
                dots:false,
                slidesToScroll: 6,
                slidesToShow: 6,
                initialSlide: 0,
                infinite: true,
                prevArrow: $('.section_map_items-prev-left'),
                nextArrow: $('.section_map_items-next-right'),
                responsive: [
                    {
                        breakpoint: 1640,
                        settings: {
                            slidesToShow: 6,
                            slidesToScroll: 6
                        }
                    },
                    {
                        breakpoint: 1340,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 4
                        }
                    },
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    },
                    {
                        breakpoint: 750,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
					{
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });

    </script>
	
</section>

<?php
include TEMPLATES_DIR . "/HomePage/section-seven.php";

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
//do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
