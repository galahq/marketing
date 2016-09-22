<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" role="main">
  <section class="site blog cf">
    <?php echo str_replace('(\\', '(', kirbytext($page->text())) ?>
  </section>

  <section class="child-background">
    <div class="site blog">
      <?php
      if($page->content()->has('wbg')) {
        echo $page->wbg()->kirbytext();
      }
      ?>
    </div>
  </section>
</main>

<?php snippet('footer') ?>



