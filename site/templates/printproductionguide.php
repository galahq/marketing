<?php snippet('head') ?>

<main class="main" role="main">

  <div class="t-site">
    <?php
       print "Generated on ";
       print date("F j Y");
    ?>

    <h1>MSC Production Guide</h1>

    <nav class="o-guide__nav">
      <?php $guideitems = $pages->find('action')->find('make')->find('production-guide')->children()->visible() ;?>
      <ul class="c-nest-menu__firstlevel">
        <li><a href="<?php echo $pages->find('action')->find('make')->find('production-guide')->url() ?>"><?php echo $pages->find('action')->find('make')->find('production-guide')->title() ?></a></li>
        <?php foreach($guideitems as $guideitem) :?>
        <?php $children = $guideitem->children();?>
        <li>
          <a href="<?php echo $guideitem->url() ?>" class="<?php e($guideitem->isOpen()&& !$children->findOpen(), 'active') ?>"><?php echo $guideitem->title()?></a>
          <ul class="c-nest-menu__secondlevel">
            <?php foreach($children as $child): ?>
              <li>
                <a href="<?php echo $child->url() ?>" class="<?php e($child->isOpen(), 'active') ?>">
                  <?php echo $child->title()?>
                </a>
              </li>
            <?php endforeach ?>
          </ul>
        </li>
        <?php endforeach ?>
      </ul>
    </nav>

    <?php $guideitems = $pages->find('action')->find('make')->find('production-guide')->children()->visible() ;?>
    <?php foreach($guideitems as $guideitem) :?>
    <?php $children = $guideitem->children();?>
    <?php foreach($children as $child): ?>
    <div>
        <h1><?php echo html($child->title()) ?></h1>
        <p><?php echo str_replace('(\\', '(', kirbytext($child->text())) ?></p>
    </div>
    <?php endforeach ?>
    <?php endforeach ?>



  </div>

</main>
