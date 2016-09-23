<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="home main" role="main">

<section>
  <h3 class="site heading"><?php echo ($page->actionheading()) ?></h3>

  <div class="action-items flex-container site">
    <?php foreach($pages->find('action')->children() as $action): ?>
      <?php snippet('home-actions', array('action' => $action)) ?>
    <?php endforeach ?>
  </div>

  <a class="learn-more-link" href="action">
    <h6><?php echo ($page->actionlearnmore())?> ›</h6>
  </a>
</section>

<section>
  <h3 class="heading site"><?php echo ($page->elementheading()) ?></h3>

  <div class="flex-container flex-column site">
    <div class="flex-growing flex-container">
      <?php snippet('home-element', array('elementName' => 'narrative')); ?>
      <?php snippet('home-element', array('elementName' => 'podcast')); ?>
    </div>

    <figure class="flex-center-img">
      <?php imgix('elements.png', "MSC interface example", 975) ?>
    </figure>

    <div class="flex-growing flex-container">
      <?php snippet('home-element', array('elementName' => 'edgenotes')); ?>
      <?php snippet('home-element', array('elementName' => 'exercise')); ?>
    </div>
  </div>

  <a class="learn-more-link" href="element">
    <h6><?php echo ($page->elementlearnmore())?> ›</h6>
  </a>
</section>

<section>
  <h3 class="heading site"><?php echo ($page->visionheading()) ?></h3>

  <div class="vision-data flex-container site">
    <?php foreach($page->numbers()->toStructure() as $number): ?>
      <div class="number">
        <span class="number-value"><?php echo $number->number() ?></span>
        <h4 class="number-description"><?php echo $number->description() ?></h4>
      </div>
    <?php endforeach ?>
  </div>

  <a class="learn-more-link" href="msc">
    <h6><?php echo ($page->visionlearnmore())?> ›</h6>
  </a>
</section>


</main>

<?php snippet('footer') ?>
