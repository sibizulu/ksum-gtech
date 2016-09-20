<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

 <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <div class="content idea-wrapper"<?php print $content_attributes; ?>>

   <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      //hide($content['links']);
      hide($content['field_financially_viable']);
      hide($content['field_total_rating']);
      hide($content['field_technology_stack']);

      print render($content);
    ?>

  </div>

 <?php if ($page): ?>
  <div class="panel panel-default rating-wrapper">
    <!-- Default panel contents -->
    <div class="panel-heading">Rating</div>
    <ul class="list-group">
      <li class="list-group-item">
        <?php print render($content['field_financially_viable']); ?>
      </li>
      <li class="list-group-item">
        <?php print render($content['field_technology_stack']); ?>
      </li>
    </ul>
  </div>
  <?php endif; ?>

 <?php if ($display_submitted): ?>
    <div class="submitted">
      <?php print $submitted; ?>
      <?php print render($content['field_total_rating']); ?>
    </div>
  <?php endif; ?>

</div>
