<?php


kirbytext::$tags['imgix'] = [
  'attr' => ['alt', 'class', 'size', 'caption'],
  'html' => function($tag) {
    return '<figure class="'. $tag->attr('class') .'">' .
    imgix_tag(
      $tag->attr('imgix'),
      $tag->attr('alt'),
      $tag->attr('size', '840')
    ) .
    '<figcaption>' . $tag->attr('caption') . '</figcaption>' .
    '</figure>';
  }
];

kirbytext::$tags['imgix_screenshot'] = [
  'attr' => ['alt', 'class','caption'],
  'html' => function($tag) {
    return '<figure class="'. $tag->attr('class') .'">' .
    imgix_screenshot_tag(
      $tag->attr('imgix_screenshot'),
      $tag->attr('alt')
    ) .
    '<figcaption class="imgix-screenshot-caption">' . $tag->attr('caption') . '</figcaption>' .
    '</figure>';
  }
]

 ?>
