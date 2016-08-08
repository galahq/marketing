<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" role="main">

  <section class="intro-text">
    <div class="site">
      <?php echo str_replace('(\\', '(', kirbytext($page->text())) ?>

    <ol class="custom-counter">
      <?php foreach($page->reasons()->toStructure() as $reason): ?>
        <li><?php echo $reason->text()?></li>
      <?php endforeach ?>
    </ol>
    </div>
  </section>

  <div class="actions site">
    <?php foreach($pages->find('action')->children() as $action): ?>

    <section class="flex-container">
      <div class="action-img">
      <?php if($image = $action->image()): ?>
        <img src="<?php echo $image->url() ?>" alt="Image for <?php echo html($action->title()) ?>">
      <?php endif ?>
      </div>
      <div class="actiontext-vertical">
        <h5 class="uppercase"><?php echo html($action->title()) ?></h5>
        <p><?php echo html($action->description()) ?></p>
      </div>
      <div class="action-button flex-center-img arrow-learn">
        <a href="<?php echo $action->link() ?>">›</a>
      </div>
    </section>
    <?php endforeach ?>
  </div>
</main>

<?php snippet('footer') ?>
