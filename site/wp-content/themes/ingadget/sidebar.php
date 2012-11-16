<?php global $post;wp_reset_query(); ?>
<aside class="span4">
  <?php if (get_post_type($post->ID) != 'review') {
    get_template_part('aside', 'latest-review');
  }?>

  <?php if (!is_home() && !is_front_page()) {
    get_template_part('aside', 'latest-news');
  } ?>
</aside> <!-- / sidebar -->