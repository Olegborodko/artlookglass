<?php

class AluminiumGlassPartition {

    public static function render() {
        include TEMPLATES_DIR . "/AluminiumGlassPartitions/sections.php";
    }

    public static function renderSectionOne() {
        $section = get_field("section_one");
        include TEMPLATES_DIR . "/AluminiumGlassPartitions/sections/section_one.php";
    }

    public static function renderSectionTwo() {
        $section = get_field("section_two");
        include TEMPLATES_DIR . "/AluminiumGlassPartitions/sections/section_two.php";
    }

    public static function renderSectionThreeTop() {
        $section = get_field("section_three");
        include TEMPLATES_DIR . "/AluminiumGlassPartitions/sections/section_three_top.php";
    }

    public static function renderSectionThree() {
        $section = get_field("section_three");
        $dots = $section["content_dots"];
        include TEMPLATES_DIR . "/AluminiumGlassPartitions/sections/section_three.php";
    }

    public static function renderSectionFour() {
        $section = get_field("section_four");
        include TEMPLATES_DIR . "/AluminiumGlassPartitions/sections/section_four.php";
    }

    public static function renderSectionFive() {
        $section = get_field("section_five");
        include TEMPLATES_DIR . "/AluminiumGlassPartitions/sections/section_five.php";
    }

    public static function renderSectionSix() {
        $section = get_field("section_six");
        include TEMPLATES_DIR . "/AluminiumGlassPartitions/sections/section_six.php";
    }

    public static function getItemName($i) {
        switch ($i) {
            case 1:
                return "one";
            case 2:
                return "two";
            case 3:
                return "three";
            case 4:
                return "four";
            case 5:
                return "five";
            case 6:
                return "six";
            case 7:
                return "seven";
        }
        return "one";
    }



}
