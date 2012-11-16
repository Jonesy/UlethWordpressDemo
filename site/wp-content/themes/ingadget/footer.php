  </div> <!-- / #main -->

  <?php if (is_single()) {
    get_template_part('content', 'hero');
  } ?>

  <footer>
    <div class="container">
      <div class="row">
        <div class="span6">
          <h3>InGadget</h3>
          <?php wp_nav_menu(array(
            'menu' => 'Footer',
            'container' => '',
            'menu_class'=> 'unstyled'
          )); ?>
        </div>
        <div class="span4 legal pull-right">
          <p>© <?php echo date('Y'); ?></p>
          <a rel="license" href="http://creativecommons.org/licenses/by-nc/2.5/ca/deed.en_US"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc/2.5/ca/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">Ingadget Workshop Project</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://general-metrics.com" property="cc:attributionName" rel="cc:attributionURL">Joshua R Jones</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc/2.5/ca/deed.en_US">Creative Commons Attribution-NonCommercial 2.5 Canada License</a>.
        </div>
      </div>
    </div>
  </footer>
  <script src="<?php echo get_template_directory_uri() ?>/scripts/vendor/jquery-1.8.3.js"></script>
  <script src="<?php echo get_template_directory_uri() ?>/scripts/vendor/harvey.js"></script>
</body>
</html>