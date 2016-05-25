<?php

kirbytext::$post[] = function($kirbytext, $value) {

  $value = preg_replace_callback('!\(toc\)!', function($match) use($value) {

    preg_match_all('!<h2>(.*)</h2>!', $value, $matches);

    $ul = brick('ul');
    $ul->addClass('toc');

    foreach($matches[1] as $match) {
      $li = brick('li', '<a href="#' . str::slug(str::unhtml($match)) . '">' . $match . '</a>');
      $ul->append($li);
    }

    return $ul;

  }, $value);

  $value = preg_replace_callback('!<h2>(.*?)</h2>!', function($match) use($value) {
    return '<h2 id="' . str::slug(str::unhtml($match[1])) . '">' . $match[1] . '</h2>';
  }, $value);

  return $value;

};
