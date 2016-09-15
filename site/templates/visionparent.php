<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" role="main">

  <div>

    <article class="site cf blog">

      <?php echo str_replace('(\\', '(', kirbytext($page->text())) ?>

    </article>


    <section class="vision-child-links blog site">
        <?php echo str_replace('(\\', '(', kirbytext($page->tagline())) ?>
    </section>

  </div>

</main>

<?php snippet('footer') ?>
