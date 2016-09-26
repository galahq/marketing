<?php
  $element = $pages->find('element')->find($elementName);
?>

<div class="element-description"><a href="<?php echo $element->link() ?>">

  <?php imgix($element->slug() . '-thumb.png', $element->title(), 50, [], ['class' => 'img-inline']) ?>

  <h3><?php echo $element->title() ?></h3>

  <p><?php echo $element->description() ?></p>

</a>
</div>
