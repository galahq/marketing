  <footer class="footer cf site" role="contentinfo">

    <?php
    $items = $pages->visible();
    if($items->count()):
    ?>
    <nav>
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
    </nav>
    <?php endif ?>

<div class="footerbottom">
  <div class="copyright">
    <?php echo $site->copyright()->kirbytext() ?>
  </div>

  <div class="colophon">
    <a href="contact"> Contact Us </a>
  </div>
</div>


  </footer>
  <a href="#top" class="to-top">Top</a>
</body>
</html>
