<?php require get_template_directory() . '/inc/parts/section_hero.php'; ?>

<?php require get_template_directory() . '/inc/parts/section__feedback__widget.php'; ?>

<?php require get_template_directory() . '/inc/parts/section__trust_us.php'; ?>

    <section class="category__products">
        <div class="container">
            <div class="category__products__handles">
                <div class="category__products__header">
                    <h2>System configuration</h2>
                </div>
                <div class="category__products__body">
                    <?php foreach ($products as $product) { ?>
                        <div class="category__product__wrap">
                            <div class="category__product">
                                <a href="<?php echo get_permalink($product); ?>">
                                    <div class="item-image">
                                        <img src="<?php echo Product::getImageUrl($product->ID); ?>"
                                             alt="<?php echo $product->post_title; ?>">
                                        <button class="five-slider__button" tabindex="0">
                                            <i class="fa-sharp fa-solid fa-chevron-right"></i>
                                        </button>
                                    </div>
                                    <div class="caption">
                                        <div class="item-title"><?php echo $product->post_title; ?></div>
                                    </div>

                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

	<section id="partitions__quiz__app" class="section__partitions__quiz">
        <div class="container">
			<div class="partitions_page_text_section">
				<p style="font-size: 20px; margin: 50px 0; padding: 0 15px;">Welcome to Artlookglass, your premier destination for bespoke glass partitions. Our expertise lies in crafting and installing custom solutions that redefine elegance in any space. Explore the subtle sophistication of our Frosted Glass Partition Walls, seamlessly balancing privacy and openness. Each partition is a unique masterpiece, blending functionality with artistic expression. Whether for your home or commercial setting, let Artlookglass transform your space into a statement of refined taste. Experience the difference where innovation meets tradition – elevate your surroundings with Artlookglass, where perfection is the standard.</p>
			</div>
		</div>
    </section>

<?php require get_template_directory() . '/inc/parts/section_calculate_the_cost_yourself.php'; ?>

<?php require get_template_directory() . '/inc/parts/section_why_artlook.php'; ?>

<?php // require get_template_directory() . '/inc/parts/section__portfolio.php'; ?>

<?php require get_template_directory() . '/inc/parts/section_category_gallery.php'; ?>


<?php include TEMPLATES_DIR . "/HomePage/section-seven.php"; ?>