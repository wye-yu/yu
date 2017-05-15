<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<article class="<?php print $classes; ?> clearfix node-<?php print $node->nid; ?>"<?php print $attributes; ?>>

  <?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || $preview || !$page && $title): ?>
    <header>
      <?php print render($title_prefix); ?>
      <?php if (!$page && $title): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($display_submitted): ?>
        <p class="submitted">
          <?php print $user_picture; ?>
          <?php print $submitted; ?>
        </p>
      <?php endif; ?>

      <?php if ($unpublished): ?>
        <mark class="watermark"><?php print t('Unpublished'); ?></mark>
      <?php elseif ($preview): ?>
        <mark class="watermark"><?php print t('Preview'); ?></mark>
      <?php endif; ?>
    </header>
  <?php endif; ?>

  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    //print render($content);
    //dpm($content);
  ?>
  <div class="profile-block clearfix">
  <?php if (isset($content['field_profile_image']) && !empty($content['field_profile_image'])){ ?>
      <div class="profile-image-block">
        <?php print render($content['field_profile_image']); ?>
      </div>
      <div class="profile-details-block">
  <?php } ?>
  <?php
    print render($content['field_first_name']);
    print render($content['field_last_name']);
    print render($content['field_profile_gender']);
    print render($content['field_profile_email']);
    print render($content['field_profile_phone']);
  ?>
  <?php if (isset($content['field_profile_image']) && !empty($content['field_profile_image'])){ ?>
      </div>
  <?php } ?>
  </div>
  
  <?php //print render($content['field_profile_address']); ?>
  
  <?php print render($content['field_profile_content']); ?>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</article>
