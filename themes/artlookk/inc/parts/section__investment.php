<?php
$queried_object = get_queried_object();
$investment_title = get_field( "investment_title",  $queried_object);
if (!$investment_title) {
    $_investment_id = get_term($queried_object->parent);
    $investment_title = get_field( "investment_title", $_investment_id );
} else {
    $_investment_id = $queried_object;
}

if ($investment_title) {

$investment_img = get_field( "investment_img",  $_investment_id);
$investment_text = get_field( "investment_text",  $_investment_id);
?>
<section class="section__investment">
    <div class="container">
        <div class="section__investment__wrap">
            <div class="section__investment__img">
                <?php if ($investment_img) { ?>
                    <?php echo wp_get_attachment_image( $investment_img['ID'], 'full' ); ?>
                <?php } else { ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/finances-elements-on-wooden-cubes-arrangement1.jpg" alt="">
                <?php }  ?>
            </div>
            <div class="section__investment__body">
                <div class="section__investment__title"><?=$investment_title?></div>
                <?=$investment_text?>
            </div>
        </div>
    </div>
</section>
<?php } ?>