<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
fields:
  title:
    label: Title
    type:  text
  tagline:
    label: Tagline
    type: text
  subtagline:
    label: Subtagline
    type: textarea
  actionheading:
    label: Actions Heading
    type: textarea
  elementheading:
    label: Elements Heading
    type: textarea
  visionheading:
    label: Vision Heading
    type: textarea
  numbers:
    label: Numbers
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
