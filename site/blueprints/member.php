<?php if(!defined('KIRBY')) exit ?>

title: Member
pages: false
files: true
fields:
  title:
    label: Name
    type:  text
  text:
    label: Text
    type:  textarea
  user_image:
    label: Image
    type: select
    options: query
    query: 
      fetch: images
      value: '{{filename}}'
      text: '{{filename}}'
  tags:
    label: Tags
    type: tags
    separator: /
  mail:
    label: E-Mail
    type:  text
    width: 1/2
  twitter:
    label: Twitter
    type:  text
    width: 1/2
  dribbble:
    label: Dribbble
    type:  text
    width: 1/2
  github:
    label: Github
    type:  text
    width: 1/2
  xing:
    label: Xing
    type:  text
    width: 1/2
  linkedin:
    label: LinkedIn
    type:  text
    width: 1/2
  instagram:
    label: Instagram
    type:  text
    width: 1/2
  facebook:
    label: Facebook
    type:  text
    width: 1/2
