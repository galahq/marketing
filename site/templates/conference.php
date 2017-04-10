<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" role="main">
  <div class="t-site t-blog">
    <p><?php echo str_replace('(\\', '(', kirbytext($page->text())) ?></p>
  </div>

</main>

<?php snippet('footer') ?>
