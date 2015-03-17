<li id="statement_<?php print $statement->stid; ?>" class="statement">
  <div class="inner-container">
    <div class="inner-wrapper">
      <?php $name = check_plain($statement->name) ?>
      <p><?php print $name;?></p>
      <?php
        // Get image if available.
        if (!empty($statement->fid)) {
          $file = file_load($statement->fid);
          if ($file) {
            $image = image_load($file->uri);
            if ($image) {
              $content = array(
                'file' => array(
                  '#theme' => 'image_style',
                  '#style_name' => 'media_thumbnail',
                  '#path' => $image->source,
                ),
              );
              $image_output = drupal_render($content);
            }
          }
        }
        if (empty($image_output)) {
          $module_path = drupal_get_path('module', 'rekenaf_zorgverz');
          $image_path = '/' . $module_path . '/images/anoniem.png';
          $image_output = '<img src="' . $image_path . '" width="100" height="100" />';
        }
        print $image_output;
      ?>
      <blockquote><?php print check_plain($statement->text); ?></blockquote>
    </div>
  </div>
</li>
