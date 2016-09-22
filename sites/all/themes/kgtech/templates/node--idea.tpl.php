<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

 <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <div class="content idea-wrapper"<?php print $content_attributes; ?>>

   <?php print render($content['body']); ?>
   <?php print render($content['field_taging']); ?>

  </div>

 <?php if ($page): ?>
  <div class="panel panel-default rating-wrapper">
    <!-- Default panel contents -->
    <div class="panel-heading">Rating</div>
    <ul class="list-group">

     <?php foreach (kgtech_field_dataname() as $key => $value){ ?>
      <li class="list-group-item">
        <?php print render($content[$value]); ?>
      </li>
    <?php } ?>

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
