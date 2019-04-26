<?php if(!defined('KIRBY')) exit ?>

title: Events
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
  pagetagline:
    label: Page tagline
    type: text
  Pagesubtagline:
    label: page subtagline
    type: text
  eventitems:
    label: Event item
    type: structure
    entry: >
      {{name}} {{date}} {{time}} {{type}} {{limitation}} {{host}} {{eventlink}} {{topics}}
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
          Workshop/Seminar: Workshop/Seminar
          Lecture: Lecture
          Webinar: Webinar
          Meeting/Conference: Meeting/Conference
          Other: Other
      limitation:
        label: Limitation
        type: text
        default: Public
      host:
        label: Host
        type: text
      location:
        label: Location
        type: text
      locationlink:
        label: Location link
        type: text
      eventlink:
        label: Link to the event
        type: text
      topics:
        label: Topics
        type: checkboxes
        options:
          Case production: Case production
          Case methodology: Case methodology
          Assessment and evaluation: Assessment and evaluation
          Case teaching: Case teaching
