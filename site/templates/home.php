<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" role="main">

<div class="actions">
  <div class="site">
    <h3 class="heading"><?php echo str_replace('(\\', '(', kirbytext($page->actionheading())) ?></h3>
  </div>
  <div class="action-items site">
    <?php foreach($pages->find('action')->children() as $action): ?>
      <div><a href="<?php echo $action->link() ?>">
        <?php if($image = $action->image()): ?>
          <img src="<?php echo $image->url() ?>" alt="Icon for <?php echo html($action->title()) ?>">
        <?php endif ?>
        <div class="actiontext">
        <h5 class="uppercase"><?php echo html($action->title()) ?></h5>
        <p><?php echo html($action->tagline()) ?></p>
        </div>
      </a></div>
    <?php endforeach ?>
  </div>
  <div class="site">
  <div class="center-text">
  <button class="button" onclick="window.location.href='action'"><h6>Learn more about actions you can take with MSC</h6></button>
  </div>
  </div>
</div>

<div class="elements">
  <div class="site">
    <h3 class="heading"><?php echo str_replace('(\\', '(', kirbytext($page->elementheading())) ?></h3>
    <div class="flex-3-cols">
      <div class="flex-2-8">
        <div class="ver-flex">
          <div class="flex-1-2">
            <?php $thumb = $pages->find('element')->find('narrative')->files()->filterBy('filename', '*=', '-thumb')->first()->uri();?>
            <img class="img-inline" src="<?php echo $thumb ?>" alt="icon of <?php echo $pages->find('element')->find('narrative')->title() ?>" />
            <h5 class="uppercase cf"><?php echo $pages->find('element')->find('narrative')->title() ?></h5>
            <p><?php echo $pages->find('element')->find('narrative')->description() ?></p>
          </div>
          <div class="flex-1-2">
            <?php $thumb = $pages->find('element')->find('podcast')->files()->filterBy('filename', '*=', '-thumb')->first()->uri();?>
            <img class="img-inline" src="<?php echo $thumb ?>" alt="icon of <?php echo $pages->find('element')->find('podcast')->title() ?>" />
            <h5 class="uppercase cf"><?php echo $pages->find('element')->find('podcast')->title() ?></h5>
            <p><?php echo $pages->find('element')->find('podcast')->description() ?></p>
          </div>
        </div>
      </div>
      <figure class="flex-4-8">
        <img src="content/home/elements.png" alt="MSC interface example" />
      </figure>
      <div class="flex-2-8">
        <div class="ver-flex">
          <div class="flex-1-2 right">
            <?php $thumb = $pages->find('element')->find('edgenotes')->files()->filterBy('filename', '*=', '-thumb')->first()->uri();?>
            <img class="img-inline" src="<?php echo $thumb ?>" alt="icon of <?php echo $pages->find('element')->find('edgenotes')->title() ?>" />
            <h5 class="uppercase cf"><?php echo $pages->find('element')->find('edgenotes')->title() ?></h5>
            <p><?php echo $pages->find('element')->find('edgenotes')->description() ?></p>
          </div>
          <div class="flex-1-2 right">
            <?php $thumb = $pages->find('element')->find('exercise')->files()->filterBy('filename', '*=', '-thumb')->first()->uri();?>
            <img class="img-inline" src="<?php echo $thumb ?>" alt="icon of <?php echo $pages->find('element')->find('exercise')->title() ?>" />
            <h5 class="uppercase cf"><?php echo $pages->find('element')->find('exercise')->title() ?></h5>
            <p><?php echo $pages->find('element')->find('exercise')->description() ?></p>
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="site">
  <div class="center-text">
  <button class="button" onclick="window.location.href='element'"><h6>Learn more about MSC elements</h6></button>
  </div>
  </div>

</div>

<div class="vision-container">
  <div class="site">
    <h3 class="heading"><?php echo str_replace('(\\', '(', kirbytext($page->visionheading())) ?></h3>
  </div>


  <div class="vision site flex-container">
    <?php foreach($page->numbers()->toStructure() as $number): ?>
      <div class="number">
        <span class="number-value"><?php echo $number->number() ?></span>
        <h4 class="number-description"><?php echo $number->description() ?></h4>
      </div>
    <?php endforeach ?>
  </div>
  <div class="site">
  <div class="center-text">
  <button class="button" onclick="window.location.href='vision'"><h6>Learn more about our vision for MSC</h6></button>
  </div>
  </div>

</div>


  </main>

<?php snippet('footer') ?>
