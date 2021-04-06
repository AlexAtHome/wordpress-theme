<?php get_header(); ?>
<?php the_post(); ?>
<section>
  <div class="container">
    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>
  </div>
</section>
<?php get_footer(); ?>