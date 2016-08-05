<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
  pagetagline:
    label: Page tagline
    type: text
  pagesubtagline:
    lable: Page Sub-tagline
    type: textarea
  text:
    label: Text
    type:  textarea
  link:
    label: link
    type: text
  reasons:
    label: Reasons
    type: structure
    entry: >
       [{{number}}] {{description}}
    fields:
      number:
        label: Number
        type: text
      description:
        label: Description
        type: text
