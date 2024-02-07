<section class="main__section-five section-five">
    <div class="section-five__container container">
        <div class="section-five__body">
            <div class="section-five__main main-five">
                <div class="main-five__top">
                    <div class="container-swiper-nav">
                        <div class="main-five__portfolio">portfolio</div>
                        <div class="sectionTwo-title__nav nav-section">
                            <button type="button" class="nav-section__item port-prev-left">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/left_arrow.svg" alt="" />
                                Prev.
                            </button>
                            <button type="button" class="nav-section__item port-next-right">
                                Next
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/right-arrow.svg" alt="" />
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="slick__slider main-five__bottom five-slider">
                        <?php
                        $args = array(
                            'posts_per_page' => 10,
                            'post_type' => 'project'
                        );
                        $postslist = new WP_Query( $args );
                        if ( $postslist->have_posts() ) : ?>
                            <?php
                            while ( $postslist->have_posts() ) : $postslist->the_post();

                                $images = get_field('gallery');
                                $image  = $images[0];
                                unset($images[0]);
                                ?>
                                <div class="five-slider__item">
                                    <div class="slider__item__wrap">
                                        <a class="five-slider__image"
                                           href="<?= $image['url'] ?>"
                                           data-fancybox="gallery_<?=get_the_ID();?>"
                                           data-width="1900" data-height="1200">
                                            <img src="<?= $image['url'] ?>"/>
                                            <button class="five-slider__button">
                                                <i class="fa-sharp fa-solid fa-chevron-right"></i>
                                            </button>
                                        </a>

                                        <div class="five-slider__text">
                                            <p class="five-slider__category">Office Center</p>
                                            <a class="five-slider__title" href="<?= esc_url( get_permalink() ) ?>">
                                                Glass Doors Types Advantages Disadvantages
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

                            <?php endwhile; ?>

                            <?php wp_reset_postdata();  endif; ?>
                    </div>
                </div>

            </div>
        </div>
        <hr class="hr-section" />
    </div>
</section>
<script>
    $( document ).ready(function() {
        $('.five-slider').slick({
            dots:false,
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            centerMode: false,
            draggable:true,
            prevArrow: $('.section-five .port-prev-left'),
            nextArrow: $('.section-five .port-next-right'),
            responsive: [
                {
                    breakpoint: 1640,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    }
                },
                {
                    breakpoint: 1340,
                    settings: {
                        slidesToShow: 2,
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