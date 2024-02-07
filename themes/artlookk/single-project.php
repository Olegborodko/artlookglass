<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package artlookglass
 */

get_header();
$images = get_field('gallery');
$image  = get_the_post_thumbnail_url();

?>
	<main id="primary" class="site-main">
        <section class="article__section-one article-one">
            <div class="article-one__title-image img-title">
                <div class="img-title__image">
                    <?php
                        if ( $image ) { ?>
                            <img src="<?= $image ?>" alt=""  />
                        <?php } ?>
                </div>
                <div class="img-title__content container">
                    <div class="img-title__item">
                        <div class="img-title__crumbs">
                            <a href="/" class="img-title__crumbs-one">ArtLook Glass</a>
                            <i class="_icon-menu_arrow img-title-icon"></i>
                            <a href="/portfolio" class="img-title__crumbs-one">Portfolio</a>
                            <i class="_icon-menu_arrow img-title-icon"></i>
                            <?php the_title( '<p class="img-title__crumbs-two">', '</p>' ); ?>
                        </div>
                        <div class="img-title__banner">
                            <?php the_title( '<h1 class="img-title__title"><p>', '</p></h1>' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="article__section-two article-two">
            <div class="article-two__container container">
                <hr class="hr-section" />
                <div class="article-two__body">
                    <div class="article-two__content">

                        <div class="gallery__wrap">

                            <?php foreach ( $images as $img) { ?>
                                <a class="gallery__item" href="<?= $img['url'] ?>"
                                   data-fancybox="gallery_<?=get_the_ID();?>"

                                >
                                    <img src="<?= $img['url'] ?>" alt=""  />
                                </a>
                            <?php } ?>
                        </div>




                        <?php
                        while ( have_posts() ) :
                            the_post();
                            the_content(
                                sprintf(
                                    wp_kses(
                                    /* translators: %s: Name of current post. Only visible to screen readers */
                                        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'artlookglass' ),
                                        array(
                                            'span' => array(
                                                'class' => array(),
                                            ),
                                        )
                                    ),
                                    wp_kses_post( get_the_title() )
                                )
                            );
                        endwhile; // End of the loop.
                        ?>
                    </div>
                </div>
                <hr class="hr-section" />
            </div>
        </section>

        <div class="about-page__section-four about-four">
            <div class="container">
            <div class="m_contact_form_success_id" id="m_contact_form_success_id_493">
            <div>Thanks for<br> submitting the form</div>
            <div>Our manager will contact you soon.</div>
            </div>
                <div id="m_contact_form_id_493" class="article-three__contents">
                    <div class="article-three__content-form">
                        <div class="article-three__title">
                            <p>request a quote</p>
                        </div>
                        <div class="article-three__form form-three">
                            <div class="form-three__content">
                                <div class="form-three__section-one form-one">
                                    <div class="form-one__personal">
                                        <p class="form-one__presonal-title">01. Personal info<span>*</span></p>
                                    </div>
                                    <div class="form-one__input">
                                        <?php echo do_shortcode('[contact-form-7 id="493" title="Get Estimate About"]'); ?>
                                    </div>
                                </div>
                                <hr class="hr-section">
                                <div class="article-three__required">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/information.svg" alt="" srcset="" />
                                    <p>Items with a prefix -<span>*</span> are required</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
