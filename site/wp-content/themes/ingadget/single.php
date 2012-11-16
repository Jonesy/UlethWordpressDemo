<?php get_header(); ?>

<section class="row">
  <div class="span8 story">
    <?php
      if (have_posts()) {
        while (have_posts()) {
          the_post();
          get_template_part('content', 'article');
        }
      }
    ?>

    <?php comments_template('', true ); ?>

  </div> <!-- /.span8 -->
  <?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>