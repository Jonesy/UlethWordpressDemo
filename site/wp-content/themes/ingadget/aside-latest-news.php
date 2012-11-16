<?php
$latest_news_args = array(
  'posts_per_page' => 5
);
$latest_news = new WP_Query($latest_news_args);
?>
<div class="latest-news-aside">
  <h3>Latest News</h3>
  <ul>
    <?php while ($latest_news->have_posts()) : $latest_news->the_post(); ?>
      <li>
        <?php if (has_post_thumbnail()) {
          // Size the image to 50px x 50px
          the_post_thumbnail(array(50, 50));
        } ?>
        <h5>
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h5>
        <small>
          <?php
            // Show the hours that have transpired since post time
            echo human_time_diff(get_the_time('U'), current_time('timestamp') ) . ' ago';
          ?>
        </small>
      </li>
    <?php endwhile;wp_reset_query(); ?>
  </ul>
</div>