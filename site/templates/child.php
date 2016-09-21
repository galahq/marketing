<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main child-page" role="main">


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

</main>

<?php snippet('footer') ?>
