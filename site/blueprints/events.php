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
      {{name}} {{datetime}} {{type}} {{limitation}} {{host}} {{topics}}
    fields:
      name:
        label: Name
        type: textarea
      datetime:
        label: Date and Time
        type: datetime
        date:
          format: DD-MM-YYYY
        time:
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
