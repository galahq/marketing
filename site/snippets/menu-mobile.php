<?php $items = $pages->visible();?>

<h5 class="c-button" id="c-menu-mobile--open">☰</h5>

<nav class="c-menu-mobile no-scroll-lock">
  <h5 class="c-menu-mobile--close">&larr; Close Menu</h5>
  <ul class="c-nest-menu--firstlevel">
    <li><a href="<?php echo url() ?>">Home</a></li>
    <?php foreach($items as $item): ?>
    <?php $children = $item->children();?>
    <li>
      <a href="<?php echo $item->url() ?>" class="<?php e($item->isOpen() && !$children->findOpen(), 'active') ?>"><?php echo $item->title()->html() ?></a>
        <ul class="c-nest-menu--secondlevel">
          <?php foreach($children as $child): ?>
            <li><a href="<?php echo $child->url() ?>" class="<?php e($child->isOpen(), 'active') ?>"><?php echo $child->title()?></a></li>
          <?php endforeach ?>
        </ul>
    </li>
    <?php endforeach ?>
    <li><a href"0#">Resources</a>
      <ul class="c-nest-menu--secondlevel">
        <li><a href="<?php echo $pages->find('action')->find('teach')->find('evaluation')->url() ?>"><?php echo $pages->find('action')->find('teach')->find('evaluation')->title() ?></a></li>
        <li><a href="<?php echo $pages->find('action')->find('make')->find('production-guide')->url() ?>">Production Guide</a></li>
        <li><a href="<?php echo $pages->find('action')->find('make')->find('proposal')->url() ?>"><?php echo $pages->find('action')->find('make')->find('proposal')->title() ?></a></li>
        <li><a href="<?php echo $pages->find('contact')->url() ?>">Contact Us</a></li>
      </ul>
    </li>
  </ul>
</nav>

<div class="u-content-mask"></div>
