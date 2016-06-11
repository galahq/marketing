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
        <div class="site">
          <h1>Redefining Learning</h1>
          <p>
            <em>Real</em> Cases &middot; <em>Real</em> Engagement &middot; <em>Real</em> Results
          </p>
        </div>
      </section>
    <?php endif ?>

    <?php snippet('secondmenu') ?>

  </header>
