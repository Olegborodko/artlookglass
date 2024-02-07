<!DOCTYPE html>
<html lang="en">
<?php include get_template_directory() . "/head.php"; ?>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!--<div class="preloader">
    <div class="preloader__row">
        <div class="preloader__item"></div>
        <div class="preloader__item"></div>
    </div>
</div>-->
<div class="wrapper">
    <header class="header main__header">
        <div class="header__wrapper">
            <div class="header__container container">
                <div class="header__body">
                    <div class="header__logo logo">
                        <?php
                        the_custom_logo();
                        ?>
                    </div>
                    <div class="header__menu menu">
                        <div id="menuOpen"><span></span></div>

                        <div class="header__menu__wrap">
                            <ul class="menu__list">


                                <?php

                                /**

                                <!-- Start Menu Products -->
                                <li style="display: none" class="menu__item product_item_wrap mega-dropdown">
                                <p id="header_menu_product_item" class="menu__link menu__link-dropdown disable-mobile">
                                Products <i
                                class="_icon-menu_arrow menu__icon"></i></p></i>
                                <div class="menu__mega mega-menu">
                                <?php $categories = Product::getCategories();

                                ?>
                                <ul class="mega-menu__sub-list">
                                <?php $first_item = 0; ?>
                                <?php foreach ($categories as $category) { ?>
                                <?php $cat_image_id = get_term_meta($category->term_id, '_thumbnail_id', 1); ?>
                                <?php $cat_image_url = wp_get_attachment_image_url($cat_image_id, 'full'); ?>
                                <?php $products = Product::getProducts($category); ?>
                                <li class="mega-menu__sub-item">
                                <a href="<?php echo get_term_link($category); ?>"
                                onclick="return document.app.onCategoryClick(this);"
                                onmouseover="document.app.onHoverProductMenuItem('<?php echo $cat_image_url; ?>', '<?php echo get_term_link($category); ?>');">
                                <p class="mega-menu__sub-title active-links"><?php echo $category->name; ?></p>
                                <ul class="mega-menu__sub-sub-list <?php if ($first_item == 0) {
                                echo "prod-active";
                                $first_item++;
                                } ?>">
                                <?php foreach ($products as $product) { ?>
                                <li class="mega-menu__sub-sub-item">
                                <a href="<?php echo get_permalink($product); ?>"
                                onmouseover="document.app.onHoverProductMenuItem('<?php echo Product::getImageUrl($product->ID); ?>', '<?php echo get_permalink($product); ?>');"
                                class="mega-menu__sub-sub-title"><i
                                class="fa-solid fa-square-full icon-prod mega-menu__sub-icon"></i><?php echo $product->post_title; ?>
                                </a>
                                </li>
                                <?php } ?>
                                </ul>
                                </a>
                                </li>
                                <?php } ?>
                                </ul>
                                <ul class="mega-menu__right">
                                <div class="mega-menu__right-content">
                                <?php $category = $categories[0]; ?>
                                <?php $cat_url = get_term_link($category); ?>
                                <?php $cat_image_id = get_term_meta($category->term_id, '_thumbnail_id', 1); ?>
                                <?php $cat_image_url = wp_get_attachment_image_url($cat_image_id, 'full'); ?>
                                <a href="<?php echo $cat_url; ?>" class="mega-menu__right-link">
                                <img src="<?php echo $cat_image_url; ?>" alt=""
                                class="mega-menu__right-image">
                                <div class="mega-menu__right-read">
                                <div class="mega-menu__right-button">
                                <p>read more</p>
                                <i class="_icon-leftarrowblog mega-menu__right-icon"></i>
                                </div>
                                </div>
                                </a>
                                </div>
                                </ul>
                                </div>
                                </li>
                                <!-- End of Menu Products -->

                                 */


                                ?>


                                <li class="menu__item">
                                    <a class="menu__link top-catalog__toggle">
                                        Products
                                        <i class="_icon-menu_arrow  menu__icon menu_rotate-arrow"></i>
                                    </a>
                                </li>



                                <?php $header_menu = wp_get_nav_menu_items("Header Menu"); ?>
                                <?php foreach ($header_menu as $menu_item) { ?>
                                    <?php if ($menu_item->menu_item_parent != 0) continue; ?>
                                    <?php $child_menu_item = array(); ?>
                                    <?php $sub_header_menu = wp_get_nav_menu_items("Header Menu"); ?>
                                    <?php foreach ($sub_header_menu as $sub) { ?>
                                        <?php if ($sub->menu_item_parent == $menu_item->ID) $child_menu_item[] = $sub; ?>
                                    <?php } ?>
                                    <?php if (count($child_menu_item) > 0) { ?>
                                        <li class="menu__item">
                                            <p class="menu__link menu__link-dropdown"
                                               onclick="return document.app.openSubmenu(<?php echo $menu_item->ID ?>);">
                                               <a class="menu__sub-link" href="<?=esc_url($menu_item->url)?>"><?php echo esc_html($menu_item->title); ?></a>
                                                <i
                                                        class="_icon-menu_arrow  menu__icon menu_rotate-arrow"></i></p>
                                            <ul id="submenu_<?php echo $menu_item->ID ?>" class="menu__media">
                                                <?php foreach ($child_menu_item as $sub_menu_item) { ?>
                                                    <li class="menu__media-item">
                                                        <a href="<?php echo $sub_menu_item->url; ?>"
                                                           class="menu__sub-link"><?php echo $sub_menu_item->title; ?></a>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </li>
                                    <?php } else { ?>
                                        <li class="menu__item"><a href="<?php echo $menu_item->url; ?>"
                                                                  class="menu__link"><?php echo $menu_item->title; ?></a>
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>

                        </div>



                    </div>
                </div>
            </div>
        </div>
        <script>
            jQuery(document).ready(function () {


                // if (width <= 1025) {
                //     $("#mainMenu .menu-item-has-children > a").append("<span></span>");
                //     $("#mainMenu .menu-item-has-children span").click(function () {
                //         $(this).parent().next().slideToggle(300);
                //         $(this).toggleClass("active");
                //         return false;
                //     });
                // }

            });

        </script>
    </header>
    <div class="main__catalog__wrap">
        <div class="main__catalog__close top-catalog__toggle"></div>
        <div class="main__catalog__body">
            <div class="catalog__list">
                <div class="catalog__item__wrap">
                    <div class="catalog__item">
                        <div class="catalog__item__img">
                            <img src="/wp-content/uploads/2023/10/Frame-10557.png" alt="">
                        </div>
                        <div class="catalog__item__body">
                            <a href="/product-category/shower-doors/" class="catalog__item__link"></a>
                            <div class="catalog__item__title">Shower door</div>
                        </div>
                    </div>
                </div>
                <div class="catalog__item__wrap">
                    <div class="catalog__item">
                        <div class="catalog__item__img">
                            <img src="/wp-content/uploads/2023/10/Group-10107.png" alt="">
                        </div>
                        <div class="catalog__item__body">
                            <a href="/product_info_category/glass-partitions/" class="catalog__item__link"></a>
                            <div class="catalog__item__title">PARTITIONS</div>
							<!--
                            <ul class="catalog__item__submenu">
                                <li><a href="/frameless-glass-partitions">Frameless Glass Partitions</a></li>
                                <li><a href="/aluminum-glass-partition">Aluminum Glass Partition</a></li>
                                <li><a href="/custom-steel-glass-partitions">Steel glass partition</a></li>
                            </ul>
							-->
                        </div>
                    </div>
                </div>
                <div class="catalog__item__wrap">
                    <div class="catalog__item">
                        <div class="catalog__item__img">
                            <img src="/wp-content/uploads/2023/10/stairs.png" alt="">
                        </div>
                        <div class="catalog__item__body">
                            <a href="/product_info_category/glass-railing-systems/" class="catalog__item__link"></a>
                            <div class="catalog__item__title">RAILING SYSTEMS</div>
							<!--
                            <ul class="catalog__item__submenu">
                                <li><a href="/product_info/point-supported/">Point supported</a></li>
                                <li><a href="/product_info/system-on-mini-posts/">Mini posts</a></li>
                                <li><a href="/product_info/tall-posts/">Tall posts</a></li>
                                <li><a href="/product_info/shoe-track/">Shoe track</a></li>
                            </ul>
							-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="mob__menu__wrap">
                <ul class="menu__list">
                    <?php $header_menu = wp_get_nav_menu_items("Header Menu"); ?>
                    <?php foreach ($header_menu as $menu_item) { ?>
                        <?php if ($menu_item->menu_item_parent != 0) continue; ?>
                        <?php $child_menu_item = array(); ?>
                        <?php $sub_header_menu = wp_get_nav_menu_items("Header Menu"); ?>
                        <?php foreach ($sub_header_menu as $sub) { ?>
                            <?php if ($sub->menu_item_parent == $menu_item->ID) $child_menu_item[] = $sub; ?>
                        <?php } ?>
                        <?php if (count($child_menu_item) > 0) { ?>
                            <li class="menu__item">
                                <p class="menu__link menu__link-dropdown"
                                   onclick="return document.app.openSubmenu(<?php echo $menu_item->ID ?>);">
                                   <a class="menu__sub-link" href="<?=esc_url($menu_item->url)?>"><?php echo esc_html($menu_item->title); ?></a>
                                    <i class="_icon-menu_arrow  menu__icon menu_rotate-arrow" data-submenuid="<?php echo $menu_item->ID ?>"></i></p>
                                <ul id="submenu_<?php echo $menu_item->ID ?>" class="menu__media">
                                    <?php foreach ($child_menu_item as $sub_menu_item) { ?>
                                        <li class="menu__media-item">
                                            <a href="<?php echo $sub_menu_item->url; ?>"
                                               class="menu__sub-link"><?php echo $sub_menu_item->title; ?></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </li>
                        <?php } else { ?>
                            <li class="menu__item">
                                <a href="<?php echo $menu_item->url; ?>" class="menu__link"><?php echo $menu_item->title; ?></a>
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
                <div class="menu__actions">
                    <div class="item-action__items">
                        <div class="item__action">
                            <i class="item__action__icon fa-solid fa-phone"></i>
                            <a href="tel: <?php echo trim(get_site_option('theme_contact_phone')); ?>" class="item__action__name">
                                <?php echo get_site_option('theme_contact_phone'); ?>
                            </a>
                        </div>
                        <div class="item__action">
                            <i class="item__action__icon fa-solid fa-envelope"></i>
                            <a class="item__action__name" href="mailto: <?php echo get_site_option( 'theme_email' ); ?>">
                                <?php echo get_site_option( 'theme_email' ); ?>
                            </a>
                        </div>
                        <ul class="text-section__social-list">
                            <li class="social__item"><a href="<?php echo get_site_option( 'social_facebook' ); ?>" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/facebook.svg" alt=""></a></li>
                            <li class="social__item"><a href="<?php echo get_site_option( 'social_instagram' ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/instagram.svg" alt=""></a></li>
                            <li class="social__item"><a href="<?php echo get_site_option( 'social_twitter' ); ?>" target="_blank">  <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/twitter.svg" alt=""></a></li>
                            <li class="social__item"><a href="<?php echo get_site_option( 'social_youtube' ); ?>" target="_blank">  <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/youtube.svg" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main__catalog__bg"></div>
    </div>