<?php

class FramelessGlassPartitions {

    public static function render() {
        include TEMPLATES_DIR . "/FramelessGlassPartitions/sections.php";
    }

    public static function renderSectionOne() {
        $section = get_field("section_one");
        include TEMPLATES_DIR . "/FramelessGlassPartitions/sections/section_one.php";
    }

    public static function renderSectionTwo() {
        $section = get_field("section_two");
        include TEMPLATES_DIR . "/FramelessGlassPartitions/sections/section_two.php";
    }

    public static function renderSectionThreeTop() {
        $section = get_field("section_three");
        include TEMPLATES_DIR . "/FramelessGlassPartitions/sections/section_three_top.php";
    }

    public static function renderSectionThree() {
        $section = get_field("section_three");
        $dots = $section["content_dots"];
        include TEMPLATES_DIR . "/FramelessGlassPartitions/sections/section_three.php";
    }

    public static function renderSectionFour() {
        $section = get_field("section_four");
        include TEMPLATES_DIR . "/FramelessGlassPartitions/sections/section_four.php";
    }

    public static function renderSectionFive() {
        $section = get_field("section_five");
        include TEMPLATES_DIR . "/FramelessGlassPartitions/sections/section_five.php";
    }

    public static function renderSectionSix() {
        $section = get_field("section_six");
        include TEMPLATES_DIR . "/FramelessGlassPartitions/sections/section_six.php";
    }



}
