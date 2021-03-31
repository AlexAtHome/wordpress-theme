<?php get_header(); ?>
<header class="front-page-header" style="background-color: <?=get_theme_mod('lead-background')?>">
  <div class="container">
    <h3 style="font-size: 3em"><?= get_theme_mod('lead-title', 'Your own Wordpress theme is ready!'); ?></h3>
    <p><?= get_theme_mod('lead-text', "But it's all blank! Let's make a cooler one :)"); ?></p>
  </div>
</header>
<section>
  <div class="container">
    <h1><?php the_title(); ?></h1>
    <div><?php the_content(); ?></div>
  </div>
</section>
<?php get_footer(); ?>