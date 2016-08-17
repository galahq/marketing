<section class="header cf site">
  <a class="logo" href="<?php echo url() ?>">
    <img src="<?php echo url('assets/images/logo.png') ?>" alt="<?php echo $site->title()->html() ?>" />
  </a>
  <?php snippet('menu') ?>
</section>
<div class="submenu-bg">
  <div class="site">
    <?php snippet('submenu') ?>
  </div>
</div>
<section class="hero-child">
<div class="site">
  <div class="centerbox">
    <h1><?php echo $page->pagetagline() ?></h1>
    <p><?php echo str_replace('(\\', '(', kirbytext($page->pagesubtagline())) ?></p>
  </div>
  </div>
</section>
<div class="site cf">
  <?php snippet('menu-mobile') ?>
</div>
 
