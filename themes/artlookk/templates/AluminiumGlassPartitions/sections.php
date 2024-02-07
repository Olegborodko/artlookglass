

<section class="aluminum-page">

    <div class="container">
        <?php require get_template_directory() . '/inc/parts/section_breadcrumbs.php'; ?>
    </div>

    <?php require get_template_directory() . '/inc/parts/section_hero.php'; ?>


    <?php require get_template_directory() . '/inc/parts/section__feedback__widget.php'; ?>

    <div class="aluminim-page__container container">
        <div class="aluminim-page__main">

            <?php AluminiumGlassPartition::renderSectionTwo(); ?>
            <hr class="hr-section">
            <?php AluminiumGlassPartition::renderSectionThreeTop(); ?>
        </div>
    </div>
    <?php AluminiumGlassPartition::renderSectionThree(); ?>
    <div class="aluminim-page__container container">
        <div class="aluminim-page__body">
            <hr class="hr-section">

            <?php AluminiumGlassPartition::renderSectionFour(); ?>

            <hr class="hr-section">

            <?php AluminiumGlassPartition::renderSectionFive(); ?>





            <?php AluminiumGlassPartition::renderSectionSix(); ?>
        </div>
    </div>
</section>