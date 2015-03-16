<?php
  $image = $node_wrapper->header_media->value();
  if (isset($image)) {
    $image_render = spmedia_home_item_crop_picture($node_wrapper->header_media->file);
  }
?>
<li class="home-item thema-onderwerp onderwerp" style="width:280px">
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
    <div class="item-text dotdotdot">
      <h2><?php print check_plain($node->title); ?></h2>
    </div>
  </a>
</li>