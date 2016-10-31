<?php $items = $pages->visible();?>

<h5 class="c-button" id="c-menu-mobile--open">☰</h5>

<nav class="c-menu-mobile no-scroll-lock">
  <h5 class="c-menu-mobile--close">&larr; Close Menu</h5>
  <ul class="c-nest-menu__firstlevel">

    <li><a href="<?php echo url() ?>">Home</a></li>


    <?php foreach($items as $item): ?>
      <?php $children = $item->children();?>
      <li>
        <a href="<?php echo $item->url() ?>" class="<?php e($item->isOpen() && !$children->findOpen(), 'active') ?>"><?php echo $item->title()->html() ?></a>
          <ul class="c-nest-menu__secondlevel">

            <?php foreach($children as $child): ?>
            <?php $grandchildren = $child->children();?>

              <li>
                <a href="<?php echo $child->url() ?>"
                   class="<?php e($child->isOpen() && !$grandchildren->findOpen(), 'active') ?>">
                    <?php echo $child->title()?>
                </a>
              </li>

            <?php endforeach ?>

          </ul>
      </li>
    <?php endforeach ?>



    <li>
      <a>Resources</a>

      <ul class="c-nest-menu__secondlevel">

        <li>
          <a href="<?php echo $pages->find('action')->find('make')->find('production-guide')->url() ?>"
             class="<?php e($pages->find('action')->find('make')->find('production-guide')->isOpen(), 'active') ?>" >
             Production Guide
          </a>
        </li>

        <?php $resources = [
          $pages->find('action')->find('make')->find('proposal'),
          $pages->find('action')->find('teach')->find('evaluation'),
          $pages->find('contact')
        ];

        foreach($resources as $resource): ?>
          <li>
            <a href="<?php echo $resource->url() ?>"
               class="<?php e($resource->isOpen(), 'active') ?>" >
                <?php echo $resource->title() ?>
            </a>
          </li>
        <?php endforeach ?>

      </ul>
    </li>
  </ul>
</nav>

<div class="u-content-mask"></div>
