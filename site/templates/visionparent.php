<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" role="main">

  <div>

    <article class="t-site u-clearfix t-blog">

      <?php echo str_replace('(\\', '(', kirbytext($page->text())) ?>

    </article>


    <section class="u-visionitem__link t-blog t-site">
        <?php echo str_replace('(\\', '(', kirbytext($page->tagline())) ?>
    </section>

  </div>

</main>

<?php snippet('footer') ?>
