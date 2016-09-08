<div><a href="<?php echo $action->link() ?>">
  <?php imgix($action->slug() . '-homethumb.jpg', $action->title(), 500) ?>
  <div class="actiontext">
  <h5 class="uppercase"><?php echo html($action->title()) ?></h5>
  <p><?php echo html($action->tagline()) ?></p>
  </div>
</a>
</div>
