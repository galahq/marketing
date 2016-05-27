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
  <?php if($page->isHomePage()): ?>
  <header>
    <div class="header cf site">
      <a class="logo" href="<?php echo url() ?>">
        <img src="<?php echo url('assets/images/logo.png') ?>" alt="<?php echo $site->title()->html() ?>" />
      </a>
      <?php snippet('menu') ?>
    </div>
    <section class="intro">
      <div class="site">
      <h1>Way better than lectures.</h1>
      <p>Capturing <em>real</em> problems and <em>real</em> decision makers to equip students with problem solving skills applicable in the <em>real</em> world. </p>
      </div>
    </section>
  </header>

  <?php else: ?>
  <header>
    <div class="header cf site">
      <a class="logo" href="<?php echo url() ?>">
        <img src="<?php echo url('assets/images/logo.png') ?>" alt="<?php echo $site->title()->html() ?>" />
      </a>
      <?php snippet('menu') ?>
    </div>
  </header>

  <?php endif ?>
