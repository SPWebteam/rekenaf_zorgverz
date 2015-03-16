<?php
  $image = $node_wrapper->image->value();
  if (isset($image)) {
    $image_render = spmedia_home_item_crop_picture($node_wrapper->image->file);
  }
?>


<li class="home-item persoon thema-onderwerp">
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
        <h2><?php print $node->title; ?></h2>
    </div>
  </a>
</li>