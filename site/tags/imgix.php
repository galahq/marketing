<?php


kirbytext::$tags['imgix'] = [
  'attr' => ['alt', 'class', 'size'],
  'html' => function($tag) {
    return '<figure class="'. $tag->attr('class') .'">' .
    imgix_tag(
      $tag->attr('imgix'),
      $tag->attr('alt'),
      $tag->attr('size', '840'),
      [],
      ["class" => $tag->attr('class')]
    ) .
    '</figure>';
  }
]


 ?>
