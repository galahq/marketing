<?php
  $element = $pages->find('element')->find($elementName);
?>

<div class="home__element"><a href="<?php echo $element->link() ?>">

  <?php imgix($element->slug() . '-thumb.png', $element->title(), 50, [], ['class' => 'u-icon--inline']) ?>

  <h3><?php echo $element->title() ?></h3>

  <p><?php echo $element->description() ?></p>

</a></div>
