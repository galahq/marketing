<?php $items = $pages->visible();?>

<nav class="menu-mobile">
  <h4 id="responsive-nav">MENU</h4>
  <div id="menu">
    <ul class="first-level" style="display: none;">
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
