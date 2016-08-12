<div>
  <?php if($image = $action->image()): ?>
    <img src="<?php echo $image->url() ?>" alt="Image for <?php echo html($action->title()) ?>">
  <?php endif ?>
  <div class="actiontext">
  <h5 class="uppercase"><?php echo html($action->title()) ?></h5>
  <p><?php echo html($action->tagline()) ?></p>
  </div>
</div>
