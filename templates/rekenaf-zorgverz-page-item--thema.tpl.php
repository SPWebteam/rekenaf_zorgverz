<?php
  $image = $node_wrapper->header_media->value();
  if (isset($image)) {
    $image_render = spmedia_home_item_crop_picture($node_wrapper->header_media->file);
  }
?>

<li class="home-item thema-onderwerp thema">
  <a href="<?php print check_plain(url('node/' . $node->nid)); ?>" class="home-item-link">
    <div class="icon">
      <span class="icon-title"></span>
    </div>
     <div class="onderwerp-image">
      <?php if(!empty($image_render)): ?>
        <?php print render($image_render); ?>
      <?php else : ?>
        <img src="<?php print check_plain(url(drupal_get_path('theme', 'pomodoro') . '/images/placeholder-activiteit.png')); ?>" alt="" />
      <?php endif; ?>
    </div>
    <div class="item-text">
      <?php if (!empty($node->subtitle[LANGUAGE_NONE][0]['safe_value'])): ?>
        <h2 class="payoff"><?php print $node->subtitle[LANGUAGE_NONE][0]['safe_value']; ?></h2>
      <?php endif; ?>
    </div>
  </a>
</li>