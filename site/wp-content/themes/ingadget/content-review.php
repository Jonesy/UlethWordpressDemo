<?php
  $reviews_args = array(
    'post_type' => 'review',
    'posts_per_page' => -1,
    'paged' => $paged
  );
  $reviews = new WP_Query($reviews_args);
?>
<?php if ($reviews->have_posts()): ?>
  <div class="reviews">
    <?php while ($reviews->have_posts()) : $reviews->the_post(); ?>
      <article class="review-post">
        <div class="row">
          <div class="span4 review-image">
            <!--
              TODO: Set up custom post types
              <div class="price">$299</div>
            -->
            <?php if (has_post_thumbnail()) {
              the_post_thumbnail();
            } ?>
          </div>
          <div class="span8">
            <h3>
              <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </h3>
            <?php get_template_part('content', 'byline'); ?>
            <?php the_excerpt(); ?>
          </div>
        </div>
      </article>
    <?php endwhile;wp_reset_query(); ?>
    <?php get_template_part('content', 'page-nav'); ?>
  </div>
<?php endif; ?>