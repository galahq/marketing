<div><a href="<?php echo $action->link() ?>">
  <?php imgix($action->slug() . '-homethumb.jpg', $action->title(), 500) ?>
  <div class="actiontext">
  <h3><?php echo html($action->title()) ?></h3>
  <p><?php echo html($action->tagline()) ?></p>
  </div>
</a>
</div>
