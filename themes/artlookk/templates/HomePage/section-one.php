<?php
/**<section class="main__section-one section-one">
    <div class="section-one__container container">
        <div class="section-one__body">
            <div class="main-section__text text-section">
                <div class="text-section__body">
                    <div class="text-section__main">
                        <div class="text-section__title">
                            <p class="text-section__color">
                                <span>Glass Solution</span><br>
                                for <span>Your</span> Home<br>
                                and Business</p>
                        </div>
                        <div class="text-section__about-text">
                            <p>Artlook Glass creates modern glazing systems for homes and offices. We create high-quality products from the best materials, which guarantees the strength and reliability of the structure. Each glazing system is unique. Professionals in their field are engaged in its creation and installation. Get in touch with us to choose the perfect glazing for your needs.</p>
                        </div>
                        <div class="text-section__button">
                            <div class="arrow-button-1">
                                <div id="estimate" class="text-section__outline">Get an estimate</div>
                                <img class="arrow-img-2" src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow-button-2.png" alt="">
                            </div>
                            <div class="arrow-button-1">
                                <div id="show-popup" class="text-section__fill">Contact us</div>
                            <img class="arrow-img" src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow-button-1.png" alt="">
                            </div>
                        </div>
                        <div class="text-section__contact">

<ul class="text-section__contact-list">
<li class="contact-list__contact-item">
<a href="tel: <?php echo trim(get_site_option('theme_contact_phone')); ?>">
<i class="fa-solid fa-phone"></i> <?php echo get_site_option('theme_contact_phone'); ?>
</a>
</li>
<li class="contact-list__contact-item">
<a href="mailto: <?php echo get_site_option( 'theme_email' ); ?>">
<i class="fa-solid fa-envelope"></i>
<?php echo get_site_option( 'theme_email' ); ?>
</a>
</li>
</ul>

                            <ul class="text-section__social-list">
                                <li class="social__item">
                                    <a href="<?php echo get_site_option( 'social_facebook' ); ?>" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/facebook.svg" alt=""></a>
                                </li>
                                <li class="social__item">
                                    <a href="<?php echo get_site_option( 'social_instagram' ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/instagram.svg" alt=""></a>
                                </li>
                                <li class="social__item">
                                    <a href="<?php echo get_site_option( 'social_twitter' ); ?>" target="_blank">  <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/twitter.svg" alt=""></a>
                                </li>
                                <li class="social__item">
                                    <a href="<?php echo get_site_option( 'social_youtube' ); ?>" target="_blank">  <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/youtube.svg" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-section__image image-section">
                <div class="image-section__body">
                    <div class="image-section__circle-label">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/one_circle_label.svg" alt="">
                    </div>
                    <div class="image-section__image">
                        <img src="/wp-content/uploads/2023/06/hero-section.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <hr class="hr-section">
    </div>
</section>
 */
?>

<?php require get_template_directory() . '/inc/parts/section_hero.php'; ?>

<?php require get_template_directory() . '/inc/parts/section__feedback__widget.php'; ?>
