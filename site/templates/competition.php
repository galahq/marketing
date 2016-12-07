<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" role="main">
  <article class="t-site t-blog">
    <h1><?php echo html($page->title()) ?></h1>
    <p><?php echo str_replace('(\\', '(', kirbytext($page->text())) ?></p>
  </article>

</main>

<?php snippet('footer') ?>
