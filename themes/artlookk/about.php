<?php
/*
 * Template name: About Us
 */
?>
<?php get_header(); ?>
<main class="main">
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
			
				<?php require get_template_directory() . '/inc/parts/section__feedback__widget.php'; ?>
			
			

                
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
</section>
	
<section class="main__section-six section-six">
    <div class="section-six__container container">
		<hr class="hr-section">
		<div class="section-two__main main-section">
			<div class="main-section__top">
				<div class="main-six__top">
					<p class="main-six__title">our clients say</p>
				</div>
				<div class="sectionTwo-title__nav nav-section">
					<button type="button" class="nav-section__item section_map_items-prev-left">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/left_arrow.svg" alt="" />
						  Prev.
					</button>
					<button type="button" class="nav-section__item section_map_items-next-right">
						  Next
						<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/right-arrow.svg" alt="" />
					</button>
				</div>
			</div>
			<div class="section_map_container">
				<div class="section_map">
					<img src="http://artlookglass.com/wp-content/uploads/2024/01/map-new-2.jpg" alt="">
					<div class="hero__btns">
						<a class="btn_b" href="https://search.google.com/local/reviews?placeid=ChIJH9U09IdFwokRHmnV_y6e7fE&q=Artlook+Glass+Inc,+238+Bay+Ridge+Pkwy,+Brooklyn,+NY+11209,+%D0%A1%D0%BE%D0%B5%D0%B4%D0%B8%D0%BD%D0%B5%D0%BD%D0%BD%D1%8B%D0%B5+%D0%A8%D1%82%D0%B0%D1%82%D1%8B&hl=en&gl=UA" target="_blank">
							<svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
								<rect x="3.5" y="9" width="14" height="2" fill="white"></rect>
								<rect x="11.5" y="3" width="14" height="2" transform="rotate(90 11.5 3)" fill="white"></rect>
							</svg>
							see all reviews
						</a>
					</div>
				</div>
				<div class="section_map_items_container">
					<div class="section_map_items">
						<div class="section_map_item section_map_item-1">
							<div class="section_map_item_photo"><img src="http://artlookglass.com/wp-content/uploads/2024/01/review-1.png" alt=""></div>
							<div class="section_map_item_name"><strong>Kane Collins</strong></div>
							<div class="section_map_item_icon_g"><img src="http://artlookglass.com/wp-content/uploads/2024/01/devicon_google.png" alt=""></div>
						</div>
						<div class="section_map_item section_map_item-2">
							<div class="section_map_item_star"><img src="http://artlookglass.com/wp-content/uploads/2024/01/star-r.png" alt=""></div>
							<div class="section_map_item_descr">Artlook Glass impressed me with their commitment to sustainability when replacing my home windows...</div>
							<div class="section_map_item_link"><a href="https://g.co/kgs/hzVQxUZ" target="_blank">Show more</a></div>
						</div>
					</div>
					<div class="section_map_items">
						<div class="section_map_item section_map_item-1">
							<div class="section_map_item_photo"><img src="http://artlookglass.com/wp-content/uploads/2024/01/review-2.png" alt=""></div>
							<div class="section_map_item_name"><strong>Ryder Stewart</strong></div>
							<div class="section_map_item_icon_g"><img src="http://artlookglass.com/wp-content/uploads/2024/01/devicon_google.png" alt=""></div>
						</div>
						<div class="section_map_item section_map_item-2">
							<div class="section_map_item_star"><img src="http://artlookglass.com/wp-content/uploads/2024/01/star-r.png" alt=""></div>
							<div class="section_map_item_descr">Artlook Glass's selection of the perfect frosted glass for my bathroom windows added a touch of sophistication to my home...</div>
							<div class="section_map_item_link"><a href="https://g.co/kgs/Srh8Qrp" target="_blank">Show more</a></div>
						</div>
					</div>
					<div class="section_map_items">
						<div class="section_map_item section_map_item-1">
							<div class="section_map_item_photo"><img src="http://artlookglass.com/wp-content/uploads/2024/01/review-3.png" alt=""></div>
							<div class="section_map_item_name"><strong>Chester Baxter</strong></div>
							<div class="section_map_item_icon_g"><img src="http://artlookglass.com/wp-content/uploads/2024/01/devicon_google.png" alt=""></div>
						</div>
						<div class="section_map_item section_map_item-2">
							<div class="section_map_item_star"><img src="http://artlookglass.com/wp-content/uploads/2024/01/star-r.png" alt=""></div>
							<div class="section_map_item_descr">Artlook Glass transformed our dull office space into a modern, dynamic environment with their sleek glass partitions...</div>
							<div class="section_map_item_link"><a href="https://g.co/kgs/YfGXYRm" target="_blank">Show more</a></div>
						</div>
					</div>
					<div class="section_map_items">
						<div class="section_map_item section_map_item-1">
							<div class="section_map_item_photo"><img src="http://artlookglass.com/wp-content/uploads/2024/01/review-4.png" alt=""></div>
							<div class="section_map_item_name"><strong>Harrison Walker</strong></div>
							<div class="section_map_item_icon_g"><img src="http://artlookglass.com/wp-content/uploads/2024/01/devicon_google.png" alt=""></div>
						</div>
						<div class="section_map_item section_map_item-2">
							<div class="section_map_item_star"><img src="http://artlookglass.com/wp-content/uploads/2024/01/star-r.png" alt=""></div>
							<div class="section_map_item_descr">Artlook Glass's custom glass signage has been a game-changer for my business. Their innovative designs and flawless...</div>
							<div class="section_map_item_link"><a href="https://g.co/kgs/tL52b1y" target="_blank">Show more</a></div>
						</div>
					</div>
					<div class="section_map_items">
						<div class="section_map_item section_map_item-1">
							<div class="section_map_item_photo"><img src="http://artlookglass.com/wp-content/uploads/2024/01/review-5.png" alt=""></div>
							<div class="section_map_item_name"><strong>Amaya Ortiz</strong></div>
							<div class="section_map_item_icon_g"><img src="http://artlookglass.com/wp-content/uploads/2024/01/devicon_google.png" alt=""></div>
						</div>
						<div class="section_map_item section_map_item-2">
							<div class="section_map_item_star"><img src="http://artlookglass.com/wp-content/uploads/2024/01/star-r.png" alt=""></div>
							<div class="section_map_item_descr">Artlook Glass played a pivotal role in simplifying my home renovation project. Their expert advice, combined with their custom glass...</div>
							<div class="section_map_item_link"><a href="https://g.co/kgs/R72j63D" target="_blank">Show more</a></div>
						</div>
					</div>
					<div class="section_map_items">
						<div class="section_map_item section_map_item-1">
							<div class="section_map_item_photo"><img src="http://artlookglass.com/wp-content/uploads/2024/01/review-6.png" alt=""></div>
							<div class="section_map_item_name"><strong>Riley Hammond</strong></div>
							<div class="section_map_item_icon_g"><img src="http://artlookglass.com/wp-content/uploads/2024/01/devicon_google.png" alt=""></div>
						</div>
						<div class="section_map_item section_map_item-2">
							<div class="section_map_item_star"><img src="http://artlookglass.com/wp-content/uploads/2024/01/star-r.png" alt=""></div>
							<div class="section_map_item_descr">Their eco-friendly approach to upgrading our office doors was a major selling point for us. Artlook Glass not only cares about aesthetics...</div>
							<div class="section_map_item_link"><a href="https://g.co/kgs/E6BKWdb" target="_blank">Show more</a></div>
						</div>
					</div>
					<div class="section_map_items">
						<div class="section_map_item section_map_item-1">
							<div class="section_map_item_photo"><img src="http://artlookglass.com/wp-content/uploads/2024/01/review-7.png" alt=""></div>
							<div class="section_map_item_name"><strong>Jonah Barnes</strong></div>
							<div class="section_map_item_icon_g"><img src="http://artlookglass.com/wp-content/uploads/2024/01/devicon_google.png" alt=""></div>
						</div>
						<div class="section_map_item section_map_item-2">
							<div class="section_map_item_star"><img src="http://artlookglass.com/wp-content/uploads/2024/01/star-r.png" alt=""></div>
							<div class="section_map_item_descr">I've been using Artlook Glass Inc for years, and they never disappoint. Whether it's a simple glass replacement or a complex...</div>
							<div class="section_map_item_link"><a href="https://g.co/kgs/72nXpX4" target="_blank">Show more</a></div>
						</div>
					</div>
					<div class="section_map_items">
						<div class="section_map_item section_map_item-1">
							<div class="section_map_item_photo"><img src="http://artlookglass.com/wp-content/uploads/2024/01/review-8.png" alt=""></div>
							<div class="section_map_item_name"><strong>Joanna Rogers</strong></div>
							<div class="section_map_item_icon_g"><img src="http://artlookglass.com/wp-content/uploads/2024/01/devicon_google.png" alt=""></div>
						</div>
						<div class="section_map_item section_map_item-2">
							<div class="section_map_item_star"><img src="http://artlookglass.com/wp-content/uploads/2024/01/star-r.png" alt=""></div>
							<div class="section_map_item_descr">Artlook Glass's commitment to sustainability impressed me. They provided eco-friendly glass options for my new energy-efficient windows...</div>
							<div class="section_map_item_link"><a href="https://g.co/kgs/8EXBFNX" target="_blank">Show more</a></div>
						</div>
					</div>
				</div>
			</div>
			<hr class="hr-section"> 
		</div>
	</div>
	
	<script>
        $( document ).ready(function() {
            $('.section_map_items_container').slick({
                dots:false,
                slidesToScroll: 6,
                slidesToShow: 6,
                initialSlide: 0,
                infinite: true,
                prevArrow: $('.section_map_items-prev-left'),
                nextArrow: $('.section_map_items-next-right'),
                responsive: [
                    {
                        breakpoint: 1640,
                        settings: {
                            slidesToShow: 6,
                            slidesToScroll: 6
                        }
                    },
                    {
                        breakpoint: 1340,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 4
                        }
                    },
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    },
                    {
                        breakpoint: 750,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
					{
                        breakpoint: 600,
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

</main>
<?php get_footer(); ?>
