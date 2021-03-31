<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(' ', true, 'right'); ?></title>

    <meta name="theme-color" content="<?=get_theme_mod('theme-color'); ?>"/>
    <meta name="msapplication-navbutton-color" content="<?=get_theme_mod('theme-color'); ?>"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="<?=get_theme_mod('theme-color'); ?>"/>

    <?php wp_head(); ?>
</head>
<body>
  <div class="page-wrap">