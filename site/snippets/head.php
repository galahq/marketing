<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/main.css') ?>

  <script src="https://use.typekit.net/fxq4rje.js"></script>
  <script>try{Typekit.load({ async: true  });}catch(e){}</script>
  <?php echo js('assets/js/jquery-3.1.0.js') ?>

  <script type="text/javascript">
  $(document).ready(function(){
    $('.menu-mobile').prepend('<div id="responsive-nav">MENU</div>');
    $('#responsive-nav').on('click',function(){
      $('nav.menu-mobile ul').slideToggle()
    });

    $(window).resize(function(){

      if ($(window).innerWidth() < 768) {
        $('nav.menu-mobile ul li').css('display','block');
        $('nav[class=menu-mobile] ul').hide()
        $('#responsive-nav').show()
      } else {
        $('nav.menu-mobile ul li').css('display','block');
        $('nav.menu-mobile ul').show()
        $('#responsive-nav').hide()
      }
    });

    $(window).resize();

    });
  </script>


</head>
<body class="<?php echo str_replace('.', '-', $page->template()) ?>" id="top">
