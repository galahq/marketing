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
    <?php if($page->isHomePage()): ?>
      <section class="intro">
        <section class="site">
          <h1><?php echo $page->tagline() ?></h1>
          <p><?php echo str_replace('(\\', '(', kirbytext($page->subtagline())) ?></p>
        </section>
      </section>

    <?php else: ?>
      <?php snippet('submenu') ?>
      <section class="top-banner">
        <section class="site">
          <h5><?php echo $page->title() ?></h5>
          <h2><?php echo str_replace('(\\', '(', kirbytext($page->tagline())) ?></h2>
        </section>
      </section>

    <?php endif ?>

  </header>
