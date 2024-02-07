<?php

class HomePage {

    public static function render() {
        self::renderSectionOne();
        self::renderSectionTwo();
        self::ourProducts();

        /*require get_template_directory() . '/inc/parts/section__faqs.php';*/

        self::renderSectionFour();
        self::renderSectionFive();
        self::renderSectionSix();
        self::renderSectionSeven();
    }

    public static function renderSectionOne() {
        include TEMPLATES_DIR . "/HomePage/section-one.php";
    }

    public static function renderSectionTwo() {
        include TEMPLATES_DIR . "/HomePage/section-two.php";
    }

    public static function renderSectionThree() {
        $data = get_field("section_three");
        include TEMPLATES_DIR . "/HomePage/section-three.php";
    }

    public static function renderSectionFour() {
        include TEMPLATES_DIR . "/HomePage/section-four.php";
    }

    public static function renderSectionFive() {
        include TEMPLATES_DIR . "/HomePage/section-five.php";
    }

    public static function renderSectionSix() {
        include TEMPLATES_DIR . "/HomePage/section-six.php";
    }

    public static function renderSectionSeven() {
        include TEMPLATES_DIR . "/HomePage/section-seven.php";
    }

    public static function ourProducts() {
        include TEMPLATES_DIR . "/html-block/our-products.php";
    }

}
