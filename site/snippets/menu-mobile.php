<?php $items = $pages->visible();?>

<nav class="site menu-mobile">
  <a href="#menu" id="toggle"><span></span></a>
  <div id="menu">
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
  </div>
</nav>
