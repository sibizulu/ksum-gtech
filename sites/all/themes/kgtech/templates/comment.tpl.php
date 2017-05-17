<article class="row <?php print $classes; ?>" <?php print $attributes; ?>>
  <div class="col-md-2 col-sm-2 hidden-xs">
    <figure class="thumbnail">
      <?php print $picture ?>
      <figcaption class="text-center">
      <?php if ($new): ?>
        <span class="new"><?php print $new ?></span>
        <?php endif; ?></figcaption>
    </figure>
  </div>
  <div class="col-md-10 col-sm-10" <?php print $content_attributes; ?>>
    <div class="panel panel-default arrow left">
      <div class="panel-body">
        <header class="text-left">
          <div class="comment-user">
            <?php print render($title_prefix); ?>
              <h3<?php print $title_attributes; ?>><?php print $title ?></h3>
            <?php print render($title_suffix); ?>
          </div>
          <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> <?php print $submitted; ?></time>
        </header>
        <div class="comment-post">
           <?php
              // We hide the comments and links now so that we can render them later.
              hide($content['links']);
              print render($content);
            ?>
        </div>
        <p class="text-right"><?php print render($content['links']) ?></p>
      </div>
    </div>
  </div>
</article>
