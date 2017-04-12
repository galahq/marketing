<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
  tagline:
    label: Tagline
    type: textarea
  details:
    label: Details
    type: textarea
  overview:
    label: Overview
    type: textarea
  timeline:
    label: Timeline
    type: structure
    entry: >
       {{dateofitem}} {{item}}
    fields:
      dateofitem:
        label: Date
        type: text
      item:
        label: Item
        type: textarea
  partners:
    label: Partners
    type: structure
    entry: >
       {{logo}} {{link}}
    fields:
      logo:
        label: Logo
        type: text
      link:
        label: Link
        type: text
  competition:
    label: Competition
    type: textarea
  webinars:
    label: Webinars
    type: textarea
  register:
    label: Register
    type: textarea
  logistics:
    label: Logistics
    type: textarea
