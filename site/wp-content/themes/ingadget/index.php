<?php get_header(); ?>

<section class="row">
  <div id="latest-stories" class="span8">
    <?php if (is_category()): ?>
      <header class="category-header">
        <h2><?php echo single_cat_title('', false ); ?> News</h2>
      </header>
    <?php endif; ?>

    <?php
      if (have_posts()) {
        while (have_posts()) {
          the_post();
          get_template_part('content', 'post');
        }
        get_template_part('content', 'page-nav');
      }
    ?>
  </div> <!-- /.span8 -->

  <?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>