<?php
  // nested menu
  $items = $pages->visible();
  // only show the menu if items are available
  if($items->count()):
  ?>

  <nav class="site menu-mobile">
    <a href="#menu" id="toggle"><span></span></a>
    <div id="menu">
    <ul class="menu_drop">
      <?php foreach($items as $item): ?>
      <li>
        <a<?php e($item->isOpen(), ' class="active"') ?> href="<?php echo $item->url() ?>"><?php echo $item->title()->html() ?></a>

        <?php

        // get all children for the current menu item
        $children = $item->children()->visible();

        // display the submenu if children are available
        if($children->count() > 0):

        ?>
        <ul class="second-level">
          <?php foreach($children as $child): ?>
          <li><a<?php e($child->isOpen(), ' class="active"') ?> href="<?php echo $child->url() ?>"><?php echo $child->title()->html() ?></a></li>
          <?php endforeach ?>
        </ul>
        <?php endif ?>

      </li>
      <?php endforeach ?>
    </ul>
  </div>
  </nav>
<?php endif ?>
