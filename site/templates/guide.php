<?php snippet('head') ?>
<?php snippet('header') ?>
<ul class="c-breadcrumb o-guide__breadcrumb t-site">
  <li><a href="<?php echo $pages->find('action')->find('make')->url() ?>"><?php echo $pages->find('action')->find('make')->title() ?></a></li>
  <li><a href="<?php echo $pages->find('action')->find('make')->find('production-guide')->url() ?>">Production Guide</a></li>
</ul>

<main class="main" role="main">

  <div class="o-flex-container t-site">

    <nav class="o-guide__nav o-flex-item-growing">
      <?php $guideitems = $pages->find('action')->find('make')->find('production-guide')->children()->visible() ;?>
      <ul class="c-nest-menu__firstlevel">
        <li><a href="<?php echo $pages->find('action')->find('make')->find('production-guide')->url() ?>#content" class="<?php e($pages->find('action')->find('make')->find('production-guide')->isOpen()&& !$pages->find('action')->find('make')->find('production-guide')->children()->findOpen(), 'active') ?>"><?php echo $pages->find('action')->find('make')->find('production-guide')->title() ?></a></li>
        <?php foreach($guideitems as $guideitem) :?>
        <?php $children = $guideitem->children();?>
        <li>
          <a href="<?php echo $guideitem->url() ?>#content" class="<?php e($guideitem->isOpen()&& !$children->findOpen(), 'active') ?>"><?php echo $guideitem->title()?></a>
          <ul class="c-nest-menu__secondlevel">
            <?php foreach($children as $child): ?>
              <li>
                <a href="<?php echo $child->url() ?>#content" class="<?php e($child->isOpen(), 'active') ?>">
                  <?php echo $child->title()?>
                </a>
                <?php if ($child->isOpen()):
                  echo render_toc(kirbytext($child->text()));
                  endif
                ?>
              </li>
            <?php endforeach ?>
          </ul>
        </li>
        <?php endforeach ?>
        <li>
          <a class="c-button o-guide__print__button" onclick="printGuide();" style="margin-top: 1.5em;">Download the whole guide</a>
        </li>
      </ul>
    </nav>

    <article class="o-guide__content o-flex-item-growing" id="content">
      <h1><?php echo html($page->title()) ?></h1>

      <?php if($page->text() == ''):?>
      <p>Coming soon!</p>
      <p>We are working hard on improving this section. Thanks for your patience! In case you've got an urgent question, please <a href="../../../contact">contact us via this page</a>.</p>

      <?php else: ?>

      <?php if($page->text()->isNotEmpty()): ?>
      <p><?php echo str_replace('(\\', '(', kirbytext($page->text())) ?></p>
      <?php endif ?>

      <?php endif ?>

      <?php if(!$page->hasChildren()):?>
        <p style="text-align:right; padding-top: 1em;">
          <?php if(!$page->next()): ?> <!--Check if this is the last chapter of this section-->
            <?php $printpage = $pages->find('action')->find('make')->find('production-guide')->find('print')?>
            <?php if($page->parent->next()==$printpage): ?> <!--Check if this is the last section-->
              End
            <?php else: ?>
              End of <?php echo $page->parent()->title()?> Section,<br><a href="<?php echo $page->parent()->next()->url()?>#content">Next Section: <?php echo $page->parent()->next()->title()?> ›</a>
            <?php endif ?>
          <?php else: ?>
            <a href="<?php echo $page->next()->url()?>#content">Next Chapter: <?php echo $page->next()->title()?> ›</a>
          <?php endif ?>
        </p>
      <?php endif ?>

    </article>

  </div>

</main>

<?php snippet('footer') ?>
