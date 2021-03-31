<?php

require_once 'core.php';

add_action('customize_register', 'init_colors_settings');
function init_colors_settings ($wp_customize) {
  $customizer = new ThemeSettings($wp_customize);

  $customizer->add_color_setting("theme-color", [
    'transport' => 'refresh',
    'label' => __('Address bar color'),
    'section' => "colors",
  ]);

  $customizer->add_setting("lead-title", [
    'label' => __('Lead title'),
    'section' => 'static_front_page',
    'default' => 'Your own Wordpress theme is ready!'
  ]);

  $customizer->add_setting("lead-text", [
    'label' => __('Lead text'),
    'type' => 'textarea',
    'default' => "But it's all blank! Let's make a cooler one :)",
    'section' => 'static_front_page',
  ]);
}
