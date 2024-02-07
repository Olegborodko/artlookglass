
<?php require get_template_directory() . '/inc/parts/section__faqs.php'; ?>



<section class="main__section-seven section-seven">
    <div class="section-seven__container container">
		<hr class="hr-section"> 
        <div class="section-seven__body ">
            <div class="section-seven__main main-seven">
                <div class="main-seven__top">
                    <div class="main-seven__blog">our latest blogs</div>
                    <div class="sectionTwo-title__nav nav-section">
                        <button type="button" class="nav-section__item prev-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/left_arrow.svg" alt="" />
                            Prev.
                        </button>
                        <button type="button" class="nav-section__item next-right">
                            Next
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/right-arrow.svg" alt="" />
                        </button>
                    </div>
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
                slidesToShow: 5,
                slidesToScroll: 5,
                infinite: true,
                centerMode: false,
                draggable:true,
                prevArrow: $('.section-seven .prev-left'),
                nextArrow: $('.section-seven .next-right'),
                responsive: [
                    {
                        breakpoint: 1640,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 4,
                        }
                    },
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
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 370,
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