<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" role="main">

  <?php if($page->text()->isNotEmpty()) { ?>
    <section class="t-site t-blog u-clearfix">
      <?php echo str_replace('(\\', '(', kirbytext($page->text())) ?>
      <?php snippet('features') ?>
    </section>
  <?php } ?>

  <?php snippet('examples') ?>

  <?php snippet('partners') ?>

  <?php snippet('timeline') ?>

  <?php snippet('team') ?>

</main>

<?php snippet('footer') ?>
