<?php

class ThemeSettings {
  private $provider;

  public function __construct(WP_Customize_Manager $wp_customize) {
    $this->provider = $wp_customize;
  }

  public function add_setting(string $name, $data) {
    $this->provider->add_setting($name, [
      'transport' => 'refresh',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'default' => $data['default'] ? $data['default'] : '',
    ]);
    $this->provider->add_control($name."_control", [
      'label' => $data['label'],
      'type' => $data['input'] ? $data['input'] : 'input',
      'section' => $data['section'],
      'settings' => $name
    ]);
  }

  public function add_color_setting(string $name, $data) {
    $this->provider->add_setting($name, [
      'transport' => $data['transport'],
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'sanitize_hex_color',
      'default' => $data['default'] ? $data['default'] : '',
    ]);
    $this->provider->add_control(new WP_Customize_Color_Control($this->provider, $name."_control", [
      'label' => $data['label'],
      'section' => $data['section'],
      'settings' => $name
    ]));
  }
}