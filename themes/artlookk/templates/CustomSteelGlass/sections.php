<section class="custom-steel-main">

    <div class="container">
        <?php require get_template_directory() . '/inc/parts/section_breadcrumbs.php'; ?>
    </div>

    <?php require get_template_directory() . '/inc/parts/section_hero.php'; ?>


    <section class="section__feedback__widget">
        <div class="container">
            <div class="feedback__widget__wrap">
                <?php the_field('feedback_widget_mini', 'option'); ?>
            </div>
        </div>
    </section>


    <div class="custom-steel-main__container container">
        <div class="custom-steel-main__body">
            <div class="custom-steel-main__main main-steel">
                <div class="main-steel__section-one steel-one">
                    <?php CustomSteelGlass::renderTabs(); ?>
                    <hr class="hr-section" />
                </div>
            </div>
        </div>
    </div>

    <div class="switch-tab-links">
        <div class="switch-tab-links-item" id="swing">
            <div class="switch-one__container container">
                <?php CustomSteelGlass::renderSectionTwo("content_swing_doors"); ?>
                <hr class="hr-section" />
                <?php CustomSteelGlass::renderSectionThreeTitle(); ?>
            </div>
            <?php CustomSteelGlass::renderSectionThree("content_swing_doors"); ?>
        </div>

        <div class="switch-tab-links-item" id="slidings">
            <div class="switch-one__container container">
                <?php CustomSteelGlass::renderSectionTwo("content_sliding_doors"); ?>
                <hr class="hr-section" />
                <?php CustomSteelGlass::renderSectionThreeTitle(); ?>
            </div>
            <?php CustomSteelGlass::renderSectionThree("content_sliding_doors"); ?>
        </div>

        <div class="switch-tab-links-item" id="bi-folding">
            <div class="switch-one__container container">
                <?php CustomSteelGlass::renderSectionTwo("content_bi-folding_doors"); ?>
                <hr class="hr-section" />
                <?php CustomSteelGlass::renderSectionThreeTitle(); ?>
            </div>
            <?php CustomSteelGlass::renderSectionThree("content_bi-folding_doors"); ?>
        </div>
        <div class="switch-tab-links-item" id="stationary">
            <div class="switch-one__container container">
                <?php CustomSteelGlass::renderSectionTwo("content_stationary"); ?>
                <hr class="hr-section" />
                <?php CustomSteelGlass::renderSectionThreeTitle(); ?>
            </div>
            <?php CustomSteelGlass::renderSectionThree("content_stationary"); ?>
        </div>
    </div>

    <div class="custom-steel-main__switch-one switch-one">
        <div class="switch-one__container container">
            <hr class="hr-section marginHr" />
            <?php CustomSteelGlass::renderSectionFour(); ?>
            <hr class="hr-section" />
            <?php require get_template_directory() . '/inc/parts/section_glass_design.php'; ?>
            <hr class="hr-section" />

            <div id="handles-swich-swing" class="handles-wrapper">
                <?php CustomSteelGlass::renderSectionSix("swing_image_block"); ?>
            </div>

            <div id="handles-swich-slidings" class="handles-wrapper">
                <?php CustomSteelGlass::renderSectionSix("sliding_image_block"); ?>
            </div>

            <div id="handles-swich-bi-folding" class="handles-wrapper">
                <?php CustomSteelGlass::renderSectionSix("bi-folding_image_block"); ?>
            </div>

            <div id="handles-swich-stationary" class="handles-wrapper">
                <?php CustomSteelGlass::renderSectionSix("stationary_image_block"); ?>
            </div>

            <hr class="hr-section" />

            <?php CustomSteelGlass::renderSectionSeven(); ?>

            <hr class="hr-section" />

            <?php CustomSteelGlass::renderFreeEstimateForm(); ?>

            <hr class="hr-section" />

            <?php CustomSteelGlass::renderSectionEight(); ?>

        </div>
    </div>
</section>

<script>
    function openTab(evt, tabName) {
        var i, tabcontent, tablinks, tabcontent_fixed;
        tabcontent = document.getElementsByClassName("switch-tab-links-item");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tabcontent = document.getElementsByClassName("swith-configuration-wrapper");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tabcontent = document.getElementsByClassName("handles-wrapper");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tabcontent = document.getElementsByClassName("switch-calc-image");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink-steel");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active-tabslink", "");
        }
        document.getElementById(tabName).style.display = "block";
        document.getElementById("configuration_" + tabName).style.display = "block";
        document.getElementById("handles-swich-" + tabName).style.display = "block";
        //$("#handles-swich-" + tabName).find(".handless-item").slick("refresh");
        initSlider_b(tabName);
        document.getElementById("calc-image-" + tabName).style.display = "block";
        evt.currentTarget.className += " active-tabslink";
    }

    function initSlider_b( name_b ) {
        $( document ).ready(function() {
            $('#handles-swich-' + name_b + ' .handles-swich-swing-slick').slick({
                dots:false,
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: true,
                centerMode: false,
                draggable:true,
                prevArrow: $('#handles-swich-' + name_b + ' .section_six .handless-prev-left'),
                nextArrow: $('#handles-swich-' + name_b + '  .section_six .handless-next-right'),
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
    }

    $( document ).ready(function() {
        $(function() {
            document.getElementById("defaultOpen").click();
            $('input[name="configuration"]').change(function() {
                let configName = $(this).prop('id');
                let path = '<?php echo get_template_directory_uri() . "/assets/img/" ?>';
                let imageName = "calc-image.jpg";
                switch (configName) {
                    case "swing":
                        imageName = "calc-image.jpg";
                        break;
                    case "sliding":
                        imageName = "calc-image2.jpg";
                        break;
                    case "divider":
                        imageName = "calc-image4.jpg";
                        break;
                    case "folding":
                        imageName = "calc-image3.jpg";
                        break;
                    case "multi-sliding":
                        imageName = "calc-image.jpg";
                        break;
                }
                $('#select_config_estimate').attr('src', path + imageName);
            });
        });
    });



</script>