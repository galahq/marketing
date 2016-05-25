<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/main.css') ?>
  <link href='https://fonts.googleapis.com/css?family=Lato:400,300,400italic,700,900' rel='stylesheet' type='text/css'>

</head>
<body>
  <?php if($page->isHomePage()): ?>
  <header class="header cf site" role="banner">
    <a class="logo" href="<?php echo url() ?>">
      <img src="<?php echo url('assets/images/logo.png') ?>" alt="<?php echo $site->title()->html() ?>" />
    </a>
    <?php snippet('menu') ?>
  </header>

  <?php else: ?>
  <header class="header cf site" role="banner">
    <a class="logo" href="<?php echo url() ?>">
      <img src="<?php echo url('assets/images/logo.png') ?>" alt="<?php echo $site->title()->html() ?>" />
    </a>
    <?php snippet('menu') ?>
  </header>

  <?php endif ?>
