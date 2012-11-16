<?php get_header(); ?>

<section class="row">
  <div id="latest-stories" class="span8">
    <header class="category-header">
      <h2>Search results for "<?php echo get_search_query(); ?>"</h2>
    </header>

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