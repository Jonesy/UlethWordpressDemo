<?php get_header(); ?>
<section class="row">
  <div class="<?php echo (is_static_page()) ? "span8" : "span12" ?>">

    <?php if (have_posts()): ?>
      <?php while(have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

        <?php
          if (is_page('features')) {
            get_template_part('content', 'feature');
          }

          if (is_page('reviews')) {
            get_template_part('content', 'review');
          }
        ?>

      <?php endwhile; ?>
    <?php endif; ?>
  </div>

  <?php
    // Check for page type
    if (is_static_page()) {
      get_sidebar();
    }
  ?>
</section>
<?php get_footer(); ?>