<div class="element-description">

  <?php
    $element = $pages->find('element')->find($elementName);
    $thumb = $element->files()->filterBy('filename', '*=', '-thumb')->first()->uri();
    ?>

  <img
    class="img-inline"
    src="<?php echo $thumb ?>"
    alt="icon of <?php echo $element->title() ?>"
  />

  <h5 class="uppercase cf"><?php echo $element->title() ?></h5>

  <p><?php echo $element->description() ?></p>

</div>
