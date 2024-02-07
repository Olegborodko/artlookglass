<section class="about__main about-page">
    <div class="about-page__container container">
        <div class="about-page__body">
            <div class="about-page__content about-content">
                <div class="main-blog__crumbs">
                    <a href="/" class="main-blog__crumbs-one">ArtLook Glass</a>
                    <i class="_icon-menu_arrow rotate_icon"></i>
                    <p class="main-blog__crumbs-two">About Us</p>
                </div>
                <div class="about-page__section-one about-one">
                    <div class="about-one__left">
                        <div class="about-one__left-square">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aboutus.jpg" alt="">
                        </div>
                        <div class="about-one__left-circle">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/one_circle_label.svg" alt="">
                        </div>
                    </div>
                    <div class="about-one__right">
                        <div class="about-one__right-one">About <span>Artlook glass</span></div>
                        <div class="about-one__right-two">
                            <p>
                            <p>Artlook Glass has been creating innovative glazing systems for homes and commercial premises for more than 7 years.</p>
                            <p><br></p>
                            <p>For us, the main thing is the quality of the product, not the quantity. For each project, we have an individual approach to guarantee the best execution that meets the requirements of our clients. We care about the safety and reliability of our products, so we use materials that meet quality standards.</p>
                            <p><br></p>
                            <p>Our experts will always help you choose the right glazing for your home or office and answer all your questions. After installing the system, we guarantee our products.</p>
                            </p>
                        </div>
                    </div>

                </div>

                <hr class="hr-section">
                <div class="about-page__section-two about-two">
                    <div class="about-two__title">
                        <p>for our partners we provide:</p>
                    </div>
                    <div class="about-two__benefits">
                        <div class="about-two__benefits-one">
                            <img class="about-two__benefits-image" src="<?php echo get_template_directory_uri(); ?>/assets/icons/royalty.svg" alt="">
                            <p class="about-two__benefits-title">Program of Loyalty</p>
                            <p class="about-two__benefits-about">We have created an affiliate loyalty program, through which regular customers can receive special offers and discounts. Cooperation with us is all good and efficient.</p>
                        </div>
                        <div class="about-two__benefits-one">
                            <img class="about-two__benefits-image" src="<?php echo get_template_directory_uri(); ?>/assets/icons/assistant.svg" alt="">
                            <p class="about-two__benefits-title">Personal assistant</p>
                            <p class="about-two__benefits-about">Your personal assistant will always answer your questions and tell you the stage of production your order is at. You will be able to communicate with different employees, from the designer to the project manager.</p>
                        </div>
                        <div class="about-two__benefits-one">
                            <img class="about-two__benefits-image" src="<?php echo get_template_directory_uri(); ?>/assets/icons/samples.svg" alt="">
                            <p class="about-two__benefits-title">Product samples</p>
                            <p class="about-two__benefits-about">We will acquaint you with our products and specimens so that you can make the right choice.</p>
                        </div>
                        <div class="about-two__benefits-one">
                            <img class="about-two__benefits-image" src="<?php echo get_template_directory_uri(); ?>/assets/icons/project-kind.svg" alt="">
                            <p class="about-two__benefits-title">Projects that are<br>
                                one-of-a-kind</p>
                            <p class="about-two__benefits-about">Sometimes customers need products that have never been made before. We are happy to carry out such projects and can design a special glass partition for you.</p>
                        </div>
                    </div>
                    <hr class="hr-section">
                </div>


                <section class="main__section-seven section-seven">
                    <div class="section-seven__container container">
                        <div class="section-seven__body ">
                            <div class="section-seven__main main-seven">
                                <div class="main-seven__top">
                                    <div class="main-seven__blog">Blog</div>
                                    <!--<div class="sectionTwo-title__nav nav-section">
                                        <button type="button" class="nav-section__item prev-left">
                                            <img src="<?php /*echo get_template_directory_uri(); */?>/assets/icons/left_arrow.svg" alt="" />
                                            Prev.
                                        </button>
                                        <button type="button" class="nav-section__item next-right">
                                            Next
                                            <img src="<?php /*echo get_template_directory_uri(); */?>/assets/icons/right-arrow.svg" alt="" />
                                        </button>
                                    </div>-->
                                </div>
                                <div class="row">
                                    <div class="slick__slider main-seven__bottom seven-slider">
                                        <?php global $post; $args = array( 'numberposts' => 0, 'category' => 1, 'orderby' => 'date');
                                        $myposts = get_posts( $args );
                                        foreach( $myposts as $post ){ setup_postdata($post); ?>
                                            <div class="main-seven__slider__item">
                                                <?php get_template_part( 'template-parts/content', 'blog-post' ); ?>
                                            </div>
                                        <?php }
                                        wp_reset_postdata(); ?>
                                    </div>
                                </div>
                                <a class="btn_b" href="/blog/">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                        <rect x="3.5" y="9" width="14" height="2" fill="white"/>
                                        <rect x="11.5" y="3" width="14" height="2" transform="rotate(90 11.5 3)" fill="white"/>
                                    </svg>
                                    all blog
                                </a>

                            </div>
                        </div>
                    </div>
                    <script>
                        $( document ).ready(function() {
                            $('.seven-slider').slick({
                                dots:false,
                                slidesToShow: 4,
                                slidesToScroll: 4,
                                infinite: true,
                                centerMode: false,
                                draggable:true,
                                prevArrow: $('.section-seven .prev-left'),
                                nextArrow: $('.section-seven .next-right'),
                                responsive: [
                                    {
                                        breakpoint: 1340,
                                        settings: {
                                            slidesToShow: 3,
                                            slidesToScroll: 3,

                                        }
                                    },
                                    {
                                        breakpoint: 1024,
                                        settings: {
                                            slidesToShow: 2,
                                            slidesToScroll: 2,

                                        }
                                    },
                                    {
                                        breakpoint: 600,
                                        settings: {
                                            slidesToShow: 1,
                                            slidesToScroll: 1
                                        }
                                    },
                                    {
                                        breakpoint: 480,
                                        settings: {
                                            slidesToShow: 1,
                                            slidesToScroll: 1
                                        }
                                    }
                                ]
                            });
                        });
                    </script>
                </section>
                <hr class="hr-section">
                <div class="about-page__section-four about-four">
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
        </div>
    </div>
</section>
