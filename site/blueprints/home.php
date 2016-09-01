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
  actionlearnmore:
    label: Learn more text for Actions
    type:  text
  elementheading:
    label: Elements Heading
    type: textarea
  elementlearnmore:
    label: Learn more text for Elements
    type:  text
  visionheading:
    label: Vision Heading
    type: textarea
  visionlearnmore:
    label: Learn more text for Visions
    type:  text
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
