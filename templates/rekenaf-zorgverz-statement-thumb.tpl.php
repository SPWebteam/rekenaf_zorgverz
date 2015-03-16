<li id="statement_<?php print $statement->stid; ?>" class="statement">
  <div class="inner-container">
    <div class="inner-wrapper">
      <?php
        // Get image if available.
        if (!empty($statement->fid)) {
          $file = file_load($statement->fid);
          $image = image_load($file->uri);
          $content = array(
            'file' => array(
              '#theme' => 'image_style',
              '#style_name' => 'media_thumbnail',
              '#path' => $image->source,
            ),
          );
          $image_output = drupal_render($content);
        }
        else {
          $module_path = drupal_get_path('module', 'rekenaf_zorgverz');
          $image_path = '/' . $module_path . '/images/anoniem.png';
          $image_output = '<img src="' . $image_path . '" width="100" height="100" />';
        }
        print $image_output;
      ?>
    </div>
  </div>
</li>
