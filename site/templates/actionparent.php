<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" role="main">

  <section class="intro-text site blog">
    <div>
      <?php echo str_replace('(\\', '(', kirbytext($page->text())) ?>
    <ol class="custom-counter">
      <?php foreach($page->reasons()->toStructure() as $reason): ?>
        <li>
          <h3><?php echo $reason->heading()?></h3>
          <p><?php echo $reason->text()?></p>
        </li>
      <?php endforeach ?>
    </ol>
    </div>
    <h2>Get Involved with MSC:</h2>
  </section>

  <div class="actions site blog">
    <?php foreach($pages->find('action')->children() as $action): ?>
      <a href="<?php echo $action->link() ?>">
        <section class="flex-container">
          <?php imgix($action->slug() . '-homethumb.jpg', $action->title(), 330) ?>
          <div class="actiontext-vertical">
            <h3><?php echo html($action->title()) ?></h3>
            <p><?php echo html($action->subdescription()) ?></p>
          </div>
          <div class="actions-arrow"><span>›</span></div>
        </section>
    </a>
    <?php endforeach ?>
  </div>
</main>

<?php snippet('footer') ?>
