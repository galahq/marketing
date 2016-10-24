<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="home main" role="main">

<section><!--Actions-->
  <h2 class="t-site"><?php echo ($page->actionheading()) ?></h2>

  <div class="home__action o-flex-container t-site">
    <?php foreach($pages->find('action')->children() as $action): ?>
      <?php snippet('home-actions', array('action' => $action)) ?>
    <?php endforeach ?>
  </div>

  <a class="home__learnmore" href="action">
    <h4><?php echo ($page->actionlearnmore())?> ›</h4>
  </a>
</section><!--Actions ends-->

<section><!--Elements-->
  <h2 class="t-site"><?php echo ($page->elementheading()) ?></h2>

  <div class="o-flex-container o-flex-column t-site">
    <div class="o-flex-item-growing o-flex-container">
      <?php snippet('home-element', array('elementName' => 'narrative')); ?>
      <?php snippet('home-element', array('elementName' => 'podcast')); ?>
    </div>

    <figure class="o-flex-mid-column">
      <img style='width:100%;'srcset="https://msc-public.imgix.net/elements.png?w=975&amp; 1x,https://msc-public.imgix.net/elements.png?w=1950&amp; 2x,https://msc-public.imgix.net/elements.png?w=2925&amp; 3x," src="https://msc-public.imgix.net/elements.png?w=975&amp;" alt="MSC interface example">
    </figure>

    <div class="o-flex-item-growing o-flex-container">
      <?php snippet('home-element', array('elementName' => 'edgenotes')); ?>
      <?php snippet('home-element', array('elementName' => 'exercise')); ?>
    </div>
  </div>

  <a class="home__learnmore" href="element">
    <h4><?php echo ($page->elementlearnmore())?> ›</h4>
  </a>
</section><!--Elements ends-->

<section><!--Vision-->
  <h2 class="t-site"><?php echo ($page->visionheading()) ?></h2>

  <div class="home__vision o-flex-container t-site">
    <?php foreach($page->numbers()->toStructure() as $number): ?>
      <div class="home__vision__number">
        <h3><span class="home__vision__number__value"><?php echo $number->number() ?></span>
        <span class="home__vision__number__description"><?php echo $number->description() ?></span></h3>
      </div>
    <?php endforeach ?>
  </div>

  <a class="home__learnmore" href="msc">
    <h4><?php echo ($page->visionlearnmore())?> ›</h4>
  </a>
</section><!--Vision ends-->

</main>

<?php snippet('footer') ?>
