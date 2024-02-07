<section class="contasts-page item-contasts">
    <div class="item-contasts__container container">
        <div class="item-contasts__body">
            <div class="item-contasts__main main-contasts">
				<div class="main-blog__crumbs">
                    <a href="/" class="main-blog__crumbs-one">ArtLook Glass</a>
                    <i class="_icon-menu_arrow rotate_icon"></i>
                    <p class="main-blog__crumbs-two">Contacts</p>
                </div>
                <div class="main-contasts__item contasts-item">
                    <div class="contasts-item__left">
                        <div class="m_contact_form_success_id" id="m_contact_form_success_id_492">
                          <div>Thanks for<br> submitting the form</div>
                          <div>Our manager will contact you soon.</div>
                        </div>
                        <div id="m_contact_form_id_492" class="contasts-item__left-item left-item">
                            <div class="left-item__form">
                                <div class="left-item__one">
                                    <p class="left-item__one-title">Get a free estimate!</p>
                                    <p class="left-item__two-title">
                                        Just fill out short form and our manager will contact with
                                        you soon
                                    </p>
                                </div>
                                <div class="left-item__two">
                                    <p class="left-item__personal">01. Personal info<span>*</span></p>
                                    <div class="">
                                        <?php echo do_shortcode('[contact-form-7 id="492" title="Get Estimate Contacts"]'); ?>

                                        <div class="article-three__required">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/information.svg" alt="" srcset="" />
                                            <p>Items with a prefix -<span>*</span> are required</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="contasts-item__right">
                        <div class="contasts-item__right-item right-item">
                            <p class="right-item__title">new york office</p>
                            <div class="right-item__address">
                                <p class="right-item__address-title">Address:</p>
                                <a href="" class="right-item__address-link"><?php echo get_site_option( 'theme_address' ); ?></a>
                            </div>
                            <div class="right-item__phone">
                                <p class="right-item__phone-title">Phone Number:</p>
                                <a href="tel: <?php echo trim(get_site_option( 'theme_contact_phone' )); ?>" class="right-item__phone-link"><?php echo get_site_option( 'theme_contact_phone' ); ?></a>
                            </div>
                            <div class="right-item__email">
                                <p class="right-item__email-title">
                                    For concerns regarding our services, products or the website:
                                </p>
                                <p class="right-item__email-link">
                                    email us at <a href="mailto: <?php echo get_site_option( 'theme_email' ); ?>"><?php echo get_site_option( 'theme_email' ); ?></a>
                                </p>
                            </div>
                            <div class="right-item__map">
                                <div class="right-item__map-view">
                                    <iframe width="100%" height="570" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Artlook%20Glass%20Inc,%20238%20Bay%20Ridge%20Pkwy,%20Brooklyn,%20NY%2011209,%20%D0%A1%D0%BE%D0%B5%D0%B4%D0%B8%D0%BD%D0%B5%D0%BD%D0%BD%D1%8B%D0%B5%20%D0%A8%D1%82%D0%B0%D1%82%D1%8B+(Artlook%20Glass%20Inc)&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">area maps</a></iframe>                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require get_template_directory() . '/inc/parts/section__feedback__widget.php'; ?>