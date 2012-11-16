<?php
global $post;
$cats = get_the_category();
$cat = $cats[0];
$post_type = get_post_type($post->ID);
$is_post = ($post_type == "post") ? true : false;
$tag_class = ($is_post) ? $cat->slug : $post_type;
?>
<div class="meta <?php echo $tag_class; ?>">
  <?php if (count($cats) || $is_post == false): ?>
    <div class="tag">
      <?php if ($is_post == true): ?>
        <a href="<?php echo get_category_link($cat->term_id); ?>">
          <?php echo $cat->cat_name; ?>
        </a>
      <?php else: ?>
        <?php
          $post_type_obj = get_post_type_object($post_type);
        ?>
        <a href="/<?php echo $post_type_obj->rewrite['slug']; ?>">
          <?php echo $post_type_obj->labels->singular_name; ?>
        </a>
      <?php endif; ?>
    </div> <!-- / .tab -->
  <?php endif; ?>



  <?php
  $comments = get_comments_number();
  if ($comments): ?>
    <a href="<?php echo (is_single()) ? '#comments' : the_permalink() . '#comments'; ?>" class="comments">
      <?php echo $comments; ?><i></i>
    </a>
  <?php endif; ?>
</div> <!-- / .meta -->