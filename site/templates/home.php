<?php snippet('header') ?>

<main class="main" role="main">
  <section class="action-items site">
    <?php foreach($pages->find('action')->children() as $action): ?>
      <div>
        <?php if($image = $action->image()): ?>
          <img src="<?php echo $image->url() ?>" alt="Icon for <?php echo html($action->title()) ?>">
        <?php endif ?>
        <h5 class="uppercase"><?php echo html($action->title()) ?></h5>
        <h4><?php echo html($action->tagline()) ?></h4>
        <p><?php echo html($action->description()) ?></p>
        <button class="button" onclick="window.location.href='<?php echo $action->link() ?>'"><h5>More</h5></button>
      </div>
    <?php endforeach ?>
  </section>

  <section class="scrollable">
    <div class="device-banner">
  </section>

  <section class="elements-tagline">
    <section class="site">
      <h1><?php echo $pages->find('element')->tagline() ?></h1>
    </section>
  </section>

  <section class="elements">
    <?php foreach($pages->find('element')->children() as $element): ?>
      <section class="flip-flop">
        <?php if($image = $element->image()): ?>
        <figure>
          <?php $url = $image->url() ?>
          <?php $ext = $image->extension() ?>
          <img
            src="<?php echo $url ?>"
            srcset="<?php echo $url ?> 1x,
                    <?php echo preg_replace('/\.'.$ext.'/', '@2x.'.$ext, $url) ?> 2x,
                    <?php echo preg_replace('/\.'.$ext.'/', '@3x.'.$ext, $url) ?> 3x"
            alt="Icon for <?php echo html($element->title()) ?>">
        </figure>
        <?php endif ?>
      <div>
        <h5 class="uppercase"><?php echo $element->title() ?></h5>
        <h2><?php echo $element->tagline() ?></h2>
        <?php echo kirbytext($element->description()) ?>
      </div>
      </section>
    <?php endforeach ?>
  </section>

  <section class="vision-frame">
    <section class="site">
      <h1><?php echo $pages->find('vision')->tagline() ?></h1>
    </section>
    <div class="vision site">
      <?php echo str_replace('(\\', '(', kirbytext($pages->find('vision')->description())) ?>
    </div>
  </section>


  </main>

<?php snippet('footer') ?>
