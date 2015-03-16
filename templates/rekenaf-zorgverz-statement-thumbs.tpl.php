<div class="statements-wrapper">
  <?php $children = element_children($elements); ?>
    <ul class="statements">
      <?php foreach ($children as $key): ?>
        <?php print $elements[$key]['#children']; ?>
      <?php endforeach; ?>
    </ul>
</div>
