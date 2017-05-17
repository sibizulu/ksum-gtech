<?php $user_data = user_load(arg(1)); ?>

<?php if (isset($user_data->roles[6])) : ?>

  <h3>Welcome you! <small>You are logged in using the mail id <?php echo $user_data->mail; ?></small></h3>

  <p>Used credential from <a href="https://startupmission.kerala.gov.in/" target="_blank">Startupmission</a></p>

  <?php echo views_embed_view("ideas"); ?>

<?php else: ?>

<div class="row profile"<?php print $attributes; ?>>

  <div class="col-md-2">
    <?php print render($user_profile['user_picture']); ?>
  </div>
  <div class="col-md-10">
      <?php hide($user_profile['field_name']); ?>
      <?php print render($user_profile); ?>
    <div class="links">
      <a href="<?php print url("user/{$user_data->uid}/edit"); ?>" class="btn btn-info">Edit Profile</a>
    </div>
  </div>

</div>

<?php endif; ?>
