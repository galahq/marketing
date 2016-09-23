<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" role="main">
  <section class="site blog cf">
    <?php echo str_replace('(\\', '(', kirbytext($page->text())) ?>
  </section>


  <?php if($page->wbg()->isNotEmpty()) { ?>
    <section class="child-background">
      <div class="site blog">
        <?php echo $page->wbg()->kirbytext(); ?>
      </div>
    </section>
  <?php } ?>

</main>

<?php snippet('footer') ?>



