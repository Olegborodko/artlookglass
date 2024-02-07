<?php
/*
 * Template name: Custom Steel Glass Partition
 * Template Post Type: product_info
 */
?>
<?php get_header(); ?>
<main class="main">

    <?php CustomSteelGlass::render();  ?>

    <?php require get_template_directory() . '/inc/parts/section_category_gallery.php'; ?>
    <?php require get_template_directory() . '/inc/parts/section__faqs.php'; ?>

    <?php include TEMPLATES_DIR . "/HomePage/section-seven.php"; ?>
</main>
<?php get_footer(); ?>
<?php CustomSteelGlass::scripts();  ?>
