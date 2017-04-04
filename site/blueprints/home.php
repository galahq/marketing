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
  promotions:
    label: Promotions
    type: structure
    entry: >
      {{text}} {{action}} {{link}}
    fields:
      text:
        label: Text
        type: textarea
      action:
        label: Action
        type: text
      link:
        label: Link
        type: text
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
