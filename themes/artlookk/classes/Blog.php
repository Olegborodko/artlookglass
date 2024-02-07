<?php
class Blog {

    public static function render() {
        self::renderSectionOne();
        self::renderSectionTwo();
    }

    public static function renderSectionOne() {
        include TEMPLATES_DIR . "/Blog/section_one.php";
    }

    public static function renderSectionTwo() {
        include TEMPLATES_DIR . "/Blog/section_two.php";
    }


}