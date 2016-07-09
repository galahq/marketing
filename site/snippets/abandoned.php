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



<div class="menubar uppercase">
  <div class="site">
    <?php if($page->parent()->visible()): ?>
    <p><?php echo html($page->parent()->title()) ?></p>
    <?php else: ?>
    <p><?php echo html($page->title()) ?></p>
    <?php endif ?>
  </div>
</div>


//footer menu original
<ul class="footermenu">
  <?php foreach($items as $item): ?>
  <li>
    <a<?php e($item->isOpen(), ' class="active"') ?> href="<?php echo $item->url() ?>"><?php echo $item->title()->html() ?></a>

    <?php
    // get all children for the current menu item
    $children = $item->children()->visible();

    // display the submenu if children are available
    if($children->count() > 0):
    ?>
    <ul>
      <?php foreach($children as $child): ?>
      <li><a<?php e($child->isOpen(), ' class="active"') ?> href="<?php echo $child->url() ?>"><?php echo $child->title()->html() ?></a></li>

      <?php
      // get all children for the current menu item
      $grandchildren = $child->children()->visible();

      // display the submenu if children are available
      if($grandchildren->count() > 0):
      ?>
      <ul>
        <?php foreach($grandchildren as $grandchild): ?>
        <li><a<?php e($grandchild->isOpen(), ' class="active"') ?> href="<?php echo $grandchild->url() ?>"><?php echo $grandchild->title()->html() ?></a></li>
        <?php endforeach ?>
      </ul>
      <?php endif ?>
      <?php endforeach ?>
    </ul>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>
<?php endif ?>
