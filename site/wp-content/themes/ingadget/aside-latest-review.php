<?php
$latest_review_args = array(
  'post_type' => 'review',
  'posts_per_page' => 1
);
$latest_review = new WP_Query($latest_review_args);
?>

<?php while ($latest_review->have_posts()) : $latest_review->the_post(); ?>
  <?php if (has_post_thumbnail()) {
    the_post_thumbnail();
  } ?>
  <h4>
    <a href="<?php the_permalink(); ?>">
      <?php the_author(); ?> reviews <?php the_title(); ?>
    </a>
  </h4>
  <?php the_excerpt(); ?>
<?php
  endwhile;
  // Reset the query
  wp_reset_query();
?>