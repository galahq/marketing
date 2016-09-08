<?php


kirbytext::$tags['imgix'] = [
  'attr' => ['alt', 'class', 'size'],
  'html' => function($tag) {
    return imgix_tag(
      $tag->attr('imgix'),
      $tag->attr('alt'),
      $tag->attr('size', '840'),
      [],
      ["class" => $tag->attr('class', 'imgix')]
    );
  }
]


 ?>
