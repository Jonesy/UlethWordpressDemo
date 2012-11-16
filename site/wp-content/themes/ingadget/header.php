<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php bloginfo('sitename'); ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='http://fonts.googleapis.com/css?family=Quicksand:700|Oswald:700|Sanchez:400italic,400' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
  <script src="<?php echo get_template_directory_uri() ?>/scripts/vendor/modernizr.js"></script>
</head>
<body>

  <header role="banner" class="container">
    <div class="row">
      <div class="span4">
        <h1 id="logo">
          <a href="<?php bloginfo('url'); ?>">
            <?php bloginfo('name'); ?>
          </a>
        </h1>
      </div>
      <?php get_search_form(); ?>
    </div>
  </header> <!-- / main banner -->

  <nav role="navigation">
    <?php wp_nav_menu(array(
      'menu' => 'Main',
      'container_class' => 'container'
    )); ?>
  </nav> <!-- / main navigation -->

  <?php if (is_home() && !is_search()) {
    get_template_part('content', 'hero');
  } ?>

  <div id="main" class="container content">