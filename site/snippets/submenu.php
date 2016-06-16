<?php

$items = false;

// get the open item on the first level
if($root = $pages->findOpen()) {

  // get visible children for the root item
  $items = $root->children()->visible();
}

// only show the menu if items are available
if($items and $items->count()):

?>
<nav class="site submenu cf">
  <ul>
    <?php foreach($items as $item): ?>
    <li><a class="uppercase <?php e($item->isOpen(), ' active') ?>" href="<?php echo $item->url() ?>"><?php echo $item->title()->html() ?></a></li>
    <?php endforeach ?>
  </ul>
</nav>
<?php endif ?>