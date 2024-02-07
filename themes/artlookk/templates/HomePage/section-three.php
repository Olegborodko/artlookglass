<section class="main__section-three section-three">
    <div class="section-three__container container">
        <div class="section-three__body">
            <div class="section-three__main main-three">
                <div class="main-three__top">
                    <p class="main-three__title">what we do</p>
                    <div class="sectionTwo-title__nav nav-section">
                        <button type="button" class="nav-section__item wht-prev-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/left_arrow.svg" alt=""/>
                            Prev.
                        </button>
                        <button type="button" class="nav-section__item wht-next-right">
                            Next
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/right-arrow.svg" alt=""/>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="main-three__bottom main-slider three-slider">
                        <?php foreach($data["what_we_do"] as $item) { ?>
                            <div class="main-slider__item">
                                <div class="main-slider__image">
                                    <a href="<?php echo $item["url"] ?>">
                                        <img src="<?php echo $item["image"]; ?>" alt="">
                                    </a>
                                    <span class="main-slider__button">
                                open
                            </span>
                                </div>
                                <div class="main-slider__text">
                                    <a href="<?php echo $item["url"] ?>">
                                        <p class="main-slider__title"><?php echo $item["title"]; ?></p>
                                    </a>
                                    <p class="main-slider__about"><?php echo $item["subtitle"]; ?></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <hr class="hr-section">
            </div>
        </div>
    </div>

    <script>
        $( document ).ready(function() {
            $('.three-slider').slick({
                dots:false,
                slidesToShow: 5,
                slidesToScroll: 5,
                infinite: true,
                centerMode: false,
                draggable:true,
                prevArrow: $('.wht-prev-left'),
                nextArrow: $('.wht-next-right'),
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
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
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

