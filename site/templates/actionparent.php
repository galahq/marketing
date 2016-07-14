<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" role="main">

  <section class="intro-text">
    <div class="site">
      <?php echo str_replace('(\\', '(', kirbytext($page->text())) ?>
    </div>
  </section>

  <div class="actions">
    <div class="action-items site">
      <?php foreach($pages->find('action')->children() as $action): ?>
        <div><a href="<?php echo $action->link() ?>">
          <?php if($image = $action->image()): ?>
            <img src="<?php echo $image->url() ?>" alt="Icon for <?php echo html($action->title()) ?>">
          <?php endif ?>
          <div class="actiontext">
          <h5 class="uppercase"><?php echo html($action->title()) ?></h5>
          <p><?php echo html($action->description()) ?></p>
          </div>    
        <div class="center-text">
        <button class="button" onclick="window.location.href='action'"><h6>Learn more</h6></button>
        </div>
        </a></div>
      <?php endforeach ?>
    </div>
  </div>
</main>

<?php snippet('footer') ?>
