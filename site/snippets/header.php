<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/main.css') ?>
  <script type="text/javascript">
      (function() {
          var path = '//easy.myfonts.net/v2/js?sid=125718(font-family=Freight+Text+Book+SC)&sid=125720(font-family=Freight+Text+Book+Italic)&sid=125721(font-family=Freight+Text+Book)&sid=125770(font-family=Freight+Text+Medium+Italic)&key=ZIMvxUr7nR',
              protocol = ('https:' == document.location.protocol ? 'https:' : 'http:'),
              trial = document.createElement('script');
          trial.type = 'text/javascript';
          trial.async = true;
          trial.src = protocol + path;
          var head = document.getElementsByTagName("head")[0];
          head.appendChild(trial);
      })();
  </script>

</head>
<body>

  <header class="header cf" role="banner">
    <a class="logo" href="<?php echo url() ?>">
      <img src="<?php echo url('assets/images/logo.png') ?>" alt="<?php echo $site->title()->html() ?>" />
    </a>
    <?php snippet('menu') ?>
  </header>
