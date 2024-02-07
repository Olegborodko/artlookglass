<?php
class Video {

    public static function render() {
        include TEMPLATES_DIR . "/Video/video.php";
    }

    public static function renderScripts() {
        include TEMPLATES_DIR . "/Video/scripts.php";
    }

}