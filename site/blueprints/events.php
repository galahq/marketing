<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
  eventitems:
    label: Event item
    type: structure
    entry: >
      {{name}} {{date}} {{time}} {{type}} {{limitation}} {{host}} {{topics}}
    fields:
      name:
        label: Name
        type: textarea
      date:
        label: Date
        type: date
      time:
        label: Time
        type: time
        format: 12
        interval: 15
      type:
        label: Type
        type: checkboxes
        options:
          workshop: Workshop
          lecture: Lecture
          webinar: Webinar
      limitation:
        label: Limitation
        type: text
      host:
        label: Host
        type: text
      topics:
        label: Topics
        type: checkboxes
        options:
          production: Case production
          methodology: Case methodology
          assessment: Assessment and evaluation
          teaching: Case teaching
