<?php snippet('header') ?>

<main class="main" role="main">

  <div>

    <article class="site cf">

      <?php echo str_replace('(\\', '(', kirbytext($page->text())) ?>

    </article>

  </div>

</main>

<?php snippet('footer') ?>
