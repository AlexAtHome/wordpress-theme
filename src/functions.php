<?php
define('TEMPLATE_PATH', get_template_directory_uri());
define('CAN_EDIT_POSTS', current_user_can('edit_posts'));
define('CAN_PUBLISH_POSTS', current_user_can('publish_posts'));

define('THEME_VERSION', '1.0.0'); // consider using semantic versioning. (https://semver.org/) 

add_action('wp_head', 'wp_enqueue_scripts', 1);
add_action('wp_head', 'wp_print_styles', 8);
add_action('wp_head', 'wp_print_head_scripts', 9);

add_action('wp_enqueue_scripts', 'set_theme_stylesheets');
add_action('wp_enqueue_scripts', 'set_theme_scripts');

function set_theme_scripts () {
  wp_enqueue_script('main', TEMPLATE_PATH . '/js/main.js', array(), '1.0', '');
}

function set_theme_stylesheets() {
  wp_enqueue_style('main', TEMPLATE_PATH . '/css/main.css', array(), '1.0', '');
  wp_enqueue_style('style', get_stylesheet_uri());
}

// Just remove this whole function and a line underneath it to remove custom logo, if you don't want it
function my_login_logo() {
  $logoUrl = 'https://github.com/mamoruuu.png';
  ?>
  <style>
      #login h1 a {
        background-image: url("<?=$logoUrl;?>");
        height: 140px;
        width: 140px;
        border-radius: 140px;
        background-size: contain;
        background-repeat: no-repeat;
      }
  </style>
<?php }
add_action('login_enqueue_scripts', 'my_login_logo');

register_nav_menus(array(
  'navbar' => 'Main menu',
));

add_theme_support('post-thumbnails');

/* All your Theme Customization settings go here */
require_once 'settings/settings.php';

require_once 'taxonomies/reviews.php';

?>