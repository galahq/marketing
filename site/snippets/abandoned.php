<section class="scrollable">
  <div class="device-banner">
</section>

<h2><?php echo $pages->find('vision')->tagline() ?></h2>


<section class="elements-tagline">
  <section class="site">
    <h2><?php echo $pages->find('element')->tagline() ?></h2>
  </section>
</section>

<section class="elements">
  <?php foreach($pages->find('element')->children() as $element): ?>
    <section class="flip-flop">
      <?php if($image = $element->image()): ?>
      <figure>
        <?php $url = $image->url() ?>
        <?php $ext = $image->extension() ?>
        <img
          src="<?php echo $url ?>"
          srcset="<?php echo $url ?> 1x,
                  <?php echo preg_replace('/\.'.$ext.'/', '@2x.'.$ext, $url) ?> 2x,
                  <?php echo preg_replace('/\.'.$ext.'/', '@3x.'.$ext, $url) ?> 3x"
          alt="Icon for <?php echo html($element->title()) ?>">
      </figure>
      <?php endif ?>
    <div>
      <h5 class="uppercase"><?php echo $element->title() ?></h5>
      <h2><?php echo $element->tagline() ?></h2>
      <?php echo kirbytext($element->description()) ?>
    <button class="button" onclick="window.location.href='<?php echo $element->link() ?>'"><h5>More</h5></button>
    </div>
    </section>
  <?php endforeach ?>
</section>
