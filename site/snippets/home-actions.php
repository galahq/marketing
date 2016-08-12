<div>
  <?php $homethumbImage = $action->files()->filterBy('filename', '*=', '-homethumb')->first()->uri(); ?>
    <img src="<?php echo $homethumbImage ?>" alt="Image for <?php echo html($action->title()) ?>">
  <div class="actiontext">
  <h5 class="uppercase"><?php echo html($action->title()) ?></h5>
  <p><?php echo html($action->tagline()) ?></p>
  </div>
</div>
