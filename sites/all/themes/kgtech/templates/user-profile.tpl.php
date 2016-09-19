<?php //print_r($user_profile); ?>

<div class="row profile"<?php print $attributes; ?>>

  <div class="col-md-2">
    <?php print render($user_profile['user_picture']); ?>
  </div>
  <div class="col-md-10">
  <h3><?php print render($user_profile['field_name']); ?></h3>
    <?php print render($user_profile); ?>
  </div>

</div>
