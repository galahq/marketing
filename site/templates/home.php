<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="home main" role="main">

<section>
  <h2 class="site heading"><?php echo ($page->actionheading()) ?></h2>

  <div class="action-items flex-container site">
    <?php foreach($pages->find('action')->children() as $action): ?>
      <?php snippet('home-actions', array('action' => $action)) ?>
    <?php endforeach ?>
  </div>

  <a class="learn-more-link" href="action">
    <h4><?php echo ($page->actionlearnmore())?> ›</h4>
  </a>
</section>

<section>
  <h2 class="heading site"><?php echo ($page->elementheading()) ?></h2>

  <div class="flex-container flex-column site">
    <div class="flex-growing flex-container">
      <?php snippet('home-element', array('elementName' => 'narrative')); ?>
      <?php snippet('home-element', array('elementName' => 'podcast')); ?>
    </div>

    <figure class="flex-center-img">
      <img style='width:100%;'srcset="https://msc-public.imgix.net/elements.png?w=975&amp; 1x,https://msc-public.imgix.net/elements.png?w=1950&amp; 2x,https://msc-public.imgix.net/elements.png?w=2925&amp; 3x," src="https://msc-public.imgix.net/elements.png?w=975&amp;" alt="MSC interface example">
    </figure>

    <div class="flex-growing flex-container">
      <?php snippet('home-element', array('elementName' => 'edgenotes')); ?>
      <?php snippet('home-element', array('elementName' => 'exercise')); ?>
    </div>
  </div>

  <a class="learn-more-link" href="element">
    <h4><?php echo ($page->elementlearnmore())?> ›</h4>
  </a>
</section>

<section>
  <h2 class="heading site"><?php echo ($page->visionheading()) ?></h2>

  <div class="vision-data flex-container site">
    <?php foreach($page->numbers()->toStructure() as $number): ?>
      <div class="number">
        <h3><span class="number-value"><?php echo $number->number() ?></span>
        <span class="number-description"><?php echo $number->description() ?></span></h3>
      </div>
    <?php endforeach ?>
  </div>

  <a class="learn-more-link" href="msc">
    <h4><?php echo ($page->visionlearnmore())?> ›</h4>
  </a>
</section>


</main>

<?php snippet('footer') ?>
