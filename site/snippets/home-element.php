<?php
  $element = $pages->find('element')->find($elementName);
?>

<div class="element-description"><a href="<?php echo $element->link() ?>">

  <?php imgix($element->slug() . '-thumb.png', $element->title(), 50, [], ['class' => 'img-inline']) ?>

  <h5 class="uppercase cf"><?php echo $element->title() ?></h5>

  <p><?php echo $element->description() ?></p>

</a>
</div>
