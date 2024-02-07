<section class="product-category__section">
    <div class="container">
        <div class="custom-steel-main__body">
            <div class="custom-steel-main__main main-steel">
                <?php ProductCategory::getBreadcrumbs(); ?>
                <div class="main-steel__section-one steel-one">
                    <div class="steel-one__top">
                        <div class="steel-one__left">
                            <p class="steel-one__left-text">
                                <?php echo $category->name; ?>
                            </p>
                            <button id="estimate" class="steel-one__left-button">
                                get a free estimate
                            </button>
                        </div>
                        <div class="steel-one__right">
                            <img
                                class="steel-one__right-circle"
                                src="<?php echo get_template_directory_uri(); ?>/assets/icons/one_circle_label.svg"
                                alt=""
                            />

                            <img
                                class="steel-one__right-square"
                                src="<?php echo $category_image; ?>"
                                alt=""
                            />
                        </div>
                    </div>
                    <hr class="hr-section" />
                </div>
            </div>
        </div>
    </div>
</section>
<section class="category-products">
    <div class="container">
        <div class="switch-one__handles">
            <div class="switch-one__handless-title">
                <p><?php echo $category->name; ?> products</p>
                <div class="sectionTwo-title__nav nav-section">
                    <button type="button" class="nav-section__item handless-prev-left">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/left_arrow.svg" alt="" />
                        Prev.
                    </button>
                    <button type="button" class="nav-section__item handless-next-right">
                        Next
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/right-arrow.svg" alt="" />
                    </button>
                </div>

            </div>
            <div id="handles-swich-swing-slick" class="switch-one__handless-content handless-item">
                <?php foreach($products as $product) { ?>
                    <div class="handless-item__item">
                        <div class="handless-item__item-image" style="text-align: center;background-color: #aaa;">
                            <a href="<?php echo get_permalink($product); ?>">
                                <img style="height: 250px;" src="<?php echo Product::getImageUrl($product->ID); ?>" alt="">
                            </a>
                        </div>
                        <div class="handless-item__item-title">
                            <a href="<?php echo get_permalink($product); ?>">
                                <p><?php echo $product->post_title; ?></p>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <hr class="hr-section" />
    </div>
</section>

<section class="category_description">
    <div class="category_description__container container">
        <div class="category_description__body">
            <?php echo category_description(); ?>
        </div>
        <hr class="hr-section">
    </div>
</section>

<section class="main__section-three section-three">
    <div class="section-three__container container">
        <div class="section-three__body">
            <div class="section-three__main main-three">
                <div class="main-three__top">
                    <p class="main-three__title">what we do</p>
                    <div class="sectionTwo-title__nav nav-section">
                        <button type="button" class="nav-section__item wht-prev-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/left_arrow.svg" alt=""/>
                            Prev.
                        </button>
                        <button type="button" class="nav-section__item wht-next-right">
                            Next
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/right-arrow.svg" alt=""/>
                        </button>
                    </div>
                </div>
                <div class="main-three__bottom main-slider three-slider">
                    <?php foreach($categories as $category_item) { ?>
                        <div class="main-slider__item">
                            <div class="main-slider__image">
                                <img src="<?php echo ProductCategory::getCategoryImageUrl($category_item); ?>" alt="">
                                <a href="<?php echo get_term_link($category_item); ?>" class="main-slider__button">
                                    open
                                </a>
                            </div>
                            <div class="main-slider__text">
                                <a href="<?php echo get_term_link($category_item); ?>">
                                    <p class="main-slider__title"><?php echo $category_item->name; ?></p>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
