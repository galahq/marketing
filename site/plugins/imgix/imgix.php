<?php


function imgix_url($filename, $options = []) {
  $imgix_url = "https://msc-public.imgix.net/" . $filename;
  if (count($options) > 0) {
    $imgix_url .= "?";
    foreach ($options as $option => $value) {
      $imgix_url .= $option . "=" . $value . "&";
    }
  }
  return $imgix_url;
}

function scaled_imgix_options($options, $dp, $pixel_density) {
  if ($dp != 0) {
    return array_merge($options, ["w" => $dp * $pixel_density]);
  } else {
    return $options;
  }
}

function imgix_tag($filename, $alt, $dp, $options = array(), $html_options = array()) {
  $img_tag = '<img srcset="';
  if ($dp != 0) {
    foreach (array(1,2,3) as $pixel_density) {
      $img_tag .= imgix_url($filename, scaled_imgix_options($options, $dp, $pixel_density)) . ' ' . $pixel_density . "x,";
    }
  }
  $img_tag .= '" src="' . imgix_url($filename, scaled_imgix_options($options, $dp, 1)) . '"';
  $img_tag .= ' alt="' . $alt . '" ';
  foreach ($html_options as $option => $value) {
    $img_tag .= $option . '="' . $value . '" ';
  }
  $img_tag .= '/>';
  return $img_tag;
}

function imgix($filename, $alt, $dp, $options = array(), $html_options = array()) {
  echo imgix_tag($filename, $alt, $dp, $options, $html_options);
}

function imgix_screenshot_tag($filename, $alt, $options = array(), $html_options = array()) {
  $options = array_merge($options, [
    "bm" => "lighten",
    "bw" => "2880",
    "bh" => "2065",
    "bx" => "112",
    "by" => "140",
    "bf" => "crop",
    "bc" => "top",
    "blend" => $filename
  ]);

  return imgix_tag('safari.png', "Screenshot of " . $alt, 0, $options, $html_options);
}

function imgix_screenshot($filename, $alt, $options = array(), $html_options = array()) {
  echo imgix_screenshot_tag($filename, $alt, $options, $html_options);
}

?>
