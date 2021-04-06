<?php
get_header();
?>
<section>
  <div class="container">
    <h1><?php the_title(); ?></h1>

    <?php
      if (have_posts()):
        $myposts = get_posts(array(
          'category' => $current_id,
          'nopaging' => true
        ));
        foreach ($myposts as $post) {
          setup_postdata($post);
          get_template_part('category-item');
        }
      endif;
    ?>
  </div>
</section>
<?php get_footer(); ?>