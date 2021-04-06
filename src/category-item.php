<article class="category-post">
  <div>
    <a href="<? the_permalink(); ?>">
      <?
        if (has_post_thumbnail()):
          the_post_thumbnail('thumbnail');
        endif;
      ?>
    </a>
  </div>
  <h2><? the_title(); ?></h2>
  <div><? the_excerpt(); ?></div>
  <div>
    <a href="<? the_permalink(); ?>">
      Читать далее...
    </a>
  </div>
</article>