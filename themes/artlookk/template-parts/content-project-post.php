<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package artlookglass
 */


$images = get_field('gallery');
$image  = $images[0];
unset($images[0]);

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="portfolio-item__content">
        <div class="portfolio-item__image">
            <a href="<?= $image['url'] ?>"
               data-fancybox="gallery_<?=get_the_ID();?>"
               data-width="1900" data-height="1200">
                <img src="<?= $image['url'] ?>"/>
            </a>
        </div>
        <div class="portfolio-item__title">
            <div class="portfolio-item__text-title">
                <?php the_title( '', '' ); ?>
            </div>
            <div class="portfolio-item__text-view">
                <a href="<?= esc_url( get_permalink() ) ?>">
                    View more
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow-port.svg"  alt="" />
                </a>
            </div>
        </div>
        <div style="display: none;">
            <?php foreach ( $images as $img) { ?>
                <a href="<?= $img['url'] ?>"
                   data-fancybox="gallery_<?=get_the_ID();?>"
                   data-width="1900" data-height="1200"
                >
                </a>
            <?php } ?>
        </div>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->
