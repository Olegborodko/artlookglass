<?php

class ThemeSettings {

    const section_id = "data_site_section";

    const settings_args = array('default' => '', 'type' => 'option');

    public static function register($wp_customize) {
        self::registerSection($wp_customize);
        self::registerPhone($wp_customize);
        self::registerAddress($wp_customize);
        self::registerEmail($wp_customize);
        self::registerWorkdays($wp_customize);
        self::registerMapLink($wp_customize);
    }

    private static function registerSection($wp_customize) {
        $wp_customize->add_section(self::section_id, array(
                'title' => 'Site Data',
                'capability'  => 'edit_theme_options',
                'description' => "Site data here",
                'type'        => 'theme_mod',
            )
        );
    }

    private static function registerPhone($wp_customize) {
        $wp_customize->add_setting('theme_contact_phone', self::settings_args);
        $wp_customize->add_control('theme_contact_phone_control', self::getControl("theme_contact_phone", "Main Phone Number"));
    }

    private static function registerWorkdays($wp_customize) {
        $wp_customize->add_setting('theme_workdays', self::settings_args);
        $wp_customize->add_control('theme_workdays_control', self::getControl("theme_workdays", "Workdays"));
    }

    private static function registerAddress($wp_customize) {
        $wp_customize->add_setting('theme_address', self::settings_args);
        $wp_customize->add_control('theme_address_control', self::getControl("theme_address", "Address"));
    }

    private static function registerEmail($wp_customize) {
        $wp_customize->add_setting('theme_email', self::settings_args);
        $wp_customize->add_control('theme_email_control', self::getControl("theme_email", "Email"));
    }

    private static function registerMapLink($wp_customize) {
        $wp_customize->add_setting('theme_map_link', self::settings_args);
        $wp_customize->add_control('theme_map_link_control', self::getControl("theme_map_link", "Map Link"));
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