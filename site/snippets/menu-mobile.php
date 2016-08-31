<?php $items = $pages->visible();?>
<h5 class="menu-mobile-open button" id="menu-mobile-open">MENU</h5>

<nav id="menu-mobile" class="menu-mobile no-scroll-lock">
  <button class="menu-mobile-close button">&larr; Close Menu</button>
  <ul class="first-level">
    <?php foreach($items as $item): ?>
    <li>
      <a href="<?php echo $item->url() ?>"><?php echo $item->title()->html() ?></a>
        <?php foreach($item->children() as $child): ?>
        <ul class="second-level">
        <li><a href="<?php echo $child->url() ?>"><?php echo $child->title()?></a></li>
        </ul>
        <?php endforeach ?>
    </li>
    <?php endforeach ?>
  </ul>
</nav>

<div class="content-mask"></div>
