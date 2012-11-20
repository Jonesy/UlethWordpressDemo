<div class="hero-unit<?php if (is_single()) {echo " hero-footer";} ?>">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="tag tag-lrg">
          <a href="/features"><h4>Feature Stories</h2></a>
        </div>
        <div class="features">
          <?php
            $feature_args = array(
              'post_type' => 'feature',
              'posts_per_page' => 3
            );
            $features = new WP_Query($feature_args);
          ?>

          <?php while ($features->have_posts()) : $features->the_post(); ?>
            <div class="feature-box">
              <?php if (has_post_thumbnail()) {
                the_post_thumbnail('feature-hero');
              } else { ?>
                <img src="http://placehold.it/600x600">
              <?php } ?>
              <a href="<?php the_permalink(); ?>">
                <h3><?php the_title(); ?></h3>
                <p class="byline">By <?php the_author(); ?></p>
              </a>
            </div>
          <?php endwhile; ?>

        </div> <!-- / .features -->
      </div> <!-- / .span12 -->
    </div> <!-- / .row -->
  </div> <!-- / .container -->
</div> <!-- / .hero-unit -->