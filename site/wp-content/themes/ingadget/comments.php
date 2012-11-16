<div id="comments">
  <div class="comments-header">
    <h3>Comments Board</h3>
  </div>
  <?php if (have_comments()) : ?>
  <ol>
    <?php wp_list_comments(); ?>
  </ol>
  <?php else: ?>
    <h4>Strange, no one has started a flame war yet...</h4>
  <?php endif; ?>
  <div class="comments-header">
    <h3>Troll Away</h3>
  </div>
  <?php
  $comments_args = array(
    // change the title of send button
    'title_reply'=>'',
    // remove "Text or HTML to be displayed after the set of comment fields"
    'comment_notes_after' => '',
    // Layout the comment form
    'comment_field' => '<div class="comments-form"><textarea id="comment" name="comment" class="input-large" placeholder="Yap yap" aria-required="true"></textarea></div>',
  );
  comment_form($comments_args);
  ?>
</div>