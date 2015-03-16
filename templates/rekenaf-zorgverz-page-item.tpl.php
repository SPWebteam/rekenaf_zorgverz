<li class="home-item thema-onderwerp <?php print $node->type; ?>">
  <a href="<?php print check_plain(url('node/' . $node->nid)); ?>" class="home-item-link">
    <div class="inner-container">
      <div class="inner-wrapper">
        <h2 class="title"><?php print $node->title; ?></h2>
      </div>
    </div>
  </a>
</li>