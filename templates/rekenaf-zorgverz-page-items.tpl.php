<div class="home-items-wrapper">
  <?php $children = element_children($elements); ?>
    <ul class="home-items slides">
      <?php foreach ($children as $key): ?>
        <?php print $elements[$key]['#children']; ?>
      <?php endforeach; ?>
    </ul>
</div>