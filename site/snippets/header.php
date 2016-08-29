<header>
  <?php snippet('menu-mobile') ?>
  <?php if($page->isHomePage()): ?>
    <?php $bannerImage = 'content/home/topbanner.jpg';?>
    <section class="intro" style='background: -webkit-linear-gradient(top, rgba(0,0,0,0) 40%, rgba(53,83,111,0.8) 100%), url("<?php echo $bannerImage ?>") 25%; background-size: cover;' >
      <div class="header cf headerbg">
        <div class="site homebanner cf">
        <a class="logo" href="<?php echo url() ?>">
          <img src="<?php echo url('assets/images/logo.png') ?>" alt="<?php echo $site->title()->html() ?>" />
        </a>
        <?php snippet('menu') ?>
      </div>
      </div>
      <div class="site homebanner">
        <h1><?php echo $page->tagline() ?></h1>
        <p><?php echo str_replace('(\\', '(', kirbytext($page->subtagline())) ?></p>
      </div>
    </section>

 <?php else: ?>

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

   <?php if($site->children()->has($page)): ?>
     <?php $bannerImage = $page->files()->filterBy('filename', '*=', '-banner')->first()->uri();?>

      <section class="hero" style='background: -webkit-linear-gradient(top, rgba(0,0,0,0) 40%, rgba(53,83,111,0.8) 100%), url("<?php echo $bannerImage ?>") 25%; background-size: cover;' >
    <?php else: ?>
      <section class="hero-child">
    <?php endif ?>

  <div class="site">
    <div class="centerbox">
      <h1><?php echo $page->pagetagline() ?></h1>
      <p><?php echo str_replace('(\\', '(', kirbytext($page->pagesubtagline())) ?></p>
    </div>
    </div>
  </section>
<?php endif ?>
</header>
