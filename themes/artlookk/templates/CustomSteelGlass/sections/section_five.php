<div class="section__glass__design switch-finishes__left">
    <p class="switch-finishes__left-title"><?php echo $section["title"]; ?></p>
    <p class="switch-finishes__left-text">
        <?php echo $section["text"]; ?>
    </p>
    <div class="sectionTwo-title__nav nav-section">
        <button type="button" class="nav-section__item slick-prev-left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/left_arrow.svg" alt="" />
            Prev.
        </button>
        <button type="button" class="nav-section__item slick-next-right">
            Next
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/right-arrow.svg" alt="" />
        </button>
    </div>
</div>
<div class="glass__design__slider switch-finishes__right switch-tab-slider">
    <?php foreach($section["image_block"] as $item) { ?>
    <div>
        <div class="switch-finishes__right-item">
            <div class="switch-finishes__right-image">
                <img src="<?php echo $item["image"]; ?>" alt="" />
            </div>
            <div class="switch-finishes__right-text">
                <div class="switch-finishes__right-textAbout">
                    <p class="switch-finishes__right-textTitle">
                        <?php echo $item["title"]; ?>
                    </p>
                </div>
                <div class="switch-finishes__right-textInfo">
                    <div class="switch-finishes__right-textDesc">
                        <ul class="switch-finishes__right-textDesc-list">
                            <li  class="switch-finishes__right-textDesc-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/pipet-desc.svg" alt="">
                                <strong>Color:</strong>
                                <span><?php echo $item["tooltip"]["color"]; ?></span>
                            </li>
                            <li  class="switch-finishes__right-textDesc-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/pattern-desc.svg" alt="">
                                <strong>Pattern:</strong>
                                <span><?php echo $item["tooltip"]["pattern"]; ?></span>
                            </li>
                            <li  class="switch-finishes__right-textDesc-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/eye-desc.svg" alt="">
                                <strong>Privacy:</strong>
                                <span><?php echo $item["tooltip"]["privacy"]; ?></span>
                            </li>
                        </ul>
                    </div>
                    <div class="switch-finishes__right-textImgInfo">
                        <img class="switch-finishes__right-imageinfo" src="<?php echo get_template_directory_uri(); ?>/assets/icons/information.svg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>

<script>
    $( document ).ready(function() {
        $('.glass__design__slider').slick({
            dots:false,
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: true,
            centerMode: false,
            draggable:true,
            prevArrow: $('.section__glass__design .slick-prev-left'),
            nextArrow: $('.section__glass__design .slick-next-right'),
            responsive: [
                {
                    breakpoint: 1640,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 1340,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
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