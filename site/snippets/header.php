<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <script src="https://use.typekit.net/fxq4rje.js"></script>
  <script>try{Typekit.load({ async: true  });}catch(e){}</script>

  <?php echo css('assets/css/main.css') ?>

</head>
<body class="<?php echo str_replace('.', '-', $page->template()) ?>" id="top">

  <header>

    <div class="header cf site">
      <a class="logo" href="<?php echo url() ?>">
        <img src="<?php echo url('assets/images/logo.png') ?>" alt="<?php echo $site->title()->html() ?>" />
      </a>
      <?php snippet('menu') ?>
    </div>

<?php
if($page->isHomePage()):
  $bannerImage = 'content/home/home2.jpg';
else:
  $bannerImage = $page->files()->filterBy('filename', '*=', '-banner')->first()->uri();
endif ?>

    <section class="intro" style='background-image: url("<?php echo $bannerImage ?>")' >
      <section class="site">

        <?php if($page->isHomePage()): ?>

          <h1><?php echo $page->tagline() ?></h1>
          <p><?php echo str_replace('(\\', '(', kirbytext($page->subtagline())) ?></p>

      <?php else: ?>

        <h1><?php echo $page->pagetagline() ?></h1>
        <p><?php echo str_replace('(\\', '(', kirbytext($page->pagesubtagline())) ?></p>

      <?php endif ?>

      </section>
    </section>
    <?php if(!$page->isHomePage()): ?>
      <?php snippet('submenu') ?>
    <?php endif ?>


  </header>
