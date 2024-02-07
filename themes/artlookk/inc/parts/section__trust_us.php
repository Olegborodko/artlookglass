<section class="main__section-two section-two">
    <div class="section-two__container container">
        <div class="section-two__body ">
            <div class="section-two__main main-section">
                <div class="main-section__top">
                    <div class="sectionTwo-title__trust">trust us</div>
                    <div class="sectionTwo-title__nav nav-section">
                        <button type="button" class="nav-section__item trust-prev-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/left_arrow.svg" alt="" />
                            Prev.
                        </button>
                        <button type="button" class="nav-section__item trust-next-right">
                            Next
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/right-arrow.svg" alt="" />
                        </button>
                    </div>
                </div>
                <div class="main-section__bottom">
                    <div>
                        <div class="main-section__bottom-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company1.jpg" alt="">
                        </div>
                    </div>
                    <div>
                        <div class="main-section__bottom-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company2.jpg" alt="">
                        </div>
                    </div>
                    <div>
                        <div class="main-section__bottom-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company3.jpg" alt="">
                        </div>
                    </div>
                    <div>
                        <div class="main-section__bottom-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company4.jpg" alt="">
                        </div>
                    </div>
                    <div>
                        <div class="main-section__bottom-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company5.jpg" alt="">
                        </div>
                    </div>
                    <div>
                        <div class="main-section__bottom-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company6.jpg" alt="">
                        </div>
                    </div>
                    <div>
                        <div class="main-section__bottom-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company5.jpg" alt="">
                        </div>
                    </div>
                    <div>
                        <div class="main-section__bottom-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company3.jpg" alt="">
                        </div>
                    </div>
                    <div>
                        <div class="main-section__bottom-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company1.jpg" alt="">
                        </div>
                    </div>
                    <div>
                        <div class="main-section__bottom-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company6.jpg" alt="">
                        </div>
                    </div>
                    <div>
                        <div class="main-section__bottom-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company4.jpg" alt="">
                        </div>
                    </div>

                </div>

                <hr class="hr-section">
            </div>
        </div>
    </div>
    <script>
        $( document ).ready(function() {
            $('.main-section__bottom').slick({
                dots:false,
                slidesToScroll: 5,
                slidesToShow: 5,
                initialSlide: 0,
                infinite: true,
                prevArrow: $('.trust-prev-left'),
                nextArrow: $('.trust-next-right'),
                responsive: [
                    {
                        breakpoint: 1640,
                        settings: {
                            slidesToShow: 5,
                            slidesToScroll: 5,
                        }
                    },
                    {
                        breakpoint: 1340,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 4,
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
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    }
                ]
            });
        });

    </script>
</section>
