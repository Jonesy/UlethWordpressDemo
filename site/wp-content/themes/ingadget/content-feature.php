<?php
  $features_args = array(
    'post_type' => 'feature',
    'posts_per_page' => -1,
    'paged'=> $paged
  );
  $features = new WP_Query($features_args);
?>

<?php if ($features->have_posts()): ?>
  <div class="features">
    <?php while ($features->have_posts()) : $features->the_post(); ?>
      <div class="feature-box">
        <?php if (has_post_thumbnail()) {
          the_post_thumbnail();
        } ?>
        <a href="<?php the_permalink(); ?>">
          <h3><?php the_title(); ?></h3>
          <p class="byline">By <?php the_author(); ?></p>
        </a>
      </div>
    <?php endwhile; ?>
    <?php get_template_part('content', 'page-nav'); ?>
  </div>
<?php endif; ?>