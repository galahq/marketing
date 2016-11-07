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
  description:
    label: Description
    type: textarea
  pagetagline:
    label: Page tagline
    type: text
  pagesubtagline:
    lable: Page Sub-tagline
    type: textarea
  subdescription:
    label: Description for parent page
    type: textarea
  text:
    label: Text
    type:  textarea
  link:
    label: link
    type: text
  feature:
    label: Key feature
    type: textarea
  featureimg:
    label: Feature image
    type: textarea
  umschools:
    label: UM Schools
    type: structure
    entry: >
      {{logo}} {{link}}
    fields:
      logo:
        label: Logo
        type: text
      link:
        label: link
        type: text
  umunits:
    label: UM Units
    type: structure
    entry: >
      {{logo}} {{link}}
    fields:
      logo:
        label: Logo
        type: text
      link:
        label: link
        type: text
  otherpartners:
    label: Partners beyond UM
    type: structure
    entry: >
      {{logo}} {{link}}
    fields:
      logo:
        label: Logo
        type: text
      link:
        label: link
        type: text
  wbg:
    label: with background
    type: textarea
  timeline:
    label: Timeline
    type: structure
    entry: >
      {{content}} {{dateofevent}} {{newslink}} {{picture}}
    fields:
      content:
        label: Content
        type: textarea
      dateofevent:
        label: Date
        type: text
      newslink:
        label: News link
        type: text
      picture:
        label: Picture
        type: text
  elementexamples:
    label: Examples
    type: structure
    entry: >
      {{background}} {{foreground}} {{description}}
    fields:
      background:
        label: Background
        type: text
      foreground:
        label: Foreground
        type: text
      description:
        label: Description
        type: textarea
  coremembers:
    label: Core Team Members
    type: structure
    entry: >
      {{profilepic}} {{title}}
    fields:
      profilepic:
        label: Profile Picture
        type: text
      nameandtitle:
        label: Name and title
        type: textarea
  othermembers:
    label: Other members
    type: textarea
