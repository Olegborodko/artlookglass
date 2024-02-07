<?php

class CustomSteelGlass {

    public static function render() {
        include TEMPLATES_DIR . "/CustomSteelGlass/sections.php";
    }

    public static function renderSectionOne() {
        $section_one = get_field("section_one");
        $section_title = $section_one["section_title"];
        $section_image = $section_one["section_image"];
        include TEMPLATES_DIR . "/CustomSteelGlass/sections/section_one.php";
    }

    public static function renderSectionTwo($content_id) {
        $section_two = get_field("section_two");
        $content = $section_two[$content_id];
        include TEMPLATES_DIR . "/CustomSteelGlass/sections/section_two.php";
    }

    public static function renderSectionThreeTitle() {
        $section_three = get_field("section_three");
        $title = $section_three["title"];
        $info = $section_three["info"];
        include TEMPLATES_DIR . "/CustomSteelGlass/sections/section_three_title.php";
    }

    public static function renderSectionThree($content_id) {
        $section_three = get_field("section_three");
        $content = $section_three[$content_id];
        include TEMPLATES_DIR . "/CustomSteelGlass/sections/section_three.php";
    }

    public static function renderSectionFour() {
        $section = get_field("section_four");
        include TEMPLATES_DIR . "/CustomSteelGlass/sections/section_four.php";
    }

    public static function renderSectionFourImageBlock($content_id) {
        $section = get_field("section_four");
        $content = $section[$content_id];

        include TEMPLATES_DIR . "/CustomSteelGlass/sections/section_four_images_block.php";
    }

    public static function renderSectionFive() {
        $section = get_field("section_five");
        include TEMPLATES_DIR . "/CustomSteelGlass/sections/section_five.php";
    }

    public static function renderSectionSix($content_id) {
        $section = get_field("section_six");
        $title = $section["title"];
        $content = $section[$content_id];
        include TEMPLATES_DIR . "/CustomSteelGlass/sections/section_six.php";
    }

    public static function renderSectionSeven() {
        $section = get_field("section_seven");
        $title = $section["title"];
        $options = $section["options"];
        include TEMPLATES_DIR . "/CustomSteelGlass/sections/section_seven.php";
    }

    public static function getSectionSevenImage($image_id) {
        $section = get_field("section_seven");
        return $section[$image_id];
    }

    public static function renderSectionEight() {
        $section = get_field("section_eight");
        include TEMPLATES_DIR . "/CustomSteelGlass/sections/section_eight.php";
    }

    public static function renderFreeEstimateForm() {
        $form = get_field("free_estimate_form");
        $title = $form["title"];
        $sub_title = $form["sub_title"];
        $configuration_items = $form["configuration_item"];
        include TEMPLATES_DIR . "/CustomSteelGlass/sections/free_estimate_form.php";
    }

    public static function renderTabs() {
        include TEMPLATES_DIR . "/CustomSteelGlass/sections/section_tabs.php";
    }

    public static function scripts() {
        include TEMPLATES_DIR . "/CustomSteelGlass/scripts.php";
    }

}