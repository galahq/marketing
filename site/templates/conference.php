<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" role="main">

  <div class="t-site">
    <?php snippet('conference-nav') ?>

    <article>
      <h1><?php echo html($page->title()) ?></h1>
      <p><?php echo str_replace('(\\', '(', kirbytext($page->text())) ?></p>
    </article>

  </div>

</main>

<?php snippet('footer') ?>
