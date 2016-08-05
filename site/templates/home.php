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

  <a class="button" href="action">
    <h6>Learn more about actions you can take with MSC</h6>
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
      <img src="content/home/elements.png" alt="MSC interface example" />
    </figure>

    <div class="flex-growing flex-container">
      <?php snippet('home-element', array('elementName' => 'edgenotes')); ?>
      <?php snippet('home-element', array('elementName' => 'exercise')); ?>
    </div>
  </div>

  <a class="button" href="element">
    <h6>Learn more about MSC elements</h6>
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

  <a class="button" href="vision">
    <h6>Learn more about our vision for MSC</h6>
  </a>
</section>


</main>

<?php snippet('footer') ?>
