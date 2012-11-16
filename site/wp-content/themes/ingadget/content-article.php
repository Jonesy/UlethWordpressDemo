<header>
  <?php get_template_part('content', 'tag'); ?>
  <h2><?php the_title(); ?></h2>
  <?php get_template_part('content', 'byline'); ?>
</header>

<?php if (has_post_thumbnail()): ?>
  <div class="story-image">
    <?php the_post_thumbnail(); ?>
  </div>
<?php endif; ?>

<article>
  <?php the_content(); ?>
</article>