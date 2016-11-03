<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" role="main">
  <?php snippet('conference-nav') ?>

  <article class="t-site">
    <h1><?php echo html($page->title()) ?></h1>
    <p><?php echo str_replace('(\\', '(', kirbytext($page->text())) ?></p>
  </article>

</main>

<?php snippet('footer') ?>
