<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" role="main">

  <div>

    <article class="site cf blog">

      <?php echo str_replace('(\\', '(', kirbytext($page->text())) ?>

    </article>

  </div>

</main>

<?php snippet('footer') ?>
