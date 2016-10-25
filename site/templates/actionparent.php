<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" role="main">

  <section class="t-site t-blog">
    <div class="c-separate-text">
      <?php echo str_replace('(\\', '(', kirbytext($page->text())) ?>
    </div>
    <ol>
      <?php foreach($page->reasons()->toStructure() as $reason): ?>
        <li>
          <h3><?php echo $reason->heading()?></h3>
          <p><?php echo $reason->text()?></p>
        </li>
      <?php endforeach ?>
    </ol>
    <h2>Get Involved with MSC:</h2>
  </section>

  <div class="u-actionitem t-site t-blog">
    <?php foreach($pages->find('action')->children() as $action): ?>
      <a href="<?php echo $action->link() ?>">
        <section class="o-flex-container">
          <?php imgix($action->slug() . '-homethumb.jpg', $action->title(), 330) ?>
          <div class="u-actionitem__text">
            <h3><?php echo html($action->title()) ?></h3>
            <p><?php echo html($action->subdescription()) ?></p>
          </div>
          <div class="u-actionitem__arrow"><span>›</span></div>
        </section>
    </a>
    <?php endforeach ?>
  </div>
</main>

<?php snippet('footer') ?>
