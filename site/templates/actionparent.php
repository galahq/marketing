<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" role="main">

  <section class="intro-text site">
    <div>
      <?php echo str_replace('(\\', '(', kirbytext($page->text())) ?>
    <ol class="custom-counter">
      <?php foreach($page->reasons()->toStructure() as $reason): ?>
        <li>
          <h4><?php echo $reason->heading()?></h4>
          <p><?php echo $reason->text()?></p>
        </li>
      <?php endforeach ?>
    </ol>
    </div>
  </section>

  <div class="actions site">
    <?php foreach($pages->find('action')->children() as $action): ?>

      <a href="<?php echo $action->link() ?>">
        <section class="flex-container">
          <?php $homethumbImage = $action->files()->filterBy('filename', '*=', '-homethumb')->first()->uri(); ?>
          <img src="<?php echo $homethumbImage ?>" alt="Image for <?php echo html($action->title()) ?>">
          <div class="actiontext-vertical">
            <h5 class="uppercase"><?php echo html($action->title()) ?></h5>
            <p><?php echo html($action->description()) ?></p>
          </div>
          <div class="actions-arrow"><span>›</span></div>
        </section>
    </a>
    <?php endforeach ?>
  </div>
</main>

<?php snippet('footer') ?>
