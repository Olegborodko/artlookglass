<?php
class SocialSettings
{

    const section_id = "social_site_section";

    const settings_args = array('default' => '', 'type' => 'option');

    public static function register($wp_customize)
    {
        self::registerSection($wp_customize);
        self::registerFacebook($wp_customize);
        self::registerInstagram($wp_customize);
        self::registerTwitter($wp_customize);
        self::registerYoutube($wp_customize);
        self::registerLinkedin($wp_customize);
    }

    private static function registerSection($wp_customize)
    {
        $wp_customize->add_section(self::section_id, array(
                'title' => 'Social links',
                'capability' => 'edit_theme_options',
                'description' => "Social links here",
                'type' => 'theme_mod',
            )
        );
    }

    private static function registerFacebook($wp_customize)
    {
        $wp_customize->add_setting('social_facebook', self::settings_args);
        $wp_customize->add_control('social_facebook_control', self::getControl("social_facebook", "Facebook link"));
    }

    private static function registerInstagram($wp_customize)
    {
        $wp_customize->add_setting('social_instagram', self::settings_args);
        $wp_customize->add_control('social_instagram_control', self::getControl("social_instagram", "Instagram link"));
    }

    private static function registerTwitter($wp_customize)
    {
        $wp_customize->add_setting('social_twitter', self::settings_args);
        $wp_customize->add_control('social_twitter_control', self::getControl("social_twitter", "Twitter link"));
    }

    private static function registerYoutube($wp_customize)
    {
        $wp_customize->add_setting('social_youtube', self::settings_args);
        $wp_customize->add_control('social_youtube_control', self::getControl("social_youtube", "Youtube link"));
    }

    private static function registerLinkedin($wp_customize)
    {
        $wp_customize->add_setting('social_linkedin', self::settings_args);
        $wp_customize->add_control('social_linkedin_control', self::getControl("social_linkedin", "Linkedin link"));
    }

    private static function getControl($id, $label) {
        return array(
            'type' => 'text',
            'label' => $label,
            'section' => self::section_id,
            'settings' => $id
        );
    }
}