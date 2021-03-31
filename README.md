# Project name here

## Things to do after applying this template
- [ ] Remove all `.gitkeep` files and unnecessary directories in the `src` dir
- [ ] Fill `style.css` metadata section with actual theme details
- [ ] Make your own `screenshot.png` file. You can also use JPEG format instead. Usually they're made with 1200x900 resolution, but 1800x1350 just looks fine on 4K screens.
- [ ] Put your own Login screen logo at `functions.php` (or delete it and bring back the default one)

## Local Development
The best way to develop your theme locally is to use a Docker container for Wordpress. I made a `docker-compose.yml` file just for that :)

Make sure you have Docker and Docker Compose installed on your system.

```
docker-compose up --build -d
```

## Lifehacks

### Custom login screen logo
You can change the login screen logo in the `functions.php` file by changing the `$logo` variable value to your logo path.

### Add additional styles and scripts
**DO NOT ADD THEMES VIA `<link>` AND `<script>` TAGS AT `header.php`**.

There's a better way to do this.

If you want to add addition stylesheet file, open the `functions.php`, find the `set_theme_stylesheets` function declaration and another [`wp_enqueue_style`](https://developer.wordpress.org/reference/functions/wp_enqueue_style/) call inside of it.

Example:
```php
wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css', [], '1.0');
```

If you want to add a Javascript file - use [`wp_enqueue_script`](https://developer.wordpress.org/reference/functions/wp_enqueue_script/) instead.

Example:
```php
wp_enqueue_script('main', SITE_TEMPLATE_PATH.'/js/main.js', [], '1.0');
```

### Front page exclusive styles

If you want to apply styles or scripts only at front page, check the `is_front_page()` value. If its true - call the `wp_enqueue_style` or `wp_enqueue_script` function.

Example:
```php
if (is_front_page()):
  wp_enqueue_style('swiper-slider', 'https://unpkg.com/swiper/swiper-bundle.css', [], '6.5.3');
  wp_enqueue_script('swiper-slider', 'https://unpkg.com/swiper/swiper-bundle.min.css', [], '6.5.3');
endif;
```
