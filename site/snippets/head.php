<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

  <?php if($page->description() != ''): ?>
    <meta name="description" content="<?php echo $page->description()->html() ?>" />
    <?php else: ?>
    <meta name="description" content="<?php echo $site->description()->html() ?>" />
  <?php endif ?>

  <?php if($page->keywords() != ''): ?>
    <meta name="keywords" content="<?php echo $page->keywords()->html() ?>" />
    <?php else: ?>
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>" />
  <?php endif ?>

  <?php echo css('assets/css/main.css') ?>
  <?php echo css('assets/css/print.css', 'print') ?>
  <link rel="icon"
      type="image/png"
      href="https://msc-public.imgix.net/msc-favicon.png" />

  <script src="https://use.typekit.net/fxq4rje.js"></script>
  <script>try{Typekit.load({ async: false });}catch(e){}</script>

</head>
<body class="<?php echo str_replace('.', '-', $page->template()) ?>" id="<?php echo $page->uid() ?>">
