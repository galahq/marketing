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
