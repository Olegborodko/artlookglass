<?php

class Article
{

    public static function render()
    {
        self::renderSectionOne();
        self::renderSectionTwo();
        self::renderSectionThree();
        self::renderSectionFour();
    }

    public static function renderSectionOne()
    {
        include TEMPLATES_DIR . "/Article/section_one.php";
    }

    public static function renderSectionTwo()
    {
        include TEMPLATES_DIR . "/Article/section_two.php";
    }

    public static function renderSectionThree()
    {
        include TEMPLATES_DIR . "/Article/section_three.php";
    }

    public static function renderSectionFour()
    {
        include TEMPLATES_DIR . "/Article/section_four.php";
    }


}