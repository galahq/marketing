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
      <h2><?php echo $pages->find('element')->tagline() ?></h2>
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
      <button class="button" onclick="window.location.href='<?php echo $element->link() ?>'"><h5>More</h5></button>
      </div>
      </section>
    <?php endforeach ?>
  </section>

  <section class="vision-frame">
    <section class="site">
      <h2><?php echo $pages->find('vision')->tagline() ?></h2>
    </section>
    <div class="vision site">
      <div class="column">
        <img src="content/3-vision/first.png" alt="1st" />
        <h4>platform for sustainability oriented teaching cases</h4>
      </div>
      <div class="column">
        <img src="content/3-vision/onehundred.png" alt="100+" />
        <h4>current case producers</h4>
      </div>
      <div class="column">
        <img src="content/3-vision/fifteen.png" alt="15+" />
        <h4>on campus partners</h4>
      </div>
      <div class="column">
        <img src="content/3-vision/ninetyfive.png" alt="95%" />
        <h4>satisfaction rate in piloting cases</h4>
      </div>
      <div class="column">
        <img src="content/3-vision/twohundred.png" alt="200" />
        <h4>cases in the course of four years</h4>
      </div>
      <div class="column">
        <img src="content/3-vision/thirty.png" alt="30+" />
        <h4>years of case based teaching</h4>
      </div>
      <div class="conclude">
        <p>
          Our goal is to transform sustainability learning by transforming teaching methods in all academic fields. Case-based curricular innovation will lead to a more engaged, participatory learning. It will also enable students to achieve sustainability competencies, which will help develop students towards their full potential—becoming future sustainability leaders.
        </p>
      </div>
      <button class="button" onclick="window.location.href='vision'"><h5>More</h5></button>
    </div>
  </section>


  </main>

<?php snippet('footer') ?>
