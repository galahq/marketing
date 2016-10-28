<?php snippet('head') ?>

<main class="main" role="main">

  <div class="t-site">
    <?php
       print "Generated on ";
       print date("F j Y");
    ?>

    <h1 class="u-print__title">MSC Production Guide</h1>

    <nav class="o-guide__nav">
      <?php $guideitems = $pages->find('action')->find('make')->find('production-guide')->children()->visible() ;?>
      <ul class="c-nest-menu__firstlevel">
        <li><?php echo $pages->find('action')->find('make')->find('production-guide')->title() ?></li>
        <?php foreach($guideitems as $guideitem) :?>
        <?php $children = $guideitem->children();?>
        <li>
          <?php echo $guideitem->title()?>
          <ul class="c-nest-menu__secondlevel">
            <?php foreach($children as $child): ?>
              <li>
                <a href="#<?php echo html($child->title()) ?>">
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
        <h1 id="<?php echo html($child->title()) ?>"><?php echo html($child->title()) ?></h1>
        <p><?php echo str_replace('(\\', '(', kirbytext($child->text())) ?></p>
        <p style="page-break-after:always;"></p>
    </div>
    <?php endforeach ?>
    <?php endforeach ?>



  </div>

</main>
