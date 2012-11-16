<article>
  <?php get_template_part('content', 'tag'); ?>
  <h2>
    <a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>
  </h2>
  <?php get_template_part('content', 'byline'); ?>
  <?php the_excerpt(); ?>
</article>