<?php $items = $pages->visible();?>
<h5 class="button" id="menu-mobile-open">MENU</h5>

<nav class="menu-mobile no-scroll-lock">
  <h5 class="menu-mobile-close">&larr; Close Menu</h5>
  <ul class="first-level">
    <?php foreach($items as $item): ?>
    <li>
      <a href="<?php echo $item->url() ?>"><?php echo $item->title()->html() ?></a>
        <ul class="second-level">
          <?php foreach($item->children() as $child): ?>
            <li><a href="<?php echo $child->url() ?>"><?php echo $child->title()?></a></li>
          <?php endforeach ?>
        </ul>
    </li>
    <?php endforeach ?>
  </ul>
</nav>

<div class="content-mask"></div>
